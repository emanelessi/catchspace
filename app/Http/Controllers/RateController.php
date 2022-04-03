<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\WorkSpaceRating;
use Illuminate\Http\Request;

class RateController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:rate_access', ['only' => ['index','rating']]);
    }

    public function index(){
        $rate=WorkSpaceRating::all();
        return view('admin.rate.rate',compact('rate'));
    }
    public function rating($id){
        $workspace=WorkSpaceRating::find($id);
        $raters=Rating::where('work_space_id',$workspace->id)->get();
        return view('admin.rate.rating',compact('raters'));
    }
}
