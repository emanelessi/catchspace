<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Policies;
use Illuminate\Http\Request;

class PoliciesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:policies_access', ['only' => ['index']]);
        $this->middleware('permission:policies_create', ['only' => ['store','create']]);
        $this->middleware('permission:policies_edit', ['only' => ['edit','update']]);
        $this->middleware('permission:policies_delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $policies = Policies::all();
        return view('admin.policies.policies', compact('policies'));
    }
    public function create()
    {
        return view('admin.policies.addPolicies');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'capacity' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
        ]);

        $workspace = Policies::create(['capacity' => $request->input('capacity'),
            'work_space_type_id' => $request->input('work_space_type_id'),
            'provider_id' => $request->input('provider_id'),
        ]);

        return back()->with('success', trans('cp.messages.roles.role_created'));
    }

    public function edit($id)
    {
        $policies = Policies::findOrFail($id);
        return view('admin.policies.editPolicies', compact('policies'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'capacity' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
        ]);

        $workspace = Policies::findOrFail($id);
        $workspace->capacity = $request->input('capacity');
        $workspace->work_space_type_id = $request->input('work_space_type_id');
        $workspace->provider_id = $request->input('provider_id');
        $workspace->save();

        return back()->with('success', trans('cp.messages.roles.role_updated'));
    }

    public function destroy($id)
    {
        $policies = Policies::findOrFail($id)->delete();
        return back()->with('success', trans('cp.messages.roles.role_deleted'));
    }
}
