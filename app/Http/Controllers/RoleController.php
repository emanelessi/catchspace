<?php
namespace App\Http\Controllers;

use App\Level;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:role_access', ['only' => ['index']]);
        $this->middleware('permission:role_create', ['only' => ['create','store']]);
        $this->middleware('permission:role_delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $page = config('pages.roles');
        $superadmin_user_level_id = 1;
        $provider_user_level_id = 2;
        $user = auth()->user();

        if ($user->user_level_id == $superadmin_user_level_id) {
            $roles = Role::orderBy('id','DESC')->withTrashed()->get();
//            $roles = Auth::user()->getAllPermissions();
//            dd($roles->toArray());
        } else if ($user->user_level_id == $provider_user_level_id) {
            $provider_id = $user->provider_id;
            $roles = Role::where('provider_id', $provider_id)->orderBy('id','DESC')->withTrashed()->get();
        }

       # name, userLevel.name, provider.name
        return view('admin.role.roles',compact('roles','page'));
    }

    public function create()
    {
        $page = config('pages.roles');
        $permission = Permission::all();
        $provider_user_level_id = config('roles.provider');
        $superadmin_user_level_id = config('roles.admin');
        $provider=User::whereNotNull('provider_id')->get();
        $user = auth()->user();
        $user_level_id = $user->user_level_id;

        if ($user->user_level_id == $superadmin_user_level_id) {
            $user_levels = UserLevel::all();
        } else if ($user->user_level_id == $provider_user_level_id) {
            $user_levels = UserLevel::where('id', '>=', $provider_user_level_id)->get();
        }

        return view('admin.role.addRole',compact('permission','page','provider'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permissions' => 'required',
            'type' => 'required',
        ]);

        $provider_user_level_id = config('roles.provider');
        $superadmin_user_level_id = config('roles.admin');
        $user_level_id = $request['type'];
        $provider= $request->input('provider', null);
        if ( $request->input('type')==1){
            $provider=null;
        }
        $role = Role::create(['name' => $request->input('name'),'user_level_id' => $request->input('type'),
            'provider_id' => $provider,
            ]);
        $role->syncPermissions($request->input('permissions'));

        return back()->with('success',trans('messages.role.role_created'));
    }


    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return back()->with('success',trans('messages.role.role_deleted'));
    }

    public function restore($id)
    {
        Role::where('id', $id)->withTrashed()->restore();

        return back()->with('success', trans('messages.role.role_restored'));
    }
}
