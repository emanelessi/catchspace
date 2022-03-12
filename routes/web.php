<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\Provider;

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
    return view('errors/404');
});
Route::get('/403', function () {
    return view('errors/403');
});
Route::get('/500', function () {
    return view('errors/500');
});
Route::get('/401', function () {
    return view('errors/401');
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/home', [\App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/provider/home', [\App\Http\Controllers\ProviderController::class, 'index'])->name('providers');

    Route::get('/admin/user', [\App\Http\Controllers\UserController::class, 'index']);
    Route::get('/admin/add-user', [\App\Http\Controllers\UserController::class, 'create'])->name('usercreate');
    Route::post('/admin/add-user', [\App\Http\Controllers\UserController::class, 'store'])->name('userstore');
    Route::get('/admin/delete-user/{id}', [\App\Http\Controllers\UserController::class, 'destroy']);
    Route::get('/admin/edit-user/{id}', [\App\Http\Controllers\UserController::class, 'edit']);
    Route::post('/admin/edit-user', [\App\Http\Controllers\UserController::class, 'update'])->name('userupdate');
    Route::get('/admin/profile', [\App\Http\Controllers\UserController::class, 'profile'])->name('profile');

    Route::get('/admin/provider', [\App\Http\Controllers\ProviderController::class, 'show']);
    Route::get('/admin/add-provider', [\App\Http\Controllers\ProviderController::class, 'create'])->name('providercreate');
    Route::post('/admin/add-provider', [\App\Http\Controllers\ProviderController::class, 'store'])->name('providerstore');
    Route::get('/admin/edit-provider/{id}', [\App\Http\Controllers\ProviderController::class, 'edit']);
    Route::post('/admin/edit-provider', [\App\Http\Controllers\ProviderController::class, 'update'])->name('providerupdate');
    Route::get('/admin/delete-provider/{id}', [\App\Http\Controllers\ProviderController::class, 'destroy']);

    Route::get('/admin/role', [\App\Http\Controllers\RoleController::class, 'index'])->name('roles');
    Route::get('/admin/add-role', [\App\Http\Controllers\RoleController::class, 'create'])->name('rolecreate');
    Route::post('/admin/add-role', [\App\Http\Controllers\RoleController::class, 'store'])->name('rolestore');
    Route::get('/admin/delete-role/{id}', [\App\Http\Controllers\RoleController::class, 'destroy']);


    Route::get('/admin/workspace', [\App\Http\Controllers\WorkSpaceController::class, 'index'])->name('workspaces');
    Route::get('/admin/add-workspace', [\App\Http\Controllers\WorkSpaceController::class, 'create'])->name('workspacecreate');
    Route::post('/admin/add-workspace', [\App\Http\Controllers\WorkSpaceController::class, 'store'])->name('workspacestore');
    Route::get('/admin/delete-workspace/{id}', [\App\Http\Controllers\WorkSpaceController::class, 'destroy']);
    Route::get('/admin/edit-workspace/{id}', [\App\Http\Controllers\WorkSpaceController::class, 'edit']);
    Route::post('/admin/edit-workspace', [\App\Http\Controllers\WorkSpaceController::class, 'update'])->name('update');

    Route::get('/admin/worker', [\App\Http\Controllers\WorkerController::class, 'index'])->name('workers');


    Route::get('/provider/workspace', [Provider\WorkSpaceController::class, 'index'])->name('workSpaces');
    Route::get('/provider/add-workspace', [Provider\WorkSpaceController::class, 'create'])->name('workSpaceCreate');
    Route::get('/provider/add-workspace', [Provider\WorkSpaceController::class, 'store'])->name('workSpaceStore');
    Route::get('/provider/delete-workspace/{id}', [Provider\WorkSpaceController::class, 'destroy']);
    Route::get('/provider/edit-workspace/{id}', [Provider\WorkSpaceController::class, 'edit']);
    Route::post('/provider/edit-workspace', [Provider\WorkSpaceController::class, 'update'])->name('update');

    Route::get('/provider/worker', [Provider\WorkerController::class, 'index'])->name('worker');
    Route::get('/provider/add-worker', [Provider\WorkerController::class, 'create'])->name('workerCreate');
    Route::get('/provider/add-worker', [Provider\WorkerController::class, 'store'])->name('workerStore');
    Route::get('/provider/delete-worker/{id}', [Provider\WorkerController::class, 'destroy']);
    Route::get('/provider/edit-worker/{id}', [Provider\WorkerController::class, 'edit']);
    Route::post('/provider/edit-worker', [Provider\WorkerController::class, 'update'])->name('update');

    Route::get('/provider/policies', [Provider\PoliciesController::class, 'index'])->name('policies');
    Route::get('/provider/add-policies', [Provider\PoliciesController::class, 'create'])->name('policiesCreate');
    Route::get('/provider/add-policies', [Provider\PoliciesController::class, 'store'])->name('policiesStore');
    Route::get('/provider/delete-policies/{id}', [Provider\PoliciesController::class, 'destroy']);
    Route::get('/provider/edit-policies/{id}', [Provider\PoliciesController::class, 'edit']);
    Route::post('/provider/edit-policies', [Provider\PoliciesController::class, 'update'])->name('update');

    Route::get('/provider/edit-profile/{id}', [Provider\ProviderController::class, 'edit']);
    Route::post('/provider/edit-profile', [Provider\ProviderController::class, 'update'])->name('update');


});
