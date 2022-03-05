<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //        $this->middleware('permission:permission_access', ['only' => ['index']]);
        $this->middleware('permission:permission_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:permission_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:permission_delete', ['only' => ['destroy']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->user_level_id ==1) {
            $providers = \App\Models\Provider::all();
            $work_spaces = \App\Models\WorkSpace::all();
            $workers = \App\Models\Worker::all();
            return view('admin.home', compact('workers', 'work_spaces', 'providers'));

        }
        return redirect()->route('providers');
    }
}
