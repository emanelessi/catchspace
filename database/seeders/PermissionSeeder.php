<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            'role_edit',
            'role_show',
            'role_delete',
            'role_access',
            'provider_create',
            'provider_edit',
            'provider_show',
            'provider_delete',
//            'provider_access',
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

        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }

        // gets all permissions via Gate::before rule; see AuthServiceProvider
//        Role::create(['name' => 'Super Admin']);

        $provider = Role::create(['name' => 'Provider']);

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

        ];

        foreach ($providerPermissions as $permission) {
            $provider->givePermissionTo($permission);
        }

        $super_admin = Role::create(['name' => 'Super Admin']);

        $superAdminPermissions = [
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
            'worker_show',
            'worker_access',

        ];

        foreach ($superAdminPermissions as $permission) {
            $super_admin->givePermissionTo($permission);
        }


        $test = Role::create(['name' => 'Test']);

        $testPermissions = [
            'workspace_create',
            'workspace_show',
            'workspace_delete',
            'workspace_access',

        ];

        foreach ($testPermissions as $permission) {
            $test->givePermissionTo($permission);
        }
    }

}
