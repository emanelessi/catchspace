<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Models\Worker;
use App\Models\WorkSpace;
use App\Models\WorkSpaceType;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:worker_access', ['only' => ['index']]);
        $this->middleware('permission:worker_create', ['only' => ['store', 'create']]);
        $this->middleware('permission:worker_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:worker_delete', ['only' => ['destroy']]);
    }

    public function index()
    {

        $work_space = WorkSpace::where('provider_id', auth()->user()->provider->id)->get();
//        dd($work_space);
        foreach ($work_space as $my_work_space){
            $worker = Worker::where('work_space_id', $my_work_space->id)->get();
            return view('admin.worker.worker', compact('worker'));
        }
    }

    public function create()
    {
        $work_space = WorkSpace::where('provider_id', auth()->user()->provider->id)->get();
        return view('admin.worker.addWorker', compact('work_space'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'job_title' => 'required',
            'avatar' => 'required',
            'you_did' => 'required',
            'work_space_type_id' => 'required',
        ]);

        $worker = new Worker();
        $worker->name = $request->input('name');
        $worker->job_title = $request->input('job_title');
        $worker->avatar = storeImage('workers','avatar' );
        $worker->you_did = $request->input('you_did');
        $worker->work_space_id = $request->input('work_space_type_id');
        $worker->save();
        return back()->with('success', trans('messages.worker.worker_created'));
    }

    public function edit($id)
    {
        $worker = Worker::findOrFail($id);
        $work_space = WorkSpace::where('provider_id', auth()->user()->provider->id)->get();
        return view('admin.worker.editWorker', compact('worker', 'work_space'));
    }

    public function update(Request $request)
    {
        $id = request('id');
        $this->validate($request, [
            'name' => 'required',
            'job_title' => 'required',
            'avatar' => 'required',
            'you_did' => 'required',
            'work_space_type_id' => 'required',
        ]);

        $worker = Worker::findOrFail($id);
        $worker->name = $request->input('name');
        $worker->job_title = $request->input('job_title');
        $worker->avatar = storeImage('workers','avatar' );;
        $worker->you_did = $request->input('you_did');
        $worker->work_space_id = $request->input('work_space_type_id');
        $worker->save();
        return back()->with('success', trans('messages.worker.worker_updated'));
    }

    public function destroy($id)
    {
        $worker = Worker::findOrFail($id)->delete();
        return back()->with('success', trans('messages.worker.worker_deleted'));
    }
}
