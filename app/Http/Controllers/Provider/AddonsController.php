<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Addons;
use App\Models\WorkSpace;
use App\Models\WorkSpaceAddons;
use Illuminate\Http\Request;

class AddonsController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:addons_access', ['only' => ['addons']]);
        $this->middleware('permission:addons_create', ['only' => ['createAddon', 'storeAddon']]);
        $this->middleware('permission:addons_edit', ['only' => ['editAddon', 'updateAddon']]);
        $this->middleware('permission:addons_delete', ['only' => ['destroyAddon']]);

    }
    public function addons($id)
    {
        $workspace = WorkSpace::withTrashed()->findOrFail($id);
        $addons = WorkSpaceAddons::withTrashed()->where('work_space_id', $workspace->id)->get();
        return view('admin.workSpace.addons.addons', compact('addons','id'));
    }

    public function create($id)
    {
        return view('admin.workSpace.addons.addAddon', compact('id'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required',
            'work_space_id' => 'required',
        ]);

        $addons = Addons::create(['name' => $request->input('name'),]);
        $workSpaceAddons = WorkSpaceAddons::create(['value' => $request->input('value'),
            'work_space_id' => $request->input('work_space_id'), 'addon_id' => $addons->id,]);

        return back()->with('success', trans('messages.addons.addons_created'));
    }

    public function edit($id)
    {
        $workSpaceAddons = WorkSpaceAddons::withTrashed()->findOrFail($id);
        $work_space_id = $workSpaceAddons->work_space_id;
        return view('admin.workSpace.addons.editAddon', compact('work_space_id', 'workSpaceAddons'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required',
            'work_space_id' => 'required',
        ]);
        $workSpaceAddons = WorkSpaceAddons::findOrFail($request->input('id'));

        $addons = Addons::withTrashed()->findOrFail($workSpaceAddons->addon_id);
        $addons->name= $request->input('name');
        $addons->save();

        $workSpaceAddons->value = $request->input('value');
        $workSpaceAddons->work_space_id = $request->input('work_space_id');
        $workSpaceAddons->addon_id = $addons->id;
        $workSpaceAddons->save();

        return back()->with('success', trans('messages.addons.addons_updated'));
    }

    public function destroy($id)
    {
        $workSpaceAddonsId = WorkSpaceAddons::findOrFail($id);
        $addons = Addons::findOrFail($workSpaceAddonsId->addon->id)->delete();
        $workSpaceAddons = $workSpaceAddonsId->delete();
        return back()->with('success', trans('messages.addons.addons_deleted'));
    }

    public function restore($id)
    {
        $workSpaceAddonsId = WorkSpaceAddons::withTrashed()->findOrFail($id);
        $addons = Addons::withTrashed()->findOrFail($workSpaceAddonsId->addon->id)->restore();
        $workSpaceAddons = $workSpaceAddonsId->restore();

        return back()->with('success', trans('messages.addons.addons_restored'));
    }
}
