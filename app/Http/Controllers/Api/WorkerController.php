<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReserveRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\workspaceRequest;
use App\Http\Resources\providerDetailsResource;
use App\Http\Resources\providerResource;
use App\Http\Resources\workspaceDetailsResource;
use App\Http\Resources\workspacesResource;
use App\Models\Attribute;
use App\Models\Provider;
use App\Models\ProviderAttribute;
use App\Models\Worker;
use App\Models\WorkerWorkSpace;
use App\Models\WorkSpace;
use App\Models\WorkSpaceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class WorkerController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $db_password = Worker::select('password')->where('email', $email)->first();
        if (Worker::where('email', $email)->first() != null and password_verify($password, $db_password['password']) != false) {
            $worker = Worker::where('email', $email)->first();
            Session::put('worker', $worker);
            return response_api(true, 200, 'Successfully Login', ['worker' => $worker]);

        }
        return response_api(false, 400, 'Fail', []);
    }

    public function register(SignupRequest $request)
    {
        $worker = new Worker();
        $worker->name = $request->input('name');
        $worker->email = $request->input('email');
        $worker->password = bcrypt($request->input('password'));
        $worker->job_title = $request->input('job_title');
        $worker->avatar = storeImage('workers', 'avatar');
        $worker->type = $request->input('type');
        $worker->save();
        return response_api(true, 200, 'Successfully Register!', ['worker' => $worker]);

    }

    public function show()
    {
        $provider = Provider::get()->all();
        return response_api(true, 200, 'Success', ['providers' => providerResource::collection($provider)]);
    }

    public function showProviderDetails($id)
    {
        $provider = Provider::where('id', $id)->get();
        return response_api(true, 200, 'Success', ['provider' => providerDetailsResource::collection($provider)]);
    }

    public function showWorkspaceDetails($id)
    {
        $workspace = WorkSpace::where('id', $id)->get();
        return response_api(true, 200, 'Success', ['workspace' => workspaceDetailsResource::collection($workspace)]);
    }

    public function workspaceReserve(ReserveRequest $request)
    {
        $worker=Session::get('worker');
        if ($worker != null) {
            $reservation = new WorkerWorkSpace();
            $reservation->worker_id = $worker->id;
            $reservation->date = $request['date'];
            $reservation->work_space_id = $request['work_space_id'];
            $reservation->work_space_addon_id = $request['work_space_addon_id'];
            $reservation->pricing_id = $request['pricing_id'];
            $reservation->save();
            return response_api(true, 200, 'Workspace Reserved Successfully', $reservation );
        } else {
            return response_api(false, 400, 'You should Login first!!','');
        }
    }

    public function search(workspaceRequest $request)
    {
        $address = $request->input('address');
        $work_space_type_id = $request->input('work_space_type_id');
        $date = $request->input('date');
        $capacity = $request->input('capacity');
        $workspaces = WorkSpace::query()->where('capacity', $capacity)->where('work_space_type_id', $work_space_type_id)->get();
        $provider = Provider::query()->where('address', 'LIKE', "%{$address}%")->get();
        $reservation = WorkerWorkSpace::where('date', $date)->exists();
        if (($workspaces->isEmpty() or $provider->isEmpty() and $reservation) == false) {
            return response_api(true, 200, 'Success', ['workspace' => workspacesResource::collection($workspaces)]);
        } elseif (($workspaces->isEmpty() or $provider->isEmpty()) == true) {
            if ($reservation == false) {
                return response_api(false, 400, 'Not Found Workspace with this Information', []);
            } else {
                return response_api(false, 400, 'All Workspaces Reserved on this Date', []);
            }
        }


    }

    public function profile()
    {
        if (Session::get('worker') != null) {
            return response_api(true, 200, 'Successfully Get Profile', Session::get('worker'));

        } else {
            return response_api(false, 400, 'Fail You are not authorized', '');

        }
    }

    public function logout()
    {
        Session::flush();
        return response_api(true, 200, 'Successfully logged out', '');
    }


}
