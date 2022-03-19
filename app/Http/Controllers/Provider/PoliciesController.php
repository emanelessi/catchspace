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
        $policies = Policies::withTrashed()->where('provider_id', auth()->user()->provider->id)->get();
        return view('admin.policies.policies', compact('policies'));
    }
    public function create()
    {
        return view('admin.policies.addPolicies');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $policies = new Policies();
        $policies->title = $request->input('title');
        $policies->body = $request->input('body');
        $policies->provider_id = auth()->user()->provider->id;
        $policies->save();


        return back()->with('success', trans('messages.policies.policies_created'));
    }

    public function edit($id)
    {
        $policies = Policies::withTrashed()->findOrFail($id);
        $provider = Provider::withTrashed()->get();
        return view('admin.policies.editPolicies', compact('policies','provider'));
    }

    public function update(Request $request)
    {
        $id = request('id');
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $policies = Policies::withTrashed()->findOrFail($id);
        $policies->title = $request->input('title');
        $policies->body = $request->input('body');
        $policies->provider_id = auth()->user()->provider->id;
        $policies->save();

        return back()->with('success', trans('messages.policies.policies_updated'));
    }

    public function destroy($id)
    {
        $policies = Policies::findOrFail($id)->delete();
        return back()->with('success', trans('messages.policies.policies_deleted'));
    }

    public function restore($id)
    {
        Policies::where('id', $id)->withTrashed()->restore();

        return back()->with('success', trans('messages.worker.worker_restored'));
    }
}
