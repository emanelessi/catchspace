<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\Provider;
use \App\Http\Controllers\WorkerController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProviderController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\RateController;
use \App\Http\Controllers\RoleController;
use \App\Http\Controllers\WorkSpaceController;

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


Route::get('/dashboard', function () {
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

Route::get('public/404', function () {
    return view('errorsPublicSite/404');
});
Route::get('public/403', function () {
    return view('errorsPublicSite/403');
});
Route::get('public/500', function () {
    return view('errorsPublicSite/500');
});
Route::get('public/401', function () {
    return view('errorsPublicSite/401');
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


Route::get('/worker/login', [WorkerController::class, 'login'])->name('workerLogin');
Route::post('/worker/login', [WorkerController::class, 'check'])->name('workerCheck');
Route::get('/worker/profile/{$id}', [WorkerController::class, 'profile']);

Route::get('/worker/signup', [WorkerController::class, 'create'])->name('workerSignup');
Route::post('/worker/signup', [WorkerController::class, 'store'])->name('signupWorkerStore');

Route::get('/worker/forget-password', [WorkerController::class, 'getEmail']);
Route::post('/worker/forget-password', [WorkerController::class, 'postEmail'])->name('workerForgetPassword');

Route::get('/worker/reset-password/{token}', [WorkerController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/worker/reset-password', [WorkerController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/worker/logout', [WorkerController::class, 'logout']);

Route::get('/', [WorkerController::class, 'home'])->name('workerHome');

Route::get('/worker/providers', [WorkerController::class, 'providers'])->name('workerProviders');
Route::get('/worker/review/{id}', [WorkerController::class, 'review'])->name('workerReview');
Route::post('/worker/review', [WorkerController::class, 'storeReview'])->name('workerReviewStore');

Route::get('/worker/provider-details/{id}', [WorkerController::class, 'providerDetails']);
Route::get('/worker/workspace-details/{id}', [WorkerController::class, 'workspaceDetails']);
Route::post('/worker/workspace-reserve/{id}', [WorkerController::class, 'workspaceReserve']);

Route::get('/worker/contact-us', [WorkerController::class, 'contactus'])->name('workerContactus');
Route::post('/worker/contact-us', [WorkerController::class, 'contactStore'])->name('workerContactStore');

Route::get('/worker/about-us', [WorkerController::class, 'aboutUs'])->name('workerAboutUs');

Route::get('/search/workspace', [WorkerController::class, 'simpleSearch'])->name('simpleSearch');
Route::get('/search/workspaces', [WorkerController::class, 'search'])->name('search');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/home', [HomeController::class, 'index']);
    Route::get('/provider/home', [ProviderController::class, 'index'])->name('providers');

    Route::get('/admin/user', [UserController::class, 'index']);
    Route::get('/admin/add-user', [UserController::class, 'create'])->name('userCreate');
    Route::post('/admin/add-user', [UserController::class, 'store'])->name('userStore');
    Route::get('/admin/delete-user/{id}', [UserController::class, 'destroy']);
    Route::get('/admin/restore-user/{id}', [UserController::class, 'restore']);
    Route::get('/admin/edit-user/{id}', [UserController::class, 'edit']);
    Route::post('/admin/edit-user', [UserController::class, 'update'])->name('userUpdate');
    Route::get('/admin/profile', [UserController::class, 'profile'])->name('adminProfile');

    Route::get('/admin/rate', [RateController::class, 'index']);
    Route::get('/admin/rate/rating/{id}', [RateController::class, 'rating']);

    Route::get('/admin/provider', [ProviderController::class, 'show']);
    Route::get('/admin/add-provider', [ProviderController::class, 'create'])->name('providerCreate');
    Route::post('/admin/add-provider', [ProviderController::class, 'store'])->name('providerStore');
    Route::get('/admin/edit-provider/{id}', [ProviderController::class, 'edit']);
    Route::post('/admin/edit-provider', [ProviderController::class, 'update'])->name('providerUpdate');
    Route::get('/admin/delete-provider/{id}', [ProviderController::class, 'destroy']);
    Route::get('/admin/restore-provider/{id}', [ProviderController::class, 'restore']);

    Route::get('/admin/role', [RoleController::class, 'index'])->name('roles');
    Route::get('/admin/add-role', [RoleController::class, 'create'])->name('roleCreate');
    Route::post('/admin/add-role', [RoleController::class, 'store'])->name('roleStore');
    Route::get('/admin/delete-role/{id}', [RoleController::class, 'destroy']);
    Route::get('/admin/restore-role/{id}', [RoleController::class, 'restore']);


    Route::get('/admin/workspace', [WorkSpaceController::class, 'index'])->name('workspaces');
    Route::get('/admin/add-workspace', [WorkSpaceController::class, 'create'])->name('workspaceCreate');
    Route::post('/admin/add-workspace', [WorkSpaceController::class, 'store'])->name('workspaceStore');
    Route::get('/admin/delete-workspace/{id}', [WorkSpaceController::class, 'destroy']);
    Route::get('/admin/restore-workspace/{id}', [WorkSpaceController::class, 'restore']);
    Route::get('/admin/edit-workspace/{id}', [WorkSpaceController::class, 'edit']);
    Route::post('/admin/edit-workspace', [WorkSpaceController::class, 'update'])->name('workspaceUpdate');

    Route::get('/admin/worker', [WorkerController::class, 'index'])->name('workers');
    Route::get('/admin/worker/reservations/{id}', [WorkerController::class, 'reservations']);

    Route::get('/admin/workspace/services/{id}', [WorkSpaceController::class, 'services']);
    Route::get('/admin/workspace/pricing/{id}', [WorkSpaceController::class, 'pricing']);
    Route::get('/admin/workspace/addons/{id}', [WorkSpaceController::class, 'addons']);


    Route::get('/provider/workspace', [Provider\WorkSpaceController::class, 'index'])->name('workSpaces');
    Route::get('/provider/add-workspace', [Provider\WorkSpaceController::class, 'create'])->name('workSpaceCreate');
    Route::post('/provider/add-workspace', [Provider\WorkSpaceController::class, 'store'])->name('workSpaceStore');
    Route::get('/provider/delete-workspace/{id}', [Provider\WorkSpaceController::class, 'destroy']);
    Route::get('/provider/restore-workspace/{id}', [Provider\WorkSpaceController::class, 'restore']);
    Route::get('/provider/edit-workspace/{id}', [Provider\WorkSpaceController::class, 'edit']);
    Route::post('/provider/edit-workspace', [Provider\WorkSpaceController::class, 'update'])->name('updateWorkspace');
    Route::get('/provider/workspace/services/{id}', [Provider\WorkSpaceController::class, 'services']);

    Route::get('/provider/attribute/{id}', [Provider\AttributeController::class, 'attribute']);
    Route::get('/provider/add-attribute/{id}', [Provider\AttributeController::class, 'create']);
    Route::post('/provider/add-attribute', [Provider\AttributeController::class, 'store'])->name('attributeStore');
    Route::get('/provider/delete-attribute/{id}', [Provider\AttributeController::class, 'destroy']);
    Route::get('/provider/restore-attribute/{id}', [Provider\AttributeController::class, 'restore']);
    Route::get('/provider/edit-attribute/{id}', [Provider\AttributeController::class, 'edit']);
    Route::post('/provider/edit-attribute', [Provider\AttributeController::class, 'update'])->name('updateAttribute');


    Route::get('/provider/workspace/services/{id}', [Provider\ServiceController::class, 'index']);
    Route::get('/provider/workspace/add-service/{id}', [Provider\ServiceController::class, 'create']);
    Route::post('/provider/workspace/add-service', [Provider\ServiceController::class, 'store'])->name('serviceStore');
    Route::get('/provider/workspace/delete-service/{id}', [Provider\ServiceController::class, 'destroy']);
    Route::get('/provider/workspace/restore-service/{id}', [Provider\ServiceController::class, 'restore']);
    Route::get('/provider/workspace/edit-service/{id}', [Provider\ServiceController::class, 'edit']);
    Route::post('/provider/workspace/edit-service', [Provider\ServiceController::class, 'update'])->name('updateService');

    Route::get('/provider/workspace/pricing/{id}', [Provider\PricingController::class, 'index']);
    Route::get('/provider/workspace/add-pricing/{id}', [Provider\PricingController::class, 'create']);
    Route::post('/provider/workspace/add-pricing', [Provider\PricingController::class, 'store'])->name('pricingStore');
    Route::get('/provider/workspace/delete-pricing/{id}', [Provider\PricingController::class, 'destroy']);
    Route::get('/provider/workspace/restore-pricing/{id}', [Provider\PricingController::class, 'restore']);
    Route::get('/provider/workspace/edit-pricing/{id}', [Provider\PricingController::class, 'edit']);
    Route::post('/provider/workspace/edit-pricing', [Provider\PricingController::class, 'update'])->name('updatePricing');

    Route::get('/provider/workspace/addons/{id}', [Provider\AddonsController::class, 'addons']);
    Route::get('/provider/workspace/add-addon/{id}', [Provider\AddonsController::class, 'create']);
    Route::post('/provider/workspace/add-addon', [Provider\AddonsController::class, 'store'])->name('addonStore');
    Route::get('/provider/workspace/delete-addon/{id}', [Provider\AddonsController::class, 'destroy']);
    Route::get('/provider/workspace/restore-addon/{id}', [Provider\AddonsController::class, 'restore']);
    Route::get('/provider/workspace/edit-addon/{id}', [Provider\AddonsController::class, 'edit']);
    Route::post('/provider/workspace/edit-addon', [Provider\AddonsController::class, 'update'])->name('updateAddon');

    Route::get('/provider/worker', [Provider\WorkerController::class, 'index'])->name('worker');
    Route::get('/provider/add-worker', [Provider\WorkerController::class, 'create'])->name('workerCreate');
    Route::post('/provider/add-worker', [Provider\WorkerController::class, 'store'])->name('workerStore');
    Route::get('/provider/delete-worker/{id}', [Provider\WorkerController::class, 'destroy']);
    Route::get('/provider/restore-worker/{id}', [Provider\WorkerController::class, 'restore']);
    Route::get('/provider/edit-worker/{id}', [Provider\WorkerController::class, 'edit']);
    Route::post('/provider/edit-worker', [Provider\WorkerController::class, 'update'])->name('updateWorker');
    Route::get('/provider/worker/reservations/{id}', [Provider\WorkerController::class, 'reservations']);


    Route::get('/provider/policies', [Provider\PoliciesController::class, 'index'])->name('policies');
    Route::get('/provider/add-policies', [Provider\PoliciesController::class, 'create'])->name('policiesCreate');
    Route::post('/provider/add-policies', [Provider\PoliciesController::class, 'store'])->name('policiesStore');
    Route::get('/provider/delete-policies/{id}', [Provider\PoliciesController::class, 'destroy']);
    Route::get('/provider/restore-policies/{id}', [Provider\PoliciesController::class, 'restore']);
    Route::get('/provider/edit-policies/{id}', [Provider\PoliciesController::class, 'edit']);
    Route::post('/provider/edit-policies', [Provider\PoliciesController::class, 'update'])->name('updatePolicies');

    Route::get('/provider/provider-profile', [ProviderController::class, 'profile'])->name('providerProfile');
    Route::get('/provider/edit-profile/{id}', [Provider\ProviderController::class, 'edit']);
    Route::post('/provider/edit-profile', [Provider\ProviderController::class, 'update'])->name('updateProfile');

    Route::get('/provider/rate', [Provider\RateController::class, 'index']);
    Route::get('/provider/rate/rating/{id}', [Provider\RateController::class, 'rating']);
});
