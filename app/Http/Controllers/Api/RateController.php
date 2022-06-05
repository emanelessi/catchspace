<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\rateResource;
use App\Models\Rating;
use App\Models\WorkSpace;
use App\Models\WorkSpaceRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RateController extends Controller
{
    public function store(Request $request)
    {

        if (WorkSpace::find($request['work_space_id'])) {
            if (!Rating::where('mac_address', $request->ip())->where('work_space_id',$request['work_space_id'])->first()) {
                $newRate = new Rating();
                $newRate->work_space_id = $request['work_space_id'];
                $newRate->mac_address = $request->ip();
                $newRate->rate = $request['rate'];
                $newRate->title = $request['title'];
                $newRate->message = $request['message'];
                $newRate->is_back = $request['is_back'];
                $newRate->tips = $request['tips'];
                $worker_id=Session::get('worker');
                if($worker_id!= null){
                    $newRate->worker_id = $worker_id->id;
                }
                $newRate->save();

                $workspaceRate = WorkSpaceRating::where('work_space_id', $newRate->work_space_id)->first();
                $allRates = Rating::all();
                $avg = 0;
                foreach ($allRates as $myrate) {
                    $sum = 0;
                    $rate = $myrate->where('work_space_id', $workspaceRate->work_space_id)->pluck('rate');
                    for ($i = 0; $i < count($rate); $i++) {
                        $sum += $rate[$i];
                        $avg = $sum / count($rate);
                    }
                }
                $myworkspace = WorkSpaceRating::find($workspaceRate->id);
                $myworkspace->rate_avg = $avg;
                $myworkspace->rate_count = count($rate);
                $myworkspace->update();
                return response_api(true, 200, 'Success!', ['rate' => new rateResource($newRate)]);
            } else {
                return response_api(false, 400, 'duplicate!', 'You review for this workspace before!');

            }
        } else {
            return response_api(false, 400, 'fail!', 'There is no workspace with this id!');

        }
    }

//    public function showRates(){
//        $rates = Rating::get()->all();
//        return response_api(true, 200, 'Success',['rates' =>  rateResource::collection($rates)]);
//    }
}
