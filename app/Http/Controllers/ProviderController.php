<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:provider_access', ['only' => ['index']]);
//        $this->middleware('permission:role_create', ['only' => ['create','store']]);
//        $this->middleware('permission:role_edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:role_delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $providers = \App\Models\Provider::all();
        $work_spaces = \App\Models\WorkSpace::where('provider_id',auth()->user()->provider->id);
        $workers = \App\Models\Worker::all();
        return view('admin.home',compact('workers', 'work_spaces', 'providers'));
    }
}
