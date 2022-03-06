<?php

namespace Database\Seeders;

use App\Models\Provider;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Database\Seeder;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_level_admin = new UserLevel();
        $user_level_admin->name = 'Provider';
        $user_level_admin->save();
//        `name`, `owner_name`, `address`, `logo`
        $provider = new  Provider();
        $provider->name = 'provider name';
        $provider->owner_name = 'owner';
        $provider->address = 'Gaza';
        $provider->logo = '/providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg';
        $provider->save();

        $testProvider = new  Provider();
        $testProvider->name = 'Test provider name';
        $testProvider->owner_name = 'owner';
        $testProvider->address = 'Gaza';
        $testProvider->logo = '/providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg';
        $testProvider->save();
//        `full_name`, `email`, `password`, `phone`, `type`, `user_level_id`,'provider_id'
        $provider_login = new  User();
        $provider_login->full_name = 'Provider';
        $provider_login->email = 'provider@gmail.com';
        $provider_login->password = bcrypt('123456');
        $provider_login->phone = '0567013637';
        $provider_login->type = 'provider';
        $provider_login->user_level_id = 2;
        $provider_login->provider_id = $provider->id;
        $provider_login->save();


    }
}
