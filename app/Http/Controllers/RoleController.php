<?php
namespace App\Http\Controllers;

use App\Level;
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
//        $this->middleware('permission:role_access', ['only' => ['index']]);
//        $this->middleware('permission:role_create', ['only' => ['create','store']]);
//        $this->middleware('permission:role_edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:role_delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $page = config('pages.roles');
        $superadmin_user_level_id = 1;
        $provider_user_level_id = 2;
        $user = auth()->user();

        if ($user->user_level_id == $superadmin_user_level_id) {
            $roles = Role::orderBy('id','DESC')->get();
//            $roles = Auth::user()->getAllPermissions();
//            dd($roles->toArray());
        } else if ($user->user_level_id == $provider_user_level_id) {
            $provider_id = $user->provider_id;
            $roles = Role::where('provider_id', $provider_id)->orderBy('id','DESC')->get();
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

        $user = auth()->user();
        $user_level_id = $user->user_level_id;

        if ($user->user_level_id == $superadmin_user_level_id) {
            $user_levels = UserLevel::all();
        } else if ($user->user_level_id == $provider_user_level_id) {
            $user_levels = UserLevel::where('id', '>=', $provider_user_level_id)->get();
        }

        return view('admin.role.addRole',compact('permission','page'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
            'user_level_id' => 'required',
        ]);

        $enterprise_user_level_id = config('roles.enterprise');
        $brand_user_level_id = config('roles.brand');
        $branch_user_level_id = config('roles.branch');
        $inventory_user_level_id = config('roles.inventory');
        $seller_user_level_id = config('roles.seller');

        $user_level_id = $request['user_level_id'];

        if ($user_level_id == $enterprise_user_level_id) {
            if (!$enterprise_id = $request['enterprise_id']) {
                return back()->with('error', trans('cp.messages.fill_information'));
            }
        } else if ($user_level_id == $brand_user_level_id) {
            if ((!$enterprise_id = $request['enterprise_id']) || (!$brand_id = $request['brand_id'])) {
                return back()->with('error', trans('cp.messages.fill_information'));
            }
        }

        $role = Role::create(['name' => $request->input('name'),'user_level_id' => $request->input('user_level_id'),
            'enterprise_id' => $request->input('enterprise_id', null),
            ]);
        $role->syncPermissions($request->input('permission'));

        return back()->with('success',trans('cp.messages.roles.role_created'));
    }

    public function edit($id)
    {
        $page = config('pages.roles');
        $role = Role::findOrFail($id);
        $permission = Permission::get();
        $rolePermissions = \Illuminate\Support\Facades\DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

        return view('roles.edit',compact('role','permission','rolePermissions','page'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->user_level_id = $request->input('user_level_id');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return back()->with('success',trans('cp.messages.roles.role_updated'));
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return back()->with('success',trans('cp.messages.roles.role_deleted'));
    }
}
