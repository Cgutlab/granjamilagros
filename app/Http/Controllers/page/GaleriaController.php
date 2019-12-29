<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categoria;
use App\Metadato;
use App\Galeria;
use App\Slider;

class GaleriaController extends Controller
{
    public function index()
    {
    	$sliders = Slider::where('section', 'galeria')->orderBy('order', 'ASC')->get();
    	$categorias = Categoria::orderBy('order', 'ASC')->get();
    	$galerias = Galeria::orderBy('order', 'ASC')->get();
    	$metadato = Metadato::where('section', 'galeria')->first();
    	$active = 'galeria';
    	return view('page.galeria',compact('sliders', 'metadato', 'active', 'categorias', 'galerias'));
    }
}
