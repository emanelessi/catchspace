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
        $this->middleware('permission:services_access', ['only' => ['services']]);
        $this->middleware('permission:pricing_access', ['only' => ['pricing']]);
        $this->middleware('permission:addons_access', ['only' => ['addons']]);
    }

    public function index()
    {
        $workspace = WorkSpace::all();
        return view('admin.workSpace.workSpace', compact('workspace'));
    }

    public function create()
    {
        $provider = Provider::all();
        $type = WorkSpaceType::all();

        return view('admin.workSpace.addWorkSpace', compact('provider', 'type'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'capacity' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
        ]);

        $workspace = WorkSpace::create(['capacity' => $request->input('capacity'),
            'work_space_type_id' => $request->input('work_space_type_id'),
            'provider_id' => $request->input('provider_id'),
        ]);

        return back()->with('success', trans('cp.messages.roles.role_created'));
    }

    public function edit($id)
    {
        $workspace = WorkSpace::findOrFail($id);
        $provider = Provider::all();
        $type = WorkSpaceType::all();
        return view('admin.workSpace.editWorkSpace', compact('workspace', 'provider', 'type'));
    }

    public function update(Request $request)
    {
        $id = request('id');
        $this->validate($request, [
            'capacity' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
        ]);

        $workspace = WorkSpace::findOrFail($id);
        $workspace->capacity = $request->input('capacity');
        $workspace->work_space_type_id = $request->input('work_space_type_id');
        $workspace->provider_id = $request->input('provider_id');
        $workspace->save();

        return back()->with('success', trans('cp.messages.roles.role_updated'));
    }

    public function destroy($id)
    {
        $workspace = WorkSpace::findOrFail($id)->delete();
        return back()->with('success', trans('cp.messages.roles.role_deleted'));
    }

    public function services($id)
    {
        $workspace = WorkSpace::findOrFail($id);
        $services = WorkSpaceService::where('work_space_id', $workspace->id)->get();
        return view('admin.workSpace.services', compact('services'));
    }
    public function pricing($id)
    {
        $workspace = WorkSpace::findOrFail($id);
        $pricing = Pricing::where('work_space_id', $workspace->id)->get();
        return view('admin.workSpace.pricing', compact('pricing'));
    }
    public function addons($id)
    {
        $workspace = WorkSpace::findOrFail($id);
        $addons= WorkSpaceAddons::where('work_space_id', $workspace->id)->get();
        return view('admin.workSpace.addons', compact('addons'));
    }
}
