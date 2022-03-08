<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Models\WorkSpace;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function edit($id)
    {
//        $provider = Provider::findOrFail($id);
//        return view('admin.providerProfile.editProfile', compact('provider'));
        return view('admin.providerProfile.editProfile');
    }

    public function update(Request $request, $id)
    {
//        $this->validate($request, [
//            'capacity' => 'required',
//            'work_space_type_id' => 'required',
//            'provider_id' => 'required',
//        ]);
//
//        $workspace = WorkSpace::findOrFail($id);
//        $workspace->capacity = $request->input('capacity');
//        $workspace->work_space_type_id = $request->input('work_space_type_id');
//        $workspace->provider_id = $request->input('provider_id');
//        $workspace->save();

        return back()->with('success', trans('cp.messages.roles.role_updated'));
    }
}
