<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Models\Provider;
use App\Models\WorkSpace;
use App\Models\WorkSpaceAddons;
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
        $this->middleware('permission:services_show', ['only' => ['services']]);
        $this->middleware('permission:pricing_show', ['only' => ['pricing']]);
        $this->middleware('permission:addons_show', ['only' => ['addons']]);
    }

    public function index()
    {
        $workspace = WorkSpace::withTrashed()->get();
        return view('admin.workSpace.workSpace', compact('workspace'));
    }

    public function create()
    {
        $provider = Provider::withTrashed()->get();
        $type = WorkSpaceType::withTrashed()->get();

        return view('admin.workSpace.addWorkSpace', compact('provider', 'type'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'capacity' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
            'name' => 'required',
        ]);

        $workspace = WorkSpace::create(['name' => $request->input('name'),
            'capacity' => $request->input('capacity'),
            'work_space_type_id' => $request->input('work_space_type_id'),
            'provider_id' => $request->input('provider_id'),
        ]);

        return back()->with('success', trans('messages.workspace.workspace_created'));
    }

    public function edit($id)
    {
        $workspace = WorkSpace::withTrashed()->findOrFail($id);
        $provider = Provider::withTrashed()->get();
        $type = WorkSpaceType::withTrashed()->get();
        return view('admin.workSpace.editWorkSpace', compact('workspace', 'provider', 'type'));
    }

    public function update(Request $request)
    {
        $id = request('id');
        $this->validate($request, [
            'capacity' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
            'name' => 'required',
        ]);

        $workspace = WorkSpace::withTrashed()->findOrFail($id);
        $workspace->name = $request->input('name');
        $workspace->capacity = $request->input('capacity');
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

    public function services($id)
    {
        $workspace = WorkSpace::withTrashed()->findOrFail($id);
        $services = WorkSpaceService::where('work_space_id', $workspace->id)->get();
        return view('admin.workSpace.service.services', compact('services'));
    }
    public function pricing($id)
    {
        $workspace = WorkSpace::withTrashed()->findOrFail($id);
        $pricing = Pricing::where('work_space_id', $workspace->id)->get();
        return view('admin.workSpace.pricing.pricing', compact('pricing'));
    }
    public function addons($id)
    {
        $workspace = WorkSpace::withTrashed()->findOrFail($id);
        $addons= WorkSpaceAddons::where('work_space_id', $workspace->id)->get();
        return view('admin.workSpace.addons.addons', compact('addons'));
    }
}
