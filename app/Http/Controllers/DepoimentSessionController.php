<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepoimentSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class DepoimentSessionController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                DepoimentSession::create($data);
            DB::commit();
            session()->flash('success', __('dashboard.response_item_create'));
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_create'));
        }
        return redirect()->back();
    }

    public function update(Request $request, DepoimentSession $depoimentSession)
    {
        $data = $request->all();

        try {
            DB::beginTransaction();
                $depoimentSession->fill($data)->save();
            DB::commit();
            session()->flash('success', __('dashboard.response_item_update'));
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_update'));
        }
        return redirect()->back();
    }

    public function destroy(DepoimentSession $depoimentSession)
    {
        $depoimentSession->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }
}
