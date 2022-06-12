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
use Illuminate\Database\Eloquent\Model;
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
        $work_space1->image = 'workspaces/Tools_Meetings_room.jpeg';
        $work_space1->capacity = 10;
        $work_space1->work_space_type_id = $work_space_type3->id;
        $work_space1->provider_id = 2;
        $work_space1->save();

        $work_space2 = new WorkSpace();
        $work_space2->name = 'Tools Open room';
        $work_space2->image = 'workspaces/Tools_Open_room8.jpeg';
        $work_space2->capacity = 6;
        $work_space2->work_space_type_id = $work_space_type1->id;
        $work_space2->provider_id = 2;
        $work_space2->save();

        $work_space3 = new WorkSpace();
        $work_space3->name = 'Tools Open room';
        $work_space3->image = 'workspaces/Tools_Open_room8.jpeg';
        $work_space3->capacity = 8;
        $work_space3->work_space_type_id = $work_space_type1->id;
        $work_space3->provider_id = 2;
        $work_space3->save();

        $work_space4 = new WorkSpace();
        $work_space4->name = 'Tools Closed room';
        $work_space4->image = 'workspaces/Tools_Closed_room3.jpeg';
        $work_space4->capacity = 3;
        $work_space4->work_space_type_id = $work_space_type2->id;
        $work_space4->provider_id = 2;
        $work_space4->save();

        $work_space5 = new WorkSpace();
        $work_space5->name = 'Tools Closed room';
        $work_space5->image = 'workspaces/Tools_Closed_room2.jpeg';
        $work_space5->capacity = 2;
        $work_space5->work_space_type_id = $work_space_type2->id;
        $work_space5->provider_id = 2;
        $work_space5->save();

        $work_space6 = new WorkSpace();
        $work_space6->name = 'Tools Closed room';
        $work_space6->image = 'workspaces/Tools_Closed_room4.jpeg';
        $work_space6->capacity = 4;
        $work_space6->work_space_type_id = $work_space_type2->id;
        $work_space6->provider_id = 2;
        $work_space6->save();

        $work_space7 = new WorkSpace();
        $work_space7->name = 'Lego Open room';
        $work_space7->image = 'workspaces/Lego_Open_room.jpeg';
        $work_space7->capacity = 8;
        $work_space7->work_space_type_id = $work_space_type1->id;
        $work_space7->provider_id = 1;
        $work_space7->save();

        $work_space8 = new WorkSpace();
        $work_space8->name = 'Lego Skype room';
        $work_space8->image = 'workspaces/Lego_Skype_room.jpeg';
        $work_space8->capacity = 1;
        $work_space8->work_space_type_id = $work_space_type4->id;
        $work_space8->provider_id = 1;
        $work_space8->save();

        $work_space9 = new WorkSpace();
        $work_space9->name = 'Lego Closed room';
        $work_space9->image = 'workspaces/Lego_Closed_room1.jpeg';
        $work_space9->capacity = 1;
        $work_space9->work_space_type_id = $work_space_type2->id;
        $work_space9->provider_id = 1;
        $work_space9->save();

        $work_space10 = new WorkSpace();
        $work_space10->name = 'Lego Closed room';
        $work_space10->image = 'workspaces/Lego_Closed_room1.jpeg';
        $work_space10->capacity = 2;
        $work_space10->work_space_type_id = $work_space_type2->id;
        $work_space10->provider_id = 1;
        $work_space10->save();

        $work_space11 = new WorkSpace();
        $work_space11->name = 'Lego Closed room';
        $work_space11->image = 'workspaces/Lego_Closed_room4.jpeg';
        $work_space11->capacity = 4;
        $work_space11->work_space_type_id = $work_space_type2->id;
        $work_space11->provider_id = 1;
        $work_space11->save();

        $work_space12 = new WorkSpace();
        $work_space12->name = 'Lego Meetings room';
        $work_space12->image = 'workspaces/Lego_Meetings_room.jpeg';
        $work_space12->capacity = 8;
        $work_space12->work_space_type_id = $work_space_type3->id;
        $work_space12->provider_id = 1;
        $work_space12->save();


        $rate1 = WorkSpaceRating::create(['work_space_id' => $work_space1->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate2 = WorkSpaceRating::create(['work_space_id' => $work_space2->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate3 = WorkSpaceRating::create(['work_space_id' => $work_space3->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate4 = WorkSpaceRating::create(['work_space_id' => $work_space4->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate5 = WorkSpaceRating::create(['work_space_id' => $work_space5->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate6 = WorkSpaceRating::create(['work_space_id' => $work_space6->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate7 = WorkSpaceRating::create(['work_space_id' => $work_space7->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate8 = WorkSpaceRating::create(['work_space_id' => $work_space8->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate9 = WorkSpaceRating::create(['work_space_id' => $work_space9->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate10 = WorkSpaceRating::create(['work_space_id' => $work_space10->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate11 = WorkSpaceRating::create(['work_space_id' => $work_space11->id, 'rate_avg' => 0, 'rate_count' => 0]);
        $rate12 = WorkSpaceRating::create(['work_space_id' => $work_space12->id, 'rate_avg' => 0, 'rate_count' => 0]);


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

        $service6 = new Service();
        $service6->name = 'conditioning';
        $service6->save();

        $service7 = new Service();
        $service7->name = 'cafe corner';
        $service7->save();

        $service8 = new Service();
        $service8->name = 'call rooms';
        $service8->save();

        $work_space_service = new WorkSpaceService();
        $work_space_service->value = 10;
        $work_space_service->work_space_id = $work_space7->id;
        $work_space_service->service_id = $service1->id;
        $work_space_service->save();

        $work_space_service1 = new WorkSpaceService();
        $work_space_service1->value = 4;
        $work_space_service1->work_space_id = $work_space7->id;
        $work_space_service1->service_id = $service4->id;
        $work_space_service1->save();

        $work_space_service2 = new WorkSpaceService();
        $work_space_service2->value = 0;
        $work_space_service2->work_space_id = $work_space7->id;
        $work_space_service2->service_id = $service6->id;
        $work_space_service2->save();

        $work_space_service3 = new WorkSpaceService();
        $work_space_service3->value = 0;
        $work_space_service3->work_space_id = $work_space7->id;
        $work_space_service3->service_id = $service7->id;
        $work_space_service3->save();

        $work_space_service4 = new WorkSpaceService();
        $work_space_service4->value = 0;
        $work_space_service4->work_space_id = $work_space7->id;
        $work_space_service4->service_id = $service8->id;
        $work_space_service4->save();

        $work_space_service5 = new WorkSpaceService();
        $work_space_service5->value = 10;
        $work_space_service5->work_space_id = $work_space8->id;
        $work_space_service5->service_id = $service1->id;
        $work_space_service5->save();

        $work_space_service6 = new WorkSpaceService();
        $work_space_service6->value = 4;
        $work_space_service6->work_space_id = $work_space8->id;
        $work_space_service6->service_id = $service4->id;
        $work_space_service6->save();

        $work_space_service7 = new WorkSpaceService();
        $work_space_service7->value = 0;
        $work_space_service7->work_space_id = $work_space8->id;
        $work_space_service7->service_id = $service6->id;
        $work_space_service7->save();

        $work_space_service8 = new WorkSpaceService();
        $work_space_service8->value = 0;
        $work_space_service8->work_space_id = $work_space8->id;
        $work_space_service8->service_id = $service7->id;
        $work_space_service8->save();

        $work_space_service9 = new WorkSpaceService();
        $work_space_service9->value = 0;
        $work_space_service9->work_space_id = $work_space8->id;
        $work_space_service9->service_id = $service8->id;
        $work_space_service9->save();

        $work_space_service10 = new WorkSpaceService();
        $work_space_service10->value = 10;
        $work_space_service10->work_space_id = $work_space9->id;
        $work_space_service10->service_id = $service1->id;
        $work_space_service10->save();

        $work_space_service11 = new WorkSpaceService();
        $work_space_service11->value = 4;
        $work_space_service11->work_space_id = $work_space9->id;
        $work_space_service11->service_id = $service4->id;
        $work_space_service11->save();

        $work_space_service13 = new WorkSpaceService();
        $work_space_service13->value = 0;
        $work_space_service13->work_space_id = $work_space9->id;
        $work_space_service13->service_id = $service6->id;
        $work_space_service13->save();

        $work_space_service14 = new WorkSpaceService();
        $work_space_service14->value = 0;
        $work_space_service14->work_space_id = $work_space9->id;
        $work_space_service14->service_id = $service7->id;
        $work_space_service14->save();

        $work_space_service15 = new WorkSpaceService();
        $work_space_service15->value = 0;
        $work_space_service15->work_space_id = $work_space9->id;
        $work_space_service15->service_id = $service8->id;
        $work_space_service15->save();

        $work_space_service16 = new WorkSpaceService();
        $work_space_service16->value = 10;
        $work_space_service16->work_space_id = $work_space10->id;
        $work_space_service16->service_id = $service1->id;
        $work_space_service16->save();

        $work_space_service17 = new WorkSpaceService();
        $work_space_service17->value = 4;
        $work_space_service17->work_space_id = $work_space10->id;
        $work_space_service17->service_id = $service4->id;
        $work_space_service17->save();

        $work_space_service18 = new WorkSpaceService();
        $work_space_service18->value = 0;
        $work_space_service18->work_space_id = $work_space10->id;
        $work_space_service18->service_id = $service6->id;
        $work_space_service18->save();

        $work_space_service19 = new WorkSpaceService();
        $work_space_service19->value = 0;
        $work_space_service19->work_space_id = $work_space10->id;
        $work_space_service19->service_id = $service7->id;
        $work_space_service19->save();

        $work_space_service20 = new WorkSpaceService();
        $work_space_service20->value = 0;
        $work_space_service20->work_space_id = $work_space10->id;
        $work_space_service20->service_id = $service8->id;
        $work_space_service20->save();

        $work_space_service21 = new WorkSpaceService();
        $work_space_service21->value = 10;
        $work_space_service21->work_space_id = $work_space11->id;
        $work_space_service21->service_id = $service1->id;
        $work_space_service21->save();

        $work_space_service22 = new WorkSpaceService();
        $work_space_service22->value = 4;
        $work_space_service22->work_space_id = $work_space11->id;
        $work_space_service22->service_id = $service4->id;
        $work_space_service22->save();

        $work_space_service23 = new WorkSpaceService();
        $work_space_service23->value = 0;
        $work_space_service23->work_space_id = $work_space11->id;
        $work_space_service23->service_id = $service6->id;
        $work_space_service23->save();

        $work_space_service24 = new WorkSpaceService();
        $work_space_service24->value = 0;
        $work_space_service24->work_space_id = $work_space11->id;
        $work_space_service24->service_id = $service7->id;
        $work_space_service24->save();

        $work_space_service25 = new WorkSpaceService();
        $work_space_service25->value = 0;
        $work_space_service25->work_space_id = $work_space11->id;
        $work_space_service25->service_id = $service8->id;
        $work_space_service25->save();

        $work_space_service26 = new WorkSpaceService();
        $work_space_service26->value = 10;
        $work_space_service26->work_space_id = $work_space12->id;
        $work_space_service26->service_id = $service1->id;
        $work_space_service26->save();

        $work_space_service27 = new WorkSpaceService();
        $work_space_service27->value = 4;
        $work_space_service27->work_space_id = $work_space12->id;
        $work_space_service27->service_id = $service4->id;
        $work_space_service27->save();

        $work_space_service28 = new WorkSpaceService();
        $work_space_service28->value = 0;
        $work_space_service28->work_space_id = $work_space12->id;
        $work_space_service28->service_id = $service6->id;
        $work_space_service28->save();

        $work_space_service29 = new WorkSpaceService();
        $work_space_service29->value = 0;
        $work_space_service29->work_space_id = $work_space12->id;
        $work_space_service29->service_id = $service7->id;
        $work_space_service29->save();

        $work_space_service30 = new WorkSpaceService();
        $work_space_service30->value = 0;
        $work_space_service30->work_space_id = $work_space12->id;
        $work_space_service30->service_id = $service8->id;
        $work_space_service30->save();

        $work_space_service31 = new WorkSpaceService();
        $work_space_service31->value = 10;
        $work_space_service31->work_space_id = $work_space1->id;
        $work_space_service31->service_id = $service1->id;
        $work_space_service31->save();

        $work_space_service32 = new WorkSpaceService();
        $work_space_service32->value = 0;
        $work_space_service32->work_space_id = $work_space1->id;
        $work_space_service32->service_id = $service2->id;
        $work_space_service32->save();

        $work_space_service33 = new WorkSpaceService();
        $work_space_service33->value = 0;
        $work_space_service33->work_space_id = $work_space1->id;
        $work_space_service33->service_id = $service3->id;
        $work_space_service33->save();

        $work_space_service34 = new WorkSpaceService();
        $work_space_service34->value = 1-2;
        $work_space_service34->work_space_id = $work_space1->id;
        $work_space_service34->service_id = $service4->id;
        $work_space_service34->save();

        $work_space_service35 = new WorkSpaceService();
        $work_space_service35->value = 'remotely';
        $work_space_service35->work_space_id = $work_space1->id;
        $work_space_service35->service_id = $service5->id;
        $work_space_service35->save();

        $work_space_service36 = new WorkSpaceService();
        $work_space_service36->value = 10;
        $work_space_service36->work_space_id = $work_space2->id;
        $work_space_service36->service_id = $service1->id;
        $work_space_service36->save();

        $work_space_service37 = new WorkSpaceService();
        $work_space_service37->value = 0;
        $work_space_service37->work_space_id = $work_space2->id;
        $work_space_service37->service_id = $service2->id;
        $work_space_service37->save();

        $work_space_service38 = new WorkSpaceService();
        $work_space_service38->value = 0;
        $work_space_service38->work_space_id = $work_space2->id;
        $work_space_service38->service_id = $service3->id;
        $work_space_service38->save();

        $work_space_service39 = new WorkSpaceService();
        $work_space_service39->value = 1-2;
        $work_space_service39->work_space_id = $work_space2->id;
        $work_space_service39->service_id = $service4->id;
        $work_space_service39->save();

        $work_space_service40 = new WorkSpaceService();
        $work_space_service40->value = 'remotely';
        $work_space_service40->work_space_id = $work_space2->id;
        $work_space_service40->service_id = $service5->id;
        $work_space_service40->save();

        $work_space_service41 = new WorkSpaceService();
        $work_space_service41->value = 10;
        $work_space_service41->work_space_id = $work_space3->id;
        $work_space_service41->service_id = $service1->id;
        $work_space_service41->save();

        $work_space_service42 = new WorkSpaceService();
        $work_space_service42->value = 0;
        $work_space_service42->work_space_id = $work_space3->id;
        $work_space_service42->service_id = $service2->id;
        $work_space_service42->save();

        $work_space_service43 = new WorkSpaceService();
        $work_space_service43->value = 0;
        $work_space_service43->work_space_id = $work_space3->id;
        $work_space_service43->service_id = $service3->id;
        $work_space_service43->save();

        $work_space_service44 = new WorkSpaceService();
        $work_space_service44->value = 1-2;
        $work_space_service44->work_space_id = $work_space3->id;
        $work_space_service44->service_id = $service4->id;
        $work_space_service44->save();

        $work_space_service45 = new WorkSpaceService();
        $work_space_service45->value = 'remotely';
        $work_space_service45->work_space_id = $work_space3->id;
        $work_space_service45->service_id = $service5->id;
        $work_space_service45->save();

        $work_space_service46 = new WorkSpaceService();
        $work_space_service46->value = 10;
        $work_space_service46->work_space_id = $work_space4->id;
        $work_space_service46->service_id = $service1->id;
        $work_space_service46->save();

        $work_space_service47 = new WorkSpaceService();
        $work_space_service47->value = 0;
        $work_space_service47->work_space_id = $work_space4->id;
        $work_space_service47->service_id = $service2->id;
        $work_space_service47->save();

        $work_space_service48 = new WorkSpaceService();
        $work_space_service48->value = 0;
        $work_space_service48->work_space_id = $work_space4->id;
        $work_space_service48->service_id = $service3->id;
        $work_space_service48->save();

        $work_space_service49 = new WorkSpaceService();
        $work_space_service49->value = 1-2;
        $work_space_service49->work_space_id = $work_space4->id;
        $work_space_service49->service_id = $service4->id;
        $work_space_service49->save();

        $work_space_service49 = new WorkSpaceService();
        $work_space_service49->value = 'remotely';
        $work_space_service49->work_space_id = $work_space4->id;
        $work_space_service49->service_id = $service5->id;
        $work_space_service49->save();

        $work_space_service50 = new WorkSpaceService();
        $work_space_service50->value = 10;
        $work_space_service50->work_space_id = $work_space5->id;
        $work_space_service50->service_id = $service1->id;
        $work_space_service50->save();

        $work_space_service51 = new WorkSpaceService();
        $work_space_service51->value = 0;
        $work_space_service51->work_space_id = $work_space5->id;
        $work_space_service51->service_id = $service2->id;
        $work_space_service51->save();

        $work_space_service52 = new WorkSpaceService();
        $work_space_service52->value = 0;
        $work_space_service52->work_space_id = $work_space5->id;
        $work_space_service52->service_id = $service3->id;
        $work_space_service52->save();

        $work_space_service53 = new WorkSpaceService();
        $work_space_service53->value = 1-2;
        $work_space_service53->work_space_id = $work_space5->id;
        $work_space_service53->service_id = $service4->id;
        $work_space_service53->save();

        $work_space_service54 = new WorkSpaceService();
        $work_space_service54->value = 'remotely';
        $work_space_service54->work_space_id = $work_space5->id;
        $work_space_service54->service_id = $service5->id;
        $work_space_service54->save();

        $work_space_service55 = new WorkSpaceService();
        $work_space_service55->value = 10;
        $work_space_service55->work_space_id = $work_space6->id;
        $work_space_service55->service_id = $service1->id;
        $work_space_service55->save();

        $work_space_service56 = new WorkSpaceService();
        $work_space_service56->value = 0;
        $work_space_service56->work_space_id = $work_space6->id;
        $work_space_service56->service_id = $service2->id;
        $work_space_service56->save();

        $work_space_service57 = new WorkSpaceService();
        $work_space_service57->value = 0;
        $work_space_service57->work_space_id = $work_space6->id;
        $work_space_service57->service_id = $service3->id;
        $work_space_service57->save();

        $work_space_service58 = new WorkSpaceService();
        $work_space_service58->value = 1-2;
        $work_space_service58->work_space_id = $work_space6->id;
        $work_space_service58->service_id = $service4->id;
        $work_space_service58->save();

        $work_space_service59 = new WorkSpaceService();
        $work_space_service59->value = 'remotely';
        $work_space_service59->work_space_id = $work_space6->id;
        $work_space_service59->service_id = $service5->id;
        $work_space_service59->save();

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

        $pricing10 = new Pricing();
        $pricing10->price = 150;
        $pricing10->work_space_id = $work_space9->id;
        $pricing10->rent_type_id = $rent_type1->id;
        $pricing10->save();

        $pricing11 = new Pricing();
        $pricing11->price = 250;
        $pricing11->work_space_id = $work_space10->id;
        $pricing11->rent_type_id = $rent_type1->id;
        $pricing11->save();

        $pricing12 = new Pricing();
        $pricing12->price = 400;
        $pricing12->work_space_id = $work_space11->id;
        $pricing12->rent_type_id = $rent_type1->id;
        $pricing12->save();

        $addon = new Addons();
        $addon->name = 'White Board';
        $addon->save();

        $addon2 = new Addons();
        $addon2->name = 'Printer';
        $addon2->save();

        $work_space_addons = new WorkSpaceAddons();
        $work_space_addons->value = 10;
        $work_space_addons->work_space_id = $work_space7->id;
        $work_space_addons->addon_id = $addon->id;
        $work_space_addons->save();

        $work_space_addons2 = new WorkSpaceAddons();
        $work_space_addons2->value = 10;
        $work_space_addons2->work_space_id = $work_space2->id;
        $work_space_addons2->addon_id = $addon2->id;
        $work_space_addons2->save();

        $work_space_addons3 = new WorkSpaceAddons();
        $work_space_addons3->value = 0;
        $work_space_addons3->work_space_id = $work_space7->id;
        $work_space_addons3->addon_id = $addon2->id;
        $work_space_addons3->save();

        $work_space_addons4 = new WorkSpaceAddons();
        $work_space_addons4->value = 0;
        $work_space_addons4->work_space_id = $work_space9->id;
        $work_space_addons4->addon_id = $addon2->id;
        $work_space_addons4->save();

        $work_space_addons5 = new WorkSpaceAddons();
        $work_space_addons5->value = 0;
        $work_space_addons5->work_space_id = $work_space10->id;
        $work_space_addons5->addon_id = $addon2->id;
        $work_space_addons5->save();

        $work_space_addons6 = new WorkSpaceAddons();
        $work_space_addons6->value = 0;
        $work_space_addons6->work_space_id = $work_space11->id;
        $work_space_addons6->addon_id = $addon2->id;
        $work_space_addons6->save();

    }
}
