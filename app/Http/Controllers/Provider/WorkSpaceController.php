<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\RentType;
use App\Models\Service;
use App\Models\User;
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

    }

    public function index()
    {
        $work_space = WorkSpace::where('provider_id', auth()->user()->provider->id)->get();
        $pricing = Pricing::all();
        $work_space_service = WorkSpaceService::all();
        $service = Service::all();
        $rent_type = RentType::all();
        return view('admin.workSpace.workSpace', compact('work_space', 'pricing', 'work_space_service', 'service', 'rent_type'));
    }

    public function create()
    {
        $type = WorkSpaceType::all();
        return view('admin.workSpace.addWorkSpace', compact('type'));
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
        $type = WorkSpaceType::all();
        return view('admin.workSpace.editWorkSpace', compact('workspace', 'type'));
    }

    public function update(Request $request, $id)
    {
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


}
