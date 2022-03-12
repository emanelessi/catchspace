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
        $this->middleware('permission:provider_create', ['only' => ['create','store']]);
        $this->middleware('permission:provider_edit', ['only' => ['edit','update']]);
        $this->middleware('permission:provider_delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $providers = \App\Models\Provider::all();
        $work_spaces = \App\Models\WorkSpace::where('provider_id', auth()->user()->provider->id)->get();
        $workers = \App\Models\Worker::all();
//        $workers = \App\Models\Worker::where('work_space_id',$work_spaces[0]->id)->get();
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
        $provider = new  Provider();
        $provider->name = request('name');
        $provider->owner_name = request('owner_name');
        $provider->address = request('address');

        $provider->logo = storeImage('providers','logo' );
        $provider->save();
        return back()->with('success', trans('cp.messages.roles.role_added'));

    }

    public function edit($id){
        $provider = Provider::findOrFail($id);
        return view('admin.coworkProvider.editCoworkProvider',compact('provider'));
    }

    public function update(Request $request)
    {
        $id = request('id');
        $provider = Provider::findOrFail($id);
        $provider->name = request('name');
        $provider->owner_name = request('owner_name');
        $provider->address = request('address');

        if ($logo= request('logo')) {
            $provider->logo = storeImage('providers','logo' );
            $provider->save();
        }
        $provider->save();

        return back()->with('success', trans('cp.messages.modify_success'));
    }

    public function destroy($id)
    {
        Provider::findOrFail($id)->delete();
        return back()->with('success', trans('cp.messages.roles.role_deleted'));
    }
}
