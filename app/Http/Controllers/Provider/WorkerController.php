<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:worker_access', ['only' => ['index']]);
        $this->middleware('permission:worker_create', ['only' => ['store','create']]);
        $this->middleware('permission:worker_edit', ['only' => ['edit','update']]);
        $this->middleware('permission:worker_delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $worker = Worker::all();
        return view('admin.worker.worker', compact('worker'));
    }
    public function create()
    {
        return view('admin.worker.addWorker');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'capacity' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
        ]);

        $workspace = Worker::create(['capacity' => $request->input('capacity'),
            'work_space_type_id' => $request->input('work_space_type_id'),
            'provider_id' => $request->input('provider_id'),
        ]);

        return back()->with('success', trans('cp.messages.roles.role_created'));
    }

    public function edit($id)
    {
        $worker = Worker::findOrFail($id);
        return view('admin.worker.editWorker', compact('worker'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'capacity' => 'required',
            'work_space_type_id' => 'required',
            'provider_id' => 'required',
        ]);

        $workspace = Worker::findOrFail($id);
        $workspace->capacity = $request->input('capacity');
        $workspace->work_space_type_id = $request->input('work_space_type_id');
        $workspace->provider_id = $request->input('provider_id');
        $workspace->save();

        return back()->with('success', trans('cp.messages.roles.role_updated'));
    }

    public function destroy($id)
    {
        $worker = Worker::findOrFail($id)->delete();
        return back()->with('success', trans('cp.messages.roles.role_deleted'));
    }
}
