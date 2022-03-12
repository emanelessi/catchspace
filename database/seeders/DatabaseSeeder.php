<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ProviderTableSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(WorkSpaceSeeder::class);
        $this->call(PoliciesSeeder::class);
        $this->call(WorkersSeeder::class);

//        $this->call(RoleSeeder::class);

    }
}
