<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\WorkerController;
use \App\Http\Controllers\Api\RateController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', [WorkerController::class, 'register']);
Route::post('/login', [WorkerController::class, 'login']);
Route::post('/providers', [WorkerController::class, 'show']);
Route::post('/provider/{id}', [WorkerController::class, 'showProviderDetails']);
Route::post('/workspace/{id}', [WorkerController::class, 'showWorkspaceDetails']);
Route::post('/customer/add-rate', [RateController::class, 'store']);
//Route::post('rates', [RateController::class, 'show']);


//Route::post('/register', [EmployeeController::class, 'register']);
//Route::post('/login', [EmployeeController::class, 'login']);
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/customer/add-rate', [\App\Http\Controllers\Api\RateController::class, 'store']);

//    Route::get('profile/{id?}', [EmployeeController::class, 'profile']);
//    Route::put('profile', [EmployeeController::class, 'editProfile']);
    Route::post('providers', [EmployeeController::class, 'projects']);

});
