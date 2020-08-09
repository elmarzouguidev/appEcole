<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use App\Models\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        $sliders = Slider::active();
        $ecoles = Ecole::top();
        return view('front.home.index',compact('sliders','ecoles'));
    }
}
