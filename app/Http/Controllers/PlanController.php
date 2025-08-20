<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\PlanCategory;
use App\Models\PlanSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class PlanController extends Controller
{
    public function index()
    {
        $categories = PlanCategory::with('plans')->active()->sorting()->get();
        $plans = Plan::sorting()->get();
        $planSection = PlanSection::first();

        $planCategory = [];

        foreach ($categories as $category) {
            $planCategory[$category->id] = $category->title;
        }
        
        return view('admin.blades.plan.index', compact('plans', 'categories', 'planCategory', 'planSection'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // Formata o campo 'price'
        $valorFormatado = $request->price;
        $valorNumerico = str_replace(['R$', ' ', ' ', "\u{A0}"], '', $valorFormatado);
        $valorNumerico = str_replace(',', '.', $valorNumerico);
        $data['price'] = floatval($valorNumerico);
        $data['active'] = $request->active ? 1 : 0;
  
        try {
            DB::beginTransaction();
            Plan::create($data);
            DB::commit();
            session()->flash('success', __('dashboard.response_item_create'));
        } catch (\Exception $e) {
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_create'));
        }

        return redirect()->back();
    }

    public function update(Request $request, Plan $plan)
    {
        $data = $request->all();
        // Formata o campo 'price'
        $valorFormatado = $request->price;
        $valorNumerico = str_replace(['R$', ' ', ' ', "\u{A0}"], '', $valorFormatado);
        $valorNumerico = str_replace(',', '.', $valorNumerico);
        $data['price'] = floatval($valorNumerico);
        $data['active'] = $request->active ? 1 : 0;
        // dd($data);
        try {
            DB::beginTransaction();
            $plan->fill($data)->save();
            DB::commit();
            session()->flash('success', __('dashboard.response_item_create'));
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Alert::error('Erro', __('dashboard.response_item_error_create'));
        }

        return redirect()->back();
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }

    public function destroySelected(Request $request)
    {    
        foreach ($request->deleteAll as $planId) {
            $plan = Plan::find($planId);
    
            if ($plan) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($plan)
                    ->event('multiple_deleted')
                    ->withProperties([
                        'attributes' => [
                            'id' => $planId,
                            'title' => $plan->title,
                            'subtitle' => $plan->subtitle,
                            'bandwidth_limit' => $plan->bandwidth_limit,
                            'bandwidth_unit' => $plan->bandwidth_unit,
                            'description' => $plan->description,
                            'price' => $plan->price,
                            'sorting' => $plan->sorting,
                            'active' => $plan->active,
                            'event' => 'multiple_deleted',
                        ]
                    ])
                    ->log('multiple_deleted');
            } else {
                \Log::warning("Item com ID $planId não encontrado.");
            }
        }
    
        $deleted = Plan::whereIn('id', $request->deleteAll)->delete();
    
        if ($deleted) {
            return Response::json(['status' => 'success', 'message' => $deleted . ' '.__('dashboard.response_item_delete')]);
        }
    
        return Response::json(['status' => 'error', 'message' => 'Nenhum item foi deletado.'], 500);
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id) {
            $plan = Plan::find($id);
    
            if ($plan) {
                $plan->sorting = $sorting;
                $plan->save();
            } else {
                Log::warning("Item com ID $id não encontrado.");
            }

            if($plan) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($plan)
                    ->event('order_updated')
                    ->withProperties([
                        'attributes' => [
                            'id' => $id,
                            'title' => $plan->title,
                            'subtitle' => $plan->subtitle,
                            'bandwidth_limit' => $plan->bandwidth_limit,
                            'bandwidth_unit' => $plan->bandwidth_unit,
                            'description' => $plan->description,
                            'price' => $plan->price,
                            'sorting' => $plan->sorting,
                            'active' => $plan->active,
                            'event' => 'order_updated',
                        ]
                    ])
                    ->log('order_updated');
            } else {
                \Log::warning("Item com ID $id não encontrado.");
            }
        }
    
        return Response::json(['status' => 'success']);
    }
}
