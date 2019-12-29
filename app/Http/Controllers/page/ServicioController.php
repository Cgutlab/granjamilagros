<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadato;
use App\Slider;
use App\Texto;

class ServicioController extends Controller
{
    public function index()
    {
    	$sliders = Slider::where('section', 'servicio')->orderBy('order', 'ASC')->get();
    	$metadato = Metadato::where('section', 'servicio')->first();
        $servicio = Texto::where('section', 'servicio')->first();
    	$active = 'servicio';
    	return view('page.servicio',compact('sliders', 'metadato', 'active', 'servicio'));
    }
}
