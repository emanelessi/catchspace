<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
// `name`, `user_level_id`, `provider_id`, `guard_name`
        $adminRole= new  Role();
        $adminRole->name = 'Admin';
        $adminRole->user_level_id = 1;
        $adminRole->provider_id = null;
        $adminRole->guard_name = 'web';
        $adminRole->save();

        $providerRole= new  Role();
        $providerRole->name = 'Provider';
        $providerRole->user_level_id = 2;
        $providerRole->provider_id = 1;
        $providerRole->guard_name = 'web';
        $providerRole->save();
    }
}
