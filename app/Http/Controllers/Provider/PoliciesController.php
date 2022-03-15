<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Policies;
use App\Models\Provider;
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
        $provider = Provider::all();
        return view('admin.policies.addPolicies',compact('provider'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'provider_id' => 'required',
        ]);

        $policies = new Policies();
        $policies->title = $request->input('title');
        $policies->body = $request->input('body');
        $policies->provider_id = $request->input('provider_id');
        $policies->save();


        return back()->with('success', trans('messages.policies.policies_created'));
    }

    public function edit($id)
    {
        $policies = Policies::findOrFail($id);
        $provider = Provider::all();
        return view('admin.policies.editPolicies', compact('policies','provider'));
    }

    public function update(Request $request)
    {
        $id = request('id');
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'provider_id' => 'required',
        ]);

        $policies = Policies::findOrFail($id);
        $policies->title = $request->input('title');
        $policies->body = $request->input('body');
        $policies->provider_id = $request->input('provider_id');
        $policies->save();

        return back()->with('success', trans('messages.policies.policies_updated'));
    }

    public function destroy($id)
    {
        $policies = Policies::findOrFail($id)->delete();
        return back()->with('success', trans('messages.policies.policies_deleted'));
    }
}
