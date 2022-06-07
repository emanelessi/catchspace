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
Route::post('/worker/register', [WorkerController::class, 'register']);
Route::post('/worker/login', [WorkerController::class, 'login']);
Route::get('/worker/profile', [WorkerController::class, 'profile']);
Route::get('/worker/logout',[WorkerController::class,'logout']);

Route::post('/providers', [WorkerController::class, 'show']);
Route::post('/provider/{id}', [WorkerController::class, 'showProviderDetails']);
Route::post('/workspace/search',[WorkerController::class,'search']);
Route::post('/workspace/{id}', [WorkerController::class, 'showWorkspaceDetails']);
Route::post('/worker/add-rate', [RateController::class, 'store']);
Route::post('/worker/workspace-reserve', [WorkerController::class, 'workspaceReserve']);

