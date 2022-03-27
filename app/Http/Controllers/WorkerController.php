<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use App\Models\WorkerWorkSpace;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:worker_access', ['only' => ['index']]);
        $this->middleware('permission:reservations_show', ['only' => ['reservations']]);
//        $this->middleware('permission:workspace_edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:workspace_delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $worker = Worker::withTrashed()->get();
//        dd($worker[0]->workSpace);
        return view('admin.worker.worker', compact('worker'));
    }

    public function reservations($id)
    {
        $worker = Worker::withTrashed()->findOrFail($id);
        $reservations= WorkerWorkSpace::where('worker_id', $worker->id)->get();
        return view('admin.worker.reservations.reservations', compact('reservations'));
    }
}
