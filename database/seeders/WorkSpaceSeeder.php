<?php

namespace Database\Seeders;

use App\Models\Addons;
use App\Models\Attribute;
use App\Models\Pricing;
use App\Models\RentType;
use App\Models\Service;
use App\Models\WorkSpace;
use App\Models\WorkSpaceAddons;
use App\Models\WorkSpaceAttribute;
use App\Models\WorkSpaceRating;
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
        $work_space_type1->type = 'Open room';
        $work_space_type1->image = 'workspace_type/open_room.jpg';
        $work_space_type1->save();

        $work_space_type2 = new WorkSpaceType();
        $work_space_type2->type = 'Closed room';
        $work_space_type2->image = 'workspace_type/closed_room.jpg';
        $work_space_type2->save();

        $work_space_type3 = new WorkSpaceType();
        $work_space_type3->type = 'Meetings room';
        $work_space_type3->image = 'workspace_type/meeting-room.jpg';
        $work_space_type3->save();

        $work_space_type4 = new WorkSpaceType();
        $work_space_type4->type = 'Skype room';
        $work_space_type4->image = 'workspace_type/skype_room.jpg';
        $work_space_type4->save();

        $work_space1 = new WorkSpace();
        $work_space1->name = 'Tools Meetings room';
        $work_space1->image = 'workspaces/Tools.png';
        $work_space1->capacity = 10;
        $work_space1->work_space_type_id = $work_space_type3->id;
        $work_space1->provider_id = 2;
        $work_space1->save();

        $work_space2 = new WorkSpace();
        $work_space2->name = 'Tools Open room';
        $work_space2->image = 'workspaces/Tools.png';
        $work_space2->capacity = 6;
        $work_space2->work_space_type_id = $work_space_type1->id;
        $work_space2->provider_id = 2;
        $work_space2->save();

        $work_space3 = new WorkSpace();
        $work_space3->name = 'Tools Open room';
        $work_space3->image = 'workspaces/Tools.png';
        $work_space3->capacity = 8;
        $work_space3->work_space_type_id = $work_space_type1->id;
        $work_space3->provider_id = 2;
        $work_space3->save();

        $work_space4 = new WorkSpace();
        $work_space4->name = 'Tools Closed room';
        $work_space4->image = 'workspaces/Tools.png';
        $work_space4->capacity = 3;
        $work_space4->work_space_type_id = $work_space_type2->id;
        $work_space4->provider_id = 2;
        $work_space4->save();

        $work_space5 = new WorkSpace();
        $work_space5->name = 'Tools Closed room';
        $work_space5->image = 'workspaces/Tools.png';
        $work_space5->capacity = 2;
        $work_space5->work_space_type_id = $work_space_type2->id;
        $work_space5->provider_id = 2;
        $work_space5->save();

        $work_space6 = new WorkSpace();
        $work_space6->name = 'Tools Closed room';
        $work_space6->image = 'workspaces/Tools.png';
        $work_space6->capacity = 4;
        $work_space6->work_space_type_id = $work_space_type2->id;
        $work_space6->provider_id = 2;
        $work_space6->save();

        $work_space7 = new WorkSpace();
        $work_space7->name = 'Lego Open room';
        $work_space7->image = 'workspaces/space3.png';
        $work_space7->capacity = 3;
        $work_space7->work_space_type_id = $work_space_type1->id;
        $work_space7->provider_id = 1;
        $work_space7->save();

        $rate1 = WorkSpaceRating::create(['work_space_id' => $work_space1->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate2 = WorkSpaceRating::create(['work_space_id' => $work_space7->id, 'rate_avg' => 0, 'rate_count' => 0]);


        $service1 = new Service();
        $service1->name = '5G WiFi';
        $service1->save();

        $service2 = new Service();
        $service2->name = 'kitchen';
        $service2->save();

        $service3 = new Service();
        $service3->name = 'resting place';
        $service3->save();

        $service4 = new Service();
        $service4->name = 'meeting room';
        $service4->save();

        $service5 = new Service();
        $service5->name = 'Delivery and discounts from restaurants';
        $service5->save();

        $work_space_service = new WorkSpaceService();
        $work_space_service->value = 10;
        $work_space_service->work_space_id = $work_space7->id;
        $work_space_service->service_id = $service1->id;
        $work_space_service->save();

        $work_space_service = new WorkSpaceService();
        $work_space_service->value = 10;
        $work_space_service->work_space_id = $work_space2->id;
        $work_space_service->service_id = $service1->id;
        $work_space_service->save();

        $work_space_service = new WorkSpaceService();
        $work_space_service->value = 24/7;
        $work_space_service->work_space_id = $work_space2->id;
        $work_space_service->service_id = $service2->id;
        $work_space_service->save();

        $work_space_service = new WorkSpaceService();
        $work_space_service->value = 24/7;
        $work_space_service->work_space_id = $work_space2->id;
        $work_space_service->service_id = $service3->id;
        $work_space_service->save();

        $work_space_service = new WorkSpaceService();
        $work_space_service->value = 1-2;
        $work_space_service->work_space_id = $work_space2->id;
        $work_space_service->service_id = $service4->id;
        $work_space_service->save();

        $work_space_service = new WorkSpaceService();
        $work_space_service->value = 'remotely';
        $work_space_service->work_space_id = $work_space2->id;
        $work_space_service->service_id = $service5->id;
        $work_space_service->save();

        $rent_type1 = new RentType();
        $rent_type1->type = 'Monthly';
        $rent_type1->save();

        $rent_type2 = new RentType();
        $rent_type2->type = 'Hourly';
        $rent_type2->save();

        $rent_type3 = new RentType();
        $rent_type3->type = 'daily';
        $rent_type3->save();

        $pricing1 = new Pricing();
        $pricing1->price = 100;
        $pricing1->work_space_id = $work_space7->id;
        $pricing1->rent_type_id = $rent_type1->id;
        $pricing1->save();

        $pricing2 = new Pricing();
        $pricing2->price = 10;
        $pricing2->work_space_id = $work_space2->id;
        $pricing2->rent_type_id = $rent_type2->id;
        $pricing2->save();

        $pricing3 = new Pricing();
        $pricing3->price = 50;
        $pricing3->work_space_id = $work_space2->id;
        $pricing3->rent_type_id = $rent_type1->id;
        $pricing3->save();


        $pricing4 = new Pricing();
        $pricing4->price = 400;
        $pricing4->work_space_id = $work_space1->id;
        $pricing4->rent_type_id = $rent_type1->id;
        $pricing4->save();

        $pricing5 = new Pricing();
        $pricing5->price = 7;
        $pricing5->work_space_id = $work_space1->id;
        $pricing5->rent_type_id = $rent_type2->id;
        $pricing5->save();

        $pricing6 = new Pricing();
        $pricing6->price = 30;
        $pricing6->work_space_id = $work_space1->id;
        $pricing6->rent_type_id = $rent_type3->id;
        $pricing6->save();

        $pricing7 = new Pricing();
        $pricing7->price = 90;
        $pricing7->work_space_id = $work_space4->id;
        $pricing7->rent_type_id = $rent_type1->id;
        $pricing7->save();

        $pricing8 = new Pricing();
        $pricing8->price = 100;
        $pricing8->work_space_id = $work_space5->id;
        $pricing8->rent_type_id = $rent_type1->id;
        $pricing8->save();

        $pricing9 = new Pricing();
        $pricing9->price = 90;
        $pricing9->work_space_id = $work_space6->id;
        $pricing9->rent_type_id = $rent_type1->id;
        $pricing9->save();

        $addon = new Addons();
        $addon->name = 'White Board';
        $addon->save();

        $work_space_addons = new WorkSpaceAddons();
        $work_space_addons->value = 10;
        $work_space_addons->work_space_id = $work_space7->id;
        $work_space_addons->addon_id = $addon->id;
        $work_space_addons->save();

        $addon2 = new Addons();
        $addon2->name = 'Printer';
        $addon2->save();

        $work_space_addons2 = new WorkSpaceAddons();
        $work_space_addons2->value = 10;
        $work_space_addons2->work_space_id = $work_space2->id;
        $work_space_addons2->addon_id = $addon2->id;
        $work_space_addons2->save();


    }
}
