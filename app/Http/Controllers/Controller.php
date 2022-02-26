<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkSpace;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct()
    {
        $this->middleware('permission:workspace_show', ['only' => ['index']]);
        $this->middleware('permission:workspace_create', ['only' => ['update']]);
        $this->middleware('permission:workspace_delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        // $this->authorize('index', WorkSpace::class);
        $workspace = WorkSpace::all();
        return view('admin.workSpace.workSpace', compact($workspace));
//        return view('admin.workSpace.workSpace');
    }

    public function update(WorkSpace $workSpace)
    {
//        $this->authorize('update', $workSpace);
        $workspace = WorkSpace::all();
        return view('admin.workSpace.editWorkSpace', compact($workspace));
    }

    public function delete(WorkSpace $workSpace)
    {
//        $this->authorize('delete', $workSpace);
        $workspace = WorkSpace::all();
        return view('admin.workSpace.workSpace', compact($workspace));
    }
}
