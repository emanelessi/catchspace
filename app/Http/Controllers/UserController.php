<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:user_show', ['only' => ['index']]);
        $this->middleware('permission:user_create', ['only' => ['create','store']]);
        $this->middleware('permission:user_edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user_delete', ['only' => ['destroy']]);
        $this->middleware('permission:permission_access', ['only' => ['profile']]);

    }

    public function index()
    {
        $users = User::withTrashed()->get();
        return view('admin.user.users', compact('users'));

    }


    public function create()
    {
        $page = config('pages.users');
        $superadmin_user_level_id = config('roles.admin');

        $user = auth()->user();
        $user_level_id = $user->user_level_id;
        $provider_user_level_id = config('roles.provider');
        $provider = Provider::all();
        $role = Role::all();

        if ($user->user_level_id == $superadmin_user_level_id) {
            $user_levels = UserLevel::all();
        } else if ($user->user_level_id == $provider_user_level_id) {
            $user_levels = UserLevel::where('id', '>=', $provider_user_level_id)->get();
        }

        return view('admin.user.addUser')->with(compact('page', 'provider', 'role'));
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->full_name = request('full_name');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->phone = request('phone');
        $user->type = $request->input('type') == 1 ? 'admin' : 'provider';
        $user->user_level_id = $request->input('type') == 1 ? 1 : 2;
        $user->provider_id = $request->input('type') == 1 ? null : $request->input('provider');
        $user->save();
        DB::table('model_has_roles')->insert(['role_id' => request('role'), 'model_type' => "App\Models\User", 'model_id' => $user->id]);
        return back()->with('success', trans('messages.user.user_created'));

    }


    public function edit($id)
    {
        $page = config('pages.users');
        $superadmin_user_level_id = config('roles.admin');
        $provider_user_level_id = config('roles.provider');
        $provider = User::whereNotNull('provider_id')->get();
        $role = Role::all();

        $user = User::withTrashed()->findOrFail($id);
        $user_level_id = $user->user_level_id;

        $roles = [];

        if ($user_level_id == $superadmin_user_level_id) {
            $roles = Role::orderBy('id', 'DESC')->where('user_level_id', $superadmin_user_level_id)->get();
        } else if ($user_level_id == $provider_user_level_id) {
            $provider_id = $user->provider_id;
            $roles = Role::orderBy('id', 'DESC')->where('user_level_id', $provider_user_level_id)->where('provider_id', $provider_user_level_id)->get();
        }


        return view('admin.user.editUser')->with(compact('page', 'user', 'role', 'provider'));
    }


    public function update(Request $request)
    {
        $id = request('id');
        $user = User::withTrashed()->findOrFail($id);
        $user->full_name = request('full_name');
        if ($email = request('email')) {
            $user->email = request('email');
        }

        if ($phone = request('phone')) {
            $user->phone = request('phone');
            $user->save();
        }
        $user->type = $request->input('type') == 1 ? 'admin' : 'provider';
        $user->user_level_id = $request->input('type') == 1 ? 1 : 2;
        $user->provider_id = $request->input('type') == 1 ? null : $request->input('provider');
        if ($password = request('password')) {
            $this->validate(request(), [
                'password' => 'required|min:6|confirmed'
            ]);
            $user->password = request('password');
            $user->save();
        }
        $user->save();


        if ($role_id = request('role')) {
            if (!empty($role_id) && $role_id > 0) {
                DB::table('model_has_roles')->where('model_id', $user->id)->delete();
                DB::table('model_has_roles')->insert(['role_id' => request('role'), 'model_type' => "App\Models\User", 'model_id' => $user->id]);
            }
        }

        return back()->with('success', trans('messages.user.user_updated'));
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', trans('messages.user.user_deleted'));
    }

    public function restore($id)
    {
        User::where('id', $id)->withTrashed()->restore();

        return back()->with('success', trans('messages.user.user_restored'));
    }

    public function profile()
    {
        $user=auth()->user();
        return view('admin.profile')->with(compact('user'));
    }

}
