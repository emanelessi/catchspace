<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_level_admin=new UserLevel();
        $user_level_admin->name='admin';
        $user_level_admin->save();

//        `full_name`, `email`, `password`, `phone`, `type`, `user_level_id`
        $admin=new  User();
        $admin->full_name='admin';
        $admin->email='admin@admin.com';
        $admin->password=bcrypt('123456');
        $admin->phone='0597505581';
        $admin->type='admin';
        $admin->user_level_id=1;
        $admin->save();
    }
}
