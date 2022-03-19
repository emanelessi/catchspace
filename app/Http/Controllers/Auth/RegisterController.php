<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'max:10'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $provider = new Provider();
        $provider->name = $data['Co-name'];
        $provider->owner_name = $data['full_name'];
        $provider->address = $data['address'];
        $provider->logo = storeImage('providers', 'logo');
        $provider->save();

        $user = new User();
        $user->full_name = $data['full_name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->phone = $data['phone'];
        $user->type = 'provider';
        $user->user_level_id = 2;
        $user->provider_id  = $provider->id;
        $user->save();


        $providerRole= new  Role();
        $providerRole->name = 'Provider'.$provider->id;
        $providerRole->user_level_id = $user->user_level_id;
        $providerRole->provider_id = $provider->id;
        $providerRole->guard_name = 'web';
        $providerRole->save();
//        $provider = Role::create(['name' => 'Provider']);

        $providerPermissions = [
            'provider_edit',
            'provider_access',
            'policies_create',
            'policies_edit',
            'policies_show',
            'policies_delete',
            'policies_access',
            'worker_create',
            'worker_edit',
            'worker_show',
            'worker_delete',
            'worker_access',
            'workspace_create',
            'workspace_edit',
            'workspace_show',
            'workspace_delete',
            'workspace_access',
            'services_access',
            'pricing_access',
            'addons_access',
            'services_create',
            'services_delete',
            'services_edit',
            'pricing_create',
            'pricing_delete',
            'pricing_edit',
            'addons_create',
            'addons_delete',
            'addons_edit',

        ];

        foreach ($providerPermissions as $permission) {
            $providerRole->givePermissionTo($permission);
        }
        DB::table('model_has_roles')
            ->insert(['role_id' => 1,
                'model_type' => "App\Models\User", 'model_id' => $user->id]);
        return $user;

    }
}
