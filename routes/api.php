<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//Route::post('/register', [EmployeeController::class, 'register']);
//Route::post('/login', [EmployeeController::class, 'login']);
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/customer/add-rate', [\App\Http\Controllers\Api\RateController::class, 'store']);

//    Route::get('profile/{id?}', [EmployeeController::class, 'profile']);
//    Route::put('profile', [EmployeeController::class, 'editProfile']);
    Route::post('providers', [EmployeeController::class, 'projects']);

});
