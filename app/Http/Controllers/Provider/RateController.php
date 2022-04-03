<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use App\Models\WorkSpace;
use App\Models\WorkSpaceRating;
use Illuminate\Http\Request;

class RateController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:rate_show', ['only' => ['index','rating']]);
    }

    public function index(){
        $rate=WorkSpaceRating::withTrashed()
            ->whereIn('work_space_id', WorkSpace::where('provider_id', auth()->user()->provider->id)->pluck('id'))
            ->get();
        return view('admin.rate.rate',compact('rate'));
    }
    public function rating($id){
        $workspace=WorkSpaceRating::find($id);
        $raters=Rating::where('work_space_id',$workspace->id)->get();
        return view('admin.rate.rating',compact('raters'));
    }
}
