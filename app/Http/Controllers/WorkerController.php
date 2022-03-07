<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:worker_access', ['only' => ['index']]);
//        $this->middleware('permission:workspace_create', ['only' => ['store','create']]);
//        $this->middleware('permission:workspace_edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:workspace_delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $worker = Worker::all();
        return view('admin.worker.worker', compact('worker'));
    }
}
