<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class ProductSectionController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                ProductSection::create($data);
            DB::commit();
            session()->flash('success', __('dashboard.response_item_create'));
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_create'));
        }
        return redirect()->back();
    }

    public function update(Request $request, ProductSection $productSection)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                $productSection->fill($data)->save();
            DB::commit();
            session()->flash('success', __('dashboard.response_item_update'));
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_update'));
        }
        return redirect()->back();
    }

    public function destroy(ProductSection $productSection)
    {
        $productSection->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }
}
