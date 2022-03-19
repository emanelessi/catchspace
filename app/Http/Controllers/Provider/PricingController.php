<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\RentType;
use App\Models\WorkSpace;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:pricing_access', ['only' => ['index']]);
        $this->middleware('permission:pricing_create', ['only' => ['create', 'store']]);
        $this->middleware('permission:pricing_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:pricing_delete', ['only' => ['destroy']]);

    }
    public function index($id)
    {
        $workspace = WorkSpace::withTrashed()->findOrFail($id);
        $pricing = Pricing::where('work_space_id', $workspace->id)->withTrashed()->get();
        return view('admin.workSpace.pricing.pricing', compact('pricing','id'));
    }

    public function create($id)
    {
        $type=RentType::withTrashed()->get();
        return view('admin.workSpace.pricing.addPricing', compact('id','type'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'price' => 'required',
            'type' => 'required',
            'work_space_id' => 'required',
        ]);

//        $type = RentType::create(['type' => $request->input('type'),]);
        $pricing = Pricing::create(['price' => $request->input('price'),
            'work_space_id' => $request->input('work_space_id'), 'rent_type_id' => $request->input('type'),]);

        return back()->with('success', trans('messages.pricing.pricing_created'));
    }

    public function edit($id)
    {
        $type=RentType::all();
        $pricing = Pricing::withTrashed()->findOrFail($id);
        $work_space_id = $pricing->work_space_id;
        return view('admin.workSpace.pricing.editPricing', compact('work_space_id', 'pricing','type'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'price' => 'required',
            'type' => 'required',
            'work_space_id' => 'required',
        ]);
        $pricing = Pricing::withTrashed()->findOrFail($request->input('id'));
        $pricing->price = $request->input('price');
        $pricing->work_space_id = $request->input('work_space_id');
        $pricing->rent_type_id = $request->input('type');
        $pricing->save();

        return back()->with('success', trans('messages.pricing.pricing_updated'));
    }

    public function destroy($id)
    {
        $PricingId = Pricing::findOrFail($id);
        $workSpaceService = $PricingId->delete();
        return back()->with('success', trans('messages.pricing.pricing_deleted'));
    }

    public function restore($id)
    {
        $PricingId = Pricing::withTrashed()->findOrFail($id);
        $workSpaceService = $PricingId->restore();
        return back()->with('success', trans('messages.pricing.pricing_restored'));
    }
}
