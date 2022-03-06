<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $work_spaces = \App\Models\WorkSpace::where('provider_id', auth()->user()->provider->id);
        $workers = \App\Models\Worker::all();
        return view('admin.home', compact('workers', 'work_spaces', 'providers'));
    }

    public function show()
    {
        $providers = Provider::all();
        return view('admin.coworkProvider.coworkProvider', compact('providers'));

    }

    public function create(){
        return view('admin.coworkProvider.addCoworkProvider');
    }

    public function store(Request $request){
        $data = request()->only( 'logo');
        $testProvider = new  Provider();
        $testProvider->name = request('name');
        $testProvider->owner_name = request('owner_name');
        $testProvider->address = request('address');

        $testProvider->logo = storeImage('providers','logo' );
        $testProvider->save();
        return back()->with('success', trans('cp.messages.roles.role_added'));

    }

    public function edit($id){
        return view('admin.coworkProvider.editCoworkProvider');
    }

    public function destroy($id)
    {
        Provider::findOrFail($id)->delete();
        return back()->with('success', trans('cp.messages.roles.role_deleted'));
    }
}
