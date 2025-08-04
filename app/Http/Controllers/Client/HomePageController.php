<?php

namespace App\Http\Controllers\Client;

use App\Models\About;
use App\Models\Slide;
use App\Models\Stack;
use App\Models\Topic;
use Illuminate\Http\Request;
use App\Models\StackSessionTitle;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function index()
    {
        $slides = Slide::active()->sorting()->get();
        $topics = Topic::active()->sorting()->get();
        $about = About::active()->first();

        return view('client.blades.index', compact('slides', 'topics', 'about'));
    }
}
