<?php

namespace App\Http\Controllers;

use App\Models\PlanSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class PlanSectionController extends Controller
{

    public function index()
    {
        $planSection = PlanSection::first();
        
        return view('admin.blades.planSection.index', compact('planSection'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                PlanSection::create($data);
            DB::commit();
            session()->flash('success', __('dashboard.response_item_create'));
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_create'));
        }
        return redirect()->back();
    }

    public function update(Request $request, PlanSection $planSection)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                $planSection->fill($data)->save();
            DB::commit();
            session()->flash('success', __('dashboard.response_item_update'));
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_update'));
        }
        return redirect()->back();
    }

    public function destroy(PlanSection $planSection)
    {
        $planSection->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }
}
