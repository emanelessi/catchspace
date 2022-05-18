<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\RentType;
use App\Models\Service;
use App\Models\User;
use App\Models\WorkSpace;
use App\Models\WorkSpaceAddons;
use App\Models\WorkSpaceRating;
use App\Models\WorkSpaceService;
use App\Models\WorkSpaceType;
use Illuminate\Http\Request;

class WorkSpaceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:workspace_access', ['only' => ['index']]);
        $this->middleware('permission:workspace_create', ['only' => ['store', 'create']]);
        $this->middleware('permission:workspace_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:workspace_delete', ['only' => ['destroy']]);

    }

    public function index()
    {
        $work_space = WorkSpace::where('provider_id', auth()->user()->provider->id)->withTrashed()->get();
        $pricing = Pricing::withTrashed()->get();
        $work_space_service = WorkSpaceService::withTrashed()->get();
        $service = Service::withTrashed()->get();
        $rent_type = RentType::withTrashed()->get();
        return view('admin.workSpace.workSpace', compact('work_space', 'pricing', 'work_space_service', 'service', 'rent_type'));
    }

    public function create()
    {
        $type = WorkSpaceType::withTrashed()->get();
        return view('admin.workSpace.addWorkSpace', compact('type'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'capacity' => 'required',
            'location' => 'required',
            'image' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
            'name' => 'required',
        ]);
        $workspace = WorkSpace::create(['name' => $request->input('name'),
            'location' => $request->input('location'),'capacity' => $request->input('capacity'),
            'image' => storeImage('workspaces','image' ), 'work_space_type_id' => $request->input('work_space_type_id'),
            'provider_id' => $request->input('provider_id'),
        ]);
        $rate=WorkSpaceRating::create(['work_space_id' => $workspace->id,'rate_avg' => 0,'rate_count' => 0]);

        return back()->with('success', trans('messages.workspace.workspace_created'));
    }

    public function edit($id)
    {
        $workspace = WorkSpace::withTrashed()->findOrFail($id);
        $type = WorkSpaceType::withTrashed()->get();
        return view('admin.workSpace.editWorkSpace', compact('workspace', 'type'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'capacity' => 'required',
            'location' => 'required',
            'image' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
            'name' => 'name',
        ]);

        $workspace = WorkSpace::withTrashed()->findOrFail($id);
        $workspace->name = $request->input('name');
        $workspace->location = $request->input('location');
        $workspace->capacity = $request->input('capacity');
        $workspace->image = storeImage('workspaces','image' );
        $workspace->work_space_type_id = $request->input('work_space_type_id');
        $workspace->provider_id = $request->input('provider_id');
        $workspace->save();

        return back()->with('success', trans('messages.workspace.workspace_updated'));
    }

    public function destroy($id)
    {
        $workspace = WorkSpace::findOrFail($id)->delete();
        return back()->with('success', trans('messages.workspace.workspace_deleted'));
    }

    public function restore($id)
    {
        WorkSpace::where('id', $id)->withTrashed()->restore();

        return back()->with('success', trans('messages.workspace.workspace_restored'));
    }


}
