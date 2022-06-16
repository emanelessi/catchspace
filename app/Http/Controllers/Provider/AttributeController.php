<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Provider;
use App\Models\ProviderAttribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:attribute_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:attribute_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:attribute_delete', ['only' => ['destroy']]);
        $this->middleware('permission:attribute_delete', ['only' => ['restore']]);

    }
    public function attribute($id)
    {
        $provider=Provider::withTrashed()->findOrFail($id);
        $attribute = ProviderAttribute::withTrashed()->where('provider_id', $provider->id)->get();
        return view('admin.coworkProvider.attributes.attribute', compact('attribute'));
    }
    public function create($id)
    {
        return view('admin.coworkProvider.attributes.addAttribute', compact('id'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required',
            'provider_id' => 'required',
        ]);

        $attribute = Attribute::create(['name' => $request->input('name')]);
        $providerAttribute = ProviderAttribute::create(['value' => $request->input('value'),
            'provider_id' => $request->input('provider_id'), 'attribute_id' => $attribute->id,]);

        return back()->with('success', trans('messages.attribute.attribute_created'));
    }

    public function edit($id)
    {
        $providerAttribute  = ProviderAttribute::withTrashed()->findOrFail($id);
        $provider_id = $providerAttribute->provider_id;
        return view('admin.coworkProvider.attributes.editAttribute', compact('provider_id', 'providerAttribute'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required',
            'provider_id' => 'required',
        ]);
        $providerAttribute = ProviderAttribute::withTrashed()->findOrFail($request->input('id'));

        $attribute = Attribute::withTrashed()->findOrFail($providerAttribute->attribute_id);
        $attribute->name= $request->input('name');
        $attribute->save();

        $providerAttribute->value = $request->input('value');
        $providerAttribute->provider_id = $request->input('provider_id');
        $providerAttribute->attribute_id = $attribute->id;
        $providerAttribute->save();

        return back()->with('success', trans('messages.attribute.attribute_updated'));
    }

    public function destroy($id)
    {
        $providerAttributeId = ProviderAttribute::findOrFail($id);
        $attribute = Attribute::findOrFail($providerAttributeId->attributes->id)->delete();
        $providerAttribute = $providerAttributeId->delete();
        return back()->with('success', trans('messages.attribute.attribute_deleted'));
    }

    public function restore($id)
    {
        $providerAttributeId = ProviderAttribute::withTrashed()->findOrFail($id);
        $attribute = Attribute::withTrashed()->findOrFail($providerAttributeId->attributes->id)->restore();
        $providerAttribute = $providerAttributeId->restore();
        return back()->with('success', trans('messages.attribute.attribute_restored'));
    }
}
