<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Destacado;
use App\Metadato;
use App\Slider;
use App\Texto;

class HomeController extends Controller
{
    public function index()
    {
    	$sliders = Slider::where('section', 'home')->orderBy('order', 'ASC')->get();
    	$destacados = Destacado::orderBy('order', 'ASC')->get();
    	$metadato = Metadato::where('section', 'home')->first();
        $texto = Texto::where('section', 'home')->first();
    	$active = 'home';
    	return view('page.home',compact('sliders', 'metadato', 'active', 'texto', 'destacados'));
    }
}