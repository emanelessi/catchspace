<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\rateResource;
use App\Models\Rating;
use App\Models\WorkSpace;
use App\Models\WorkSpaceRating;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function store(Request $request){

        if (WorkSpace::find($request['work_space_id'])){


        $newRate=new Rating();
        $newRate->work_space_id = $request['work_space_id'];
        $newRate->mac_address =$request->ip();
        $newRate->rate = $request['rate'];
        $newRate->save();

        $workspaceRate=WorkSpaceRating::where('work_space_id',$newRate->work_space_id)->first();
        $allRates=Rating::all();
        $avg=0;
        foreach ($allRates as $myrate){
            $sum=0;
            $rate=$myrate->where('work_space_id', $workspaceRate->work_space_id)->pluck('rate');
            for ($i=0;$i<count($rate);$i++){
                $sum+=$rate[$i];
                $avg=$sum/count($rate);
            }
        }
        $myworkspace=WorkSpaceRating::find($workspaceRate->id);
        $myworkspace->rate_avg=$avg;
        $myworkspace->rate_count=count($rate);
        $myworkspace->update();
        return response_api(true, 200, 'Success!',['rate' => new rateResource($newRate)]);
        }
        else{
            return response_api(false, 400, 'fail!','There is no workspace with this id!');

        }
    }
}
