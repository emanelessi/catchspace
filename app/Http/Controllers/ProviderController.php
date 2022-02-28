<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:provider_access', ['only' => ['index']]);
//        $this->middleware('permission:role_create', ['only' => ['create','store']]);
//        $this->middleware('permission:role_edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:role_delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
//        $superadmin_user_level_id = 1;
//        $provider_user_level_id = 2;
//        $user = auth()->user();
//
//        if ($user->user_level_id == $superadmin_user_level_id) {
//            return 'j';
//        } else if ($user->user_level_id == $provider_user_level_id) {
//            return 'pp';
//        }

        return view('admin.home');
    }
}
