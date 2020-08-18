<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Librairie;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        $sliders = Slider::active();
        $ecoles = Ecole::top();
        $testimonials = Testimonial::all();
        $librerais = Librairie::home();
        return view('front.home.index',compact('sliders','ecoles','testimonials','librerais'));
    }
}
