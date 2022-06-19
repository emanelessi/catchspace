<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Provider;
use App\Models\ProviderAttribute;
use App\Models\WorkSpace;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function edit($id)
    {
        $provider = Provider::findOrFail($id);
        return view('admin.providerProfile.editProfile', compact('provider'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'owner_name' => 'required',
        ]);
        $id = request('id');
        $provider = Provider::findOrFail($id);
        $provider->name = $request->input('name');
        $provider->owner_name = $request->input('owner_name');
        $provider->address = $request->input('address');
        $provider->phone = $request->input('phone');
        $provider->logo = storeImage('providers','logo' );
        $provider->save();

        return back()->with('success', trans('messages.provider.provider_updated'));
    }


}
