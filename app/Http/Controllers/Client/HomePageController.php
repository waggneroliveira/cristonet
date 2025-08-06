<?php

namespace App\Http\Controllers\Client;

use App\Models\Plan;
use App\Models\About;
use App\Models\Slide;
use App\Models\Stack;
use App\Models\Topic;
use App\Models\Partner;
use App\Models\PlanCategory;
use Illuminate\Http\Request;
use App\Models\StackSessionTitle;
use App\Http\Controllers\Controller;
use App\Models\PlanSection;

class HomePageController extends Controller
{
    public function index()
    {
        $slides = Slide::active()->sorting()->get();
        $topics = Topic::active()->sorting()->get();
        $partners = Partner::active()->sorting()->get();
        $plans = Plan::select(
        'plans.plan_category',
        'plans.title',
        'plans.subtitle',
        'plans.bandwidth_limit',
        'plans.bandwidth_unit',
        'plans.description',
        'plans.price',
        'plans.active',
        'plans.sorting'
        )->active()->sorting()->get();
        $planCategories = PlanCategory::whereHas('plans')->active()->sorting()->get();
        $about = About::active()->first();
        $planSection = PlanSection::first();

        return view('client.blades.index', compact('slides', 'topics', 'about', 'partners','planCategories', 'plans', 'planSection'));
    }

    public function getPlansByCategory($id)
    {
        $plans = Plan::select(
        'plans.plan_category',
        'plans.title',
        'plans.subtitle',
        'plans.bandwidth_limit',
        'plans.bandwidth_unit',
        'plans.description',
        'plans.price',
        'plans.active',
        'plans.sorting'
        )->where('plan_category', $id)
        ->active()->sorting()->get();

        $html = view('client.blades.ajax.plan', compact('plans'))->render();

        return response()->json(['html' => $html]);
    }

}
