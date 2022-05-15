<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Models\Worker;
use App\Models\WorkerWorkSpace;
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
        $this->middleware('permission:reservations_access', ['only' => ['reservations']]);

    }

    public function index()
    {
//        $workspaces = WorkSpace::CheckProvider()
//         $workerworkspaces = WorkerWorkSpace::withTrashed()
//             ->join('work_spaces', 'worker_work_spaces.work_space_id', '=', 'work_spaces.id')
//             ->where('work_spaces.provider_id', auth()->user()->provider->id)
//             ->distinct('worker_id')
// //            ->groupBy('workers.id')
//             ->get();

        $workerworkspaces = WorkerWorkSpace::withTrashed()
                        ->whereIn('work_space_id', WorkSpace::where('provider_id', auth()->user()->provider->id)->pluck('id'))
                        ->get();

        return view('admin.worker.worker', compact('workerworkspaces'));

    }

    public function create()
    {
        $work_space = WorkSpace::withTrashed()->where('provider_id', auth()->user()->provider->id)->get();
        return view('admin.worker.addWorker', compact('work_space'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'job_title' => 'required',
            'avatar' => 'required',
//            'you_did' => 'required',
            'work_space_id' => 'required',
            'type' => 'required',
        ]);

        $worker = new Worker();
        $worker->name = $request->input('name');
        $worker->email = $request->input('email');
        $worker->password = bcrypt($request->input('password'));
        $worker->job_title = $request->input('job_title');
        $worker->avatar = storeImage('workers','avatar' );
//        $worker->you_did = $request->input('you_did');
        $worker->type = $request->input('type');
        $worker->save();
        $workerworkspace=new WorkerWorkSpace();
        $workerworkspace->worker_id   = $worker->id;
        $workerworkspace->work_space_id  = $request->input('work_space_id');
        $workerworkspace->save();

        return back()->with('success', trans('messages.worker.worker_created'));
    }

    public function edit($id)
    {
        $worker = Worker::withTrashed()->findOrFail($id);
        $work_space = WorkSpace::withTrashed()->where('provider_id', auth()->user()->provider->id)->get();
        return view('admin.worker.editWorker', compact('worker', 'work_space'));
    }

    public function update(Request $request)
    {
        $id = request('id');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'job_title' => 'required',
            'avatar' => 'required',
//            'you_did' => 'required',
            'work_space_id' => 'required',
            'type' => 'required',
        ]);

        $worker = Worker::withTrashed()->findOrFail($id);
        $worker->name = $request->input('name');
        $worker->email = $request->input('email');
        $worker->password = bcrypt($request->input('password'));
        $worker->job_title = $request->input('job_title');
        $worker->avatar = storeImage('workers','avatar' );;
//        $worker->you_did = $request->input('you_did');
        $worker->type = $request->input('type');
        $worker->save();
        $workerworkspace= WorkerWorkSpace::withTrashed()->findOrFail($id);
        $workerworkspace->worker_id   = $worker->id;
        $workerworkspace->work_space_id  = $request->input('work_space_id');
        $workerworkspace->save();
        return back()->with('success', trans('messages.worker.worker_updated'));
    }

    public function destroy($id)
    {
        $worker = Worker::findOrFail($id)->delete();
        $workerworkspace=WorkerWorkSpace::where('worker_id',$id)->delete();
        return back()->with('success', trans('messages.worker.worker_deleted'));
    }

    public function restore($id)
    {
        Worker::where('id', $id)->withTrashed()->restore();
        WorkerWorkSpace::where('worker_id',$id)->withTrashed()->restore();
        return back()->with('success', trans('messages.worker.worker_restored'));
    }
    public function reservations($id)
    {
        $worker = Worker::withTrashed()->findOrFail($id);
        $reservations= WorkerWorkSpace::withTrashed()->where('worker_id', $worker->id)
            ->join('work_spaces', 'worker_work_spaces.work_space_id', '=', 'work_spaces.id')
            ->where('work_spaces.provider_id', auth()->user()->provider->id)->get();
        return view('admin.worker.reservations.reservations', compact('reservations'));
    }
}
