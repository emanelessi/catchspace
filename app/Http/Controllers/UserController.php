<?php

namespace App\Http\Controllers;

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

    }

    public function index()
    {
        $users = User::all();
        return view('admin.user.users', compact('users'));

    }


    public function create()
    {
        $page = config('pages.users');
        $superadmin_user_level_id = config('roles.admin');

        $user = auth()->user();
        $user_level_id = $user->user_level_id;
        $provider_user_level_id = config('roles.provider');
        $provider = User::whereNotNull('provider_id')->get();
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
//        $user_level_id = $request['user_level_id'];
//        $provider_user_level_id = config('roles.provider');

//        if ($user_level_id == $provider_user_level_id) {
//            if (!$provider_user_level_id = $request['provider_id']) {
//                return back()->with('error', trans('cp.messages.fill_information'));
//            }
//        }
//        $request['created_by'] = auth()->user()->id;

//        $user = User::createInstance($request->all());
        $user = new User();
        $user->full_name =  request('full_name');
        $user->email =  request('email');
        $user->password = Hash::make( request('password'));
        $user->phone =  request('phone');
        $user->type = $request->input('type') ==1?'admin':'provider';
        $user->user_level_id = $request->input('type') ==1?1:2;
        $user->provider_id  = $request->input('type') ==1?null:$request->input('provider');
        $user->save();
        DB::table('model_has_roles')->insert(['role_id' => request('role'), 'model_type' => "App\Models\User", 'model_id' => $user->id]);
        return back()->with('success', trans('cp.messages.add_success'));

    }


    public function edit($id)
    {
        $page = config('pages.users');
        $superadmin_user_level_id = config('roles.admin');
        $enterprise_user_level_id = config('roles.enterprise');
        $brand_user_level_id = config('roles.brand');
        $branch_user_level_id = config('roles.branch');
        $inventory_user_level_id = config('roles.inventory');
        $seller_user_level_id = config('roles.seller');

        $user = User::withTrashed()->findOrFail($id);
        $user_level_id = $user->user_level_id;

        $roles = [];
        $api_permissions = [];
        $branch_payment_methods = [];

        if ($user_level_id == $superadmin_user_level_id) {
            $roles = Role::orderBy('id', 'DESC')->where('user_level_id', $superadmin_user_level_id)->get();
        } else if ($user_level_id == $enterprise_user_level_id) {
            $enterprise_id = $user->enterprise_id;
            $roles = Role::orderBy('id', 'DESC')->where('user_level_id', $enterprise_user_level_id)->where('enterprise_id', $enterprise_id)->get();
        } else if ($user_level_id == $brand_user_level_id) {
            $brand_id = $user->brand_id;
            $roles = Role::orderBy('id', 'DESC')->where('user_level_id', $brand_user_level_id)->where('brand_id', $brand_id)->get();
        } else if ($user_level_id == $branch_user_level_id) {
            $branch_id = $user->branch_id;
            $roles = Role::orderBy('id', 'DESC')->where('user_level_id', $branch_user_level_id)->where('branch_id', $branch_id)->get();
            $api_permissions = ApiPermission::all();
            $branch_payment_methods = BranchPaymentMethod::all();
        } else if ($user_level_id == $inventory_user_level_id) {
            $inventory_id = $user->inventory_id;
            $roles = Role::orderBy('id', 'DESC')->where('user_level_id', $inventory_user_level_id)->where('inventory_id', $inventory_id)->get();
        } else if ($user_level_id == $seller_user_level_id) {
            $seller_id = $user->seller_id;
            $roles = Role::orderBy('id', 'DESC')->where('user_level_id', $seller_user_level_id)->where('seller_id', $seller_id)->get();
        }


        return view('users.edit_some')->with(compact('page', 'user', 'roles', 'api_permissions', 'branch_payment_methods'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($employee_id = request('employee_id')) {
            $user->employee_id = request('employee_id');
            $user->save();
        }


        if ($password = request('password')) {
            $this->validate(request(), [
                'password' => 'required|min:6|confirmed'
            ]);
            $user->password = request('password');
            $user->save();
        }


        if ($role_id = request('role_id')) {
            if (!empty($role_id) && $role_id > 0) {
                DB::table('model_has_roles')->where('model_id', $user->id)->delete();
                DB::table('model_has_roles')->insert(['role_id' => $role_id, 'model_type' => "App\User", 'model_id' => $user->id]);
            }
        }


        if (!empty($request['api_permissions'])) {
            $api_permissions = $request['api_permissions'];

            DB::table('api_permission_user')->where('user_id', $user->id)->delete();

            $rows = [];
            foreach ($api_permissions as $api_permission_id) {
                $rows[] = ['user_id' => $user->id, 'api_permission_id' => $api_permission_id];
            }
            DB::table('api_permission_user')->insert($rows);

            $user->api_permissions()->sync($api_permissions);
        }

        if (!empty($request['branch_payment_methods'])) {
            $branch_payment_methods = $request['branch_payment_methods'];

            DB::table('branch_payment_method_user')->where('user_id', $user->id)->delete();

            $rows = [];
            foreach ($branch_payment_methods as $branch_payment_method_id) {
                $rows[] = ['user_id' => $user->id, 'branch_payment_method_id' => $branch_payment_method_id];
            }
            DB::table('branch_payment_method_user')->insert($rows);
        }


        return back()->with('success', trans('cp.messages.modify_success'));
    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success',trans('cp.messages.roles.role_deleted'));
    }

}
