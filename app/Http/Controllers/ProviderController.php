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
        $this->middleware('permission:provider_access', ['only' => ['profile']]);

    }

    public function index(Request $request)
    {
        $providers = \App\Models\Provider::all();
        $work_spaces = \App\Models\WorkSpace::where('provider_id', auth()->user()->provider->id)->get();
        $workers = \App\Models\WorkerWorkSpace::
            join('work_spaces', 'worker_work_spaces.work_space_id', '=', 'work_spaces.id')
            ->where('provider_id', auth()->user()->provider->id)->get();
        return view('admin.home', compact('workers', 'work_spaces', 'providers'));
    }

    public function show()
    {
        $providers = Provider::withTrashed()->get();
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
        $provider->phone = request('phone');
        $provider->logo = storeImage('providers','logo' );
        $provider->save();
        return back()->with('success', trans('messages.provider.provider_created'));

    }

    public function edit($id){
        $provider = Provider::withTrashed()->findOrFail($id);
        return view('admin.coworkProvider.editCoworkProvider',compact('provider'));
    }

    public function update(Request $request)
    {
        $id = request('id');
        $provider = Provider::withTrashed()->findOrFail($id);
        $provider->name = request('name');
        $provider->owner_name = request('owner_name');
        $provider->address = request('address');
        $provider->phone = request('phone');

        if ($logo= request('logo')) {
            $provider->logo = storeImage('providers','logo' );
            $provider->save();
        }
        $provider->save();

        return back()->with('success', trans('messages.provider.provider_updated'));
    }

    public function destroy($id)
    {
        Provider::findOrFail($id)->delete();
        return back()->with('success', trans('messages.provider.provider_deleted'));
    }

    public function restore($id)
    {
        Provider::where('id', $id)->withTrashed()->restore();

        return back()->with('success', trans('messages.provider.provider_restored'));
    }

    public function profile()
    {
        $user=auth()->user();
        return view('admin.profile')->with(compact('user'));
    }
}
