<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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

class WorkerController extends Controller
{
    public function login()
    {
        $proxy = Request::create('oauth/token', 'POST');
        $response = Route::dispatch($proxy);
        $statusCode = $response->getStatusCode();
        $response = json_decode($response->getContent());
        if ($statusCode != 200)
            return response_api(false, $statusCode, $response->message, $response);

        $response_token = $response;
        $token = $response->access_token;
        \request()->headers->set('Authorization', 'Bearer ' . $token);

        $proxy = Request::create('api/profile', 'GET');
        $response = Route::dispatch($proxy);

        $statusCode = $response->getStatusCode();
        $worker = json_decode($response->getContent())->items;
        return response_api(true, $statusCode, 'Successfully Login', ['token' => $response_token, 'worker' => $worker]);

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
        return response_api(true, 200, 'Successfully Register!', $worker->fresh());

    }

    public function show()
    {
        $provider = Provider::get()->all();
        return response_api(true, 200, 'Success', ['providers' => providerResource::collection($provider)]);
    }

    public function showProviderDetails($id)
    {
        $provider = Provider::where('id', $id)->get();
//        $providerAttribute = ProviderAttribute::where('provider_id',$id)->get();
        $attribute = Attribute::findOrFail($id);
//        $attributes = ProviderAttribute::where('attribute_id', $attribute->id)->get();
//        $work_space_type = WorkSpace::where('provider_id',$id)->get();
        return response_api(true, 200, 'Success', ['provider' => providerDetailsResource::collection($provider)]);
    }

    public function showWorkspaceDetails($id)
    {
        $workspace = WorkSpace::where('id', $id)->get();
//        $provider = Provider::where('provider_id',$id)->get();
//        $attribute = Attribute::findOrFail($id);
//        $attributes = ProviderAttribute::where('attribute_id', $attribute->id)->get();
//        $work_space_type = WorkSpace::where('provider_id',$id)->get();
        return response_api(true, 200, 'Success', ['workspace' => workspaceDetailsResource::collection($workspace)]);
    }

//    public function store(workspaceRequest $request)
//    {
//        $data = $request->get('data');
//        $workspace = WorkSpace::where("name", "like", "%{$data}%")
//            ->where("name", "like", "%{$data}%")
//            ->where("name", "like", "%{$data}%")->get();
//        $provider=Provider::where("name", "like", "%{$data}%")->get();
//        if(count($workspace)){
//            return Response()->json($workspace);
//        }
//        else
//        {
//            return response()->json(['workspace' => 'No Data not found'], 404);
//        }
//
//
//    }
    public function search(workspaceRequest $request)
    {
        $address = $request->input('address');
        $work_space_type_id = $request->input('work_space_type_id');
        $date = $request->input('date');
        $capacity = $request->input('capacity');
        $workspaces = WorkSpace::query()->where('capacity', $capacity)->where('work_space_type_id', $work_space_type_id)->get();
        $provider = Provider::query()->where('address', 'LIKE', "%{$address}%")->get();
        $reservation = WorkerWorkSpace::where('date', $date)->exists();
//        dd($workspaces->isEmpty(),$provider->isEmpty(),$reservation == true);
//        dd(($workspaces->isEmpty() or $provider->isEmpty() and $reservation) != false);
        if (($workspaces->isEmpty() or $provider->isEmpty() and $reservation) == false) {
//            dd($workspaces);
            return response_api(true, 200, 'Success', ['workspace' => workspacesResource::collection($workspaces)]);
        } elseif (($workspaces->isEmpty() or $provider->isEmpty()) == true) {
            if ($reservation == false) {
//            dd($provider);
                return response_api(false, 400, 'Not Found Workspace with this Information', []);
            } else {
                return response_api(false, 400, 'All Workspaces Reserved on this Date', []);
            }
        }


    }

    public function profile()
    {
        return response_api(true, 200, 'Profile', \auth()->worker());
    }

    public function logout()
    {
        Auth::worker()->token()->revoke();
        return response_api(true, 200, 'Successfully logged out', '');
    }


}
