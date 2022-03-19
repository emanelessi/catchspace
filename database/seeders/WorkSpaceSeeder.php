<?php

namespace Database\Seeders;

use App\Models\Addons;
use App\Models\Pricing;
use App\Models\RentType;
use App\Models\Service;
use App\Models\WorkSpace;
use App\Models\WorkSpaceAddons;
use App\Models\WorkSpaceService;
use App\Models\WorkSpaceType;
use Illuminate\Database\Seeder;

class WorkSpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $work_space_type1 = new WorkSpaceType();
        $work_space_type1->type = 'Office in a common room';
        $work_space_type1->save();

        $work_space_type2 = new WorkSpaceType();
        $work_space_type2->type = 'closed room';
        $work_space_type2->save();

        $work_space_type3 = new WorkSpaceType();
        $work_space_type3->type = 'Meetings room';
        $work_space_type3->save();

        $work_space_type4 = new WorkSpaceType();
        $work_space_type4->type = 'Skype room';
        $work_space_type4->save();

        $work_space = new WorkSpace();
        $work_space->name = 'Tools';
        $work_space->capacity = 9;
        $work_space->work_space_type_id  = $work_space_type1->id;
        $work_space->provider_id   = 1;
        $work_space->save();

        $work_space2 = new WorkSpace();
        $work_space2->name = 'GSG';
        $work_space2->capacity = 3;
        $work_space2->work_space_type_id  = $work_space_type3->id;
        $work_space2->provider_id   = 2;
        $work_space2->save();

        $service = new Service();
        $service->name = '5G WiFi';
        $service->save();

        $work_space_service = new WorkSpaceService();
        $work_space_service->value = 10;
        $work_space_service->work_space_id = $work_space->id;
        $work_space_service->service_id = $service->id;
        $work_space_service->save();

        $rent_type1 = new RentType();
        $rent_type1->type = 'Monthly';
        $rent_type1->save();

        $rent_type2 = new RentType();
        $rent_type2->type = 'by the hour';
        $rent_type2->save();

        $pricing1 = new Pricing();
        $pricing1->price = 100;
        $pricing1->work_space_id = $work_space->id;
        $pricing1->rent_type_id = $rent_type1->id;
        $pricing1->save();

        $pricing2 = new Pricing();
        $pricing2->price = 500;
        $pricing2->work_space_id = $work_space->id;
        $pricing2->rent_type_id = $rent_type2->id;
        $pricing2->save();

        $addon = new Addons();
        $addon->name = 'White Board';
        $addon->save();

        $work_space_addons = new WorkSpaceAddons();
        $work_space_addons->value = 10;
        $work_space_addons->work_space_id = $work_space->id;
        $work_space_addons->addon_id = $addon->id;
        $work_space_addons->save();
    }
}
