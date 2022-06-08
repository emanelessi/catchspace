<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Provider;
use App\Models\ProviderAttribute;
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
        $provider->name = 'Lego';
        $provider->owner_name = 'Aseel Mousa';
        $provider->address = 'El Sinaa Crossing, LEGO Business Center Building';
        $provider->phone = '0598587747';
        $provider->logo = 'workspaces/Lego.jpeg';
        $provider->save();

        $testProvider = new  Provider();
        $testProvider->name = 'Tools';
        $testProvider->owner_name = 'Edris Talib';
        $testProvider->address = 'Ahmed Abdel Aziz Street - Al Rehab Mall - Third Floor';
        $testProvider->phone = '0591505511';
        $testProvider->logo = 'workspaces/Tools.jpeg';
        $testProvider->save();
//        `full_name`, `email`, `password`, `phone`, `type`, `user_level_id`,'provider_id'
        $provider_login = new  User();
        $provider_login->full_name = 'Lego';
        $provider_login->email = 'lego@gmail.com';
        $provider_login->password = bcrypt('123456');
        $provider_login->phone = '0598587747';
        $provider_login->type = 'provider';
        $provider_login->user_level_id = 2;
        $provider_login->provider_id = $provider->id;
        $provider_login->save();

        $another_provider= new  User();
        $another_provider->full_name = 'Tools';
        $another_provider->email = 'tools@gmail.com';
        $another_provider->password = bcrypt('123456');
        $another_provider->phone = '0599717329';
        $another_provider->type = 'provider';
        $another_provider->user_level_id = 2;
        $another_provider->provider_id = $testProvider->id;
        $another_provider->save();

        $attribute= new Attribute();
        $attribute->name = 'Overview';
        $attribute->save();

        $attribute1= new Attribute();
        $attribute1->name = 'Starting at';
        $attribute1->save();

        $attribute2= new Attribute();
        $attribute2->name = 'Opining Hours';
        $attribute2->save();

        $provider_attribute = new ProviderAttribute();
        $provider_attribute->value = 'LEGO Spaces are flexible collaborative workspaces for entrepreneurs, a healthy, inspiring and integrated work environment that helps you create creativity and unleash your ideas. In addition, it is your ideal place to network and communicate with an elite group of entrepreneurs, which opens up wide horizons for you in your field!';
        $provider_attribute->provider_id = $provider->id;
        $provider_attribute->attribute_id = $attribute->id;
        $provider_attribute->save();

        $provider_attribute1 = new ProviderAttribute();
        $provider_attribute1->value = 80;
        $provider_attribute1->provider_id =$provider->id;
        $provider_attribute1->attribute_id = $attribute1->id;
        $provider_attribute1->save();


        $provider_attribute2 = new ProviderAttribute();
        $provider_attribute2->value = '24/7';
        $provider_attribute2->provider_id = $provider->id;
        $provider_attribute2->attribute_id = $attribute2->id;
        $provider_attribute2->save();

        $another_provider = new ProviderAttribute();
        $another_provider->value = 'It offers office workspaces for freelancers and companies from the private sector and provides all office and logistical services';
        $another_provider->provider_id = $testProvider->id;
        $another_provider->attribute_id = $attribute->id;
        $another_provider->save();

        $another_provider1 = new ProviderAttribute();
        $another_provider1->value = 50;
        $another_provider1->provider_id = $testProvider->id;
        $another_provider1->attribute_id = $attribute1->id;
        $another_provider1->save();


        $another_provider2 = new ProviderAttribute();
        $another_provider2->value = '8:30am/10pm';
        $another_provider2->provider_id = $testProvider->id;
        $another_provider2->attribute_id = $attribute2->id;
        $another_provider2->save();


    }
}
