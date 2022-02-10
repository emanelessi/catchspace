<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contactUs');
});
Route::get('/404', function () {
    return view('404');
});

Auth::routes();

Route::get('/email', function () {
    return view('auth.passwords.email');
});
Route::get('/check-email', function () {
    return view('auth.passwords.checkEmail');
});
Route::get('/reset', function () {
    return view('auth.passwords.reset');
});
Route::get('/confirm', function () {
    return view('auth.passwords.confirm');
});


Route::get('/admin/home', function () {
    return view('admin.home');
});


Route::get('/admin/provider', function () {
    return view('admin.coworkProvider.coworkProvider');
});
Route::get('/admin/edit-provider', function () {
    return view('admin.coworkProvider.editCoworkProvider');
});
Route::get('/admin/add-provider', function () {
    return view('admin.coworkProvider.addCoworkProvider');
});


Route::get('/admin/workspace', function () {
    return view('admin.workSpace.workSpace');
});
Route::get('/admin/edit-workspace', function () {
    return view('admin.workSpace.editWorkSpace');
});
Route::get('/admin/add-workspace', function () {
    return view('admin.workSpace.addWorkSpace');
});


Route::get('/admin/worker', function () {
    return view('admin.worker.worker');
});


Route::get('/provider/home', function () {
    return view('provider.home');
});


Route::get('/provider/workspace', function () {
    return view('provider.workSpace.workSpace');
});
Route::get('/provider/add-workspace', function () {
    return view('provider.workSpace.addWorkSpace');
});
Route::get('/provider/edit-workspace', function () {
    return view('provider.workSpace.editWorkSpace');
});


Route::get('/provider/worker', function () {
    return view('provider.worker.worker');
});
Route::get('/provider/add-worker', function () {
    return view('provider.worker.addWorker');
});
Route::get('/provider/edit-worker', function () {
    return view('provider.worker.editWorker');
});

Route::get('/provider/edit-provider', function () {
    return view('provider.coworkProvider.editCoworkProvider');
});

//Route::get('/provider/provider', function () {
//    return view('provider.coworkProvider.coworkProvider');
//});
//
//Route::get('/provider/add-provider', function () {
//    return view('provider.coworkProvider.addCoworkProvider');
//});


//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
