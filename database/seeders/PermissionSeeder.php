<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permissions = [
            'user_management_access',
            'permission_create',
            'permission_edit',
            'permission_show',
            'permission_delete',
            'permission_access',
            'role_create',
//            'role_edit',
            'role_show',
            'role_delete',
            'role_access',
            'provider_create',
            'provider_edit',
            'provider_show',
            'provider_delete',
            'provider_access',
            'workspace_create',
            'workspace_edit',
            'workspace_show',
            'workspace_delete',
            'workspace_access',
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
            'user_edit',
            'user_delete',
            'user_show',
            'user_create',
            'services_show',
            'pricing_show',
            'addons_show',
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

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }

        // gets all permissions via Gate::before rule; see AuthServiceProvider

//        Role::create(['name' => 'Super Admin']);
        $providerRole= new  Role();
        $providerRole->name = 'Provider';
        $providerRole->user_level_id = 2;
        $providerRole->provider_id = 1;
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
                'model_type' => "App\Models\User", 'model_id' => 6]);

//        $super_admin = Role::create(['name' => 'Super Admin']);
        $adminRole= new  Role();
        $adminRole->name = 'Admin';
        $adminRole->user_level_id = 1;
        $adminRole->provider_id = null;
        $adminRole->guard_name = 'web';
        $adminRole->save();

        $superAdminPermissions = [
            'provider_create',
            'provider_edit',
            'provider_show',
            'provider_delete',
            'user_create',
            'workspace_create',
            'workspace_edit',
            'workspace_show',
            'workspace_delete',
            'workspace_access',
            'worker_show',
            'worker_access',
            'user_edit',
            'user_delete',
            'user_show',
            'role_access',
            'role_delete',
            'role_show',
            'role_create',
            'permission_access',
            'services_show',
            'pricing_show',
            'addons_show',

        ];

        foreach ($superAdminPermissions as $permission) {
            $adminRole->givePermissionTo($permission);
        }

        DB::table('model_has_roles')
            ->insert(['role_id' => 2,
                'model_type' => "App\Models\User", 'model_id' => 1]);

        $testRole= new  Role();
        $testRole->name = 'Test Provider';
        $testRole->user_level_id = 2;
        $testRole->provider_id = 2;
        $testRole->guard_name = 'web';
        $testRole->save();

        $testPermissions = [
            'workspace_create',
            'workspace_show',
            'workspace_delete',
            'workspace_access',

        ];

        foreach ($testPermissions as $permission) {
            $testRole->givePermissionTo($permission);
        }
    }

}
