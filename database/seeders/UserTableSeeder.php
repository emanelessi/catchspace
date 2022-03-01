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
        $user_level_admin->name='Admin';
        $user_level_admin->save();

//        `full_name`, `email`, `password`, `phone`, `type`, `user_level_id`,'provider_id'
        $admin=new  User();
        $admin->full_name='Admin';
        $admin->email='admin@admin.com';
        $admin->password=bcrypt('123456');
        $admin->phone='0567013637';
        $admin->type='admin';
        $admin->user_level_id=1;
        $admin->provider_id=null;
        $admin->save();

        $dina_admin=new  User();
        $dina_admin->full_name='Dina Akila';
        $dina_admin->email='dinashadiakeela@gmail.com';
        $dina_admin->password=bcrypt('d123456');
        $dina_admin->phone='0597505581';
        $dina_admin->type='admin';
        $dina_admin->user_level_id=1;
        $dina_admin->provider_id=null;
        $dina_admin->save();

        $eman_admin=new  User();
        $eman_admin->full_name='Eman Elessi';
        $eman_admin->email='hanieman86@gmail.com';
        $eman_admin->password=bcrypt('0599174952');
        $eman_admin->phone='0599174952';
        $eman_admin->type='admin';
        $eman_admin->user_level_id=1;
        $eman_admin->provider_id=null;
        $eman_admin->save();

        $jumana_admin=new  User();
        $jumana_admin->full_name='Jumana Shawwa';
        $jumana_admin->email='jumanashawwa1@gmail.com';
        $jumana_admin->password=bcrypt('0595866320');
        $jumana_admin->phone='0595866320';
        $jumana_admin->type='admin';
        $jumana_admin->user_level_id=1;
        $jumana_admin->provider_id=null;
        $jumana_admin->save();

        $dalia_admin=new  User();
        $dalia_admin->full_name='Dalia Marouf';
        $dalia_admin->email='dalia.5.6.2000@gmail.com';
        $dalia_admin->password=bcrypt('0592072589');
        $dalia_admin->phone='0592072589';
        $dalia_admin->type='admin';
        $dalia_admin->user_level_id=1;
        $dalia_admin->provider_id=null;
        $dalia_admin->save();
    }
}
