<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\WorkSpace;
use App\Models\WorkSpaceService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:services_access', ['only' => ['index']]);
        $this->middleware('permission:services_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:services_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:services_delete', ['only' => ['destroy']]);

    }
    public function index($id)
    {
        $workspace = WorkSpace::findOrFail($id);
        $services = WorkSpaceService::where('work_space_id', $workspace->id)->get();
        return view('admin.workSpace.service.services', compact('services', 'id'));
    }

    public function create($id)
    {
        return view('admin.workSpace.service.addService', compact('id'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required',
            'work_space_id' => 'required',
        ]);

        $service = Service::create(['name' => $request->input('name'),]);
        $workSpaceService = WorkSpaceService::create(['value' => $request->input('value'),
            'work_space_id' => $request->input('work_space_id'), 'service_id' => $service->id,]);

        return back()->with('success', trans('messages.service.service_created'));
    }

    public function edit($id)
    {
        $workSpaceService = WorkSpaceService::findOrFail($id);
        $work_space_id = $workSpaceService->work_space_id;
        return view('admin.workSpace.service.editService', compact('work_space_id', 'workSpaceService'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required',
            'work_space_id' => 'required',
        ]);
        $workSpaceService = WorkSpaceService::findOrFail($request->input('id'));

        $service = Service::findOrFail($workSpaceService->service_id);
        $service->name= $request->input('name');
        $service->save();

        $workSpaceService->value = $request->input('value');
        $workSpaceService->work_space_id = $request->input('work_space_id');
        $workSpaceService->service_id = $service->id;
        $workSpaceService->save();

        return back()->with('success', trans('messages.service.service_updated'));
    }

    public function destroy($id)
    {
        $workSpaceServiceId = WorkSpaceService::findOrFail($id);
        $service = Service::findOrFail($workSpaceServiceId->service->id)->delete();
        $workSpaceService = $workSpaceServiceId->delete();
        return back()->with('success', trans('messages.service.service_deleted'));
    }
}
