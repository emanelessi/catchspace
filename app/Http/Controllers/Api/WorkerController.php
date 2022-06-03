<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Http\Resources\providerDetailsResource;
use App\Http\Resources\providerResource;
use App\Http\Resources\workspaceDetailsResource;
use App\Models\Attribute;
use App\Models\Provider;
use App\Models\ProviderAttribute;
use App\Models\Worker;
use App\Models\WorkSpace;
use App\Models\WorkSpaceType;
use Illuminate\Http\Request;
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
        $request['password'] = bcrypt($request['password']);
        $worker = Worker::create($request->all());
        return response_api(true, 200, 'Successfully Register!', $worker->fresh());

    }

    public function show()
    {
        $provider = Provider::get()->all();
        return response_api(true, 200, 'Success',['providers' =>  providerResource::collection($provider)]);
    }

    public function showProviderDetails($id)
    {
        $provider =  Provider::where('id',$id)->get();
//        $providerAttribute = ProviderAttribute::where('provider_id',$id)->get();
        $attribute = Attribute::findOrFail($id);
//        $attributes = ProviderAttribute::where('attribute_id', $attribute->id)->get();
//        $work_space_type = WorkSpace::where('provider_id',$id)->get();
        return response_api(true, 200, 'Success', [ 'provider' =>providerDetailsResource::collection($provider)]);
    }

    public function showWorkspaceDetails($id)
    {
        $workspace =  WorkSpace::where('id',$id)->get();
//        $provider = Provider::where('provider_id',$id)->get();
//        $attribute = Attribute::findOrFail($id);
//        $attributes = ProviderAttribute::where('attribute_id', $attribute->id)->get();
//        $work_space_type = WorkSpace::where('provider_id',$id)->get();
        return response_api(true, 200, 'Success', ['workspace' =>workspaceDetailsResource::collection($workspace)]);
    }

}
