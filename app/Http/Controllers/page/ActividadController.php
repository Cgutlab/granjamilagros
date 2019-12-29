<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actividad;
use App\Metadato;
use App\Slider;
use App\Texto;

class ActividadController extends Controller
{
    public function index()
    {
    	$sliders = Slider::where('section', 'actividad')->orderBy('order', 'ASC')->get();
    	$actividades = Actividad::orderBy('order', 'ASC')->get();
    	$metadato = Metadato::where('section', 'actividad')->first();
        $texto = Texto::where('section', 'actividad')->first();
    	$active = 'actividad';
    	return view('page.actividad',compact('sliders', 'metadato', 'active', 'texto', 'actividades'));
    }
}
