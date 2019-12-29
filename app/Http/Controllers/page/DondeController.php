<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadato;
use App\Slider;
use App\Texto;

class DondeController extends Controller
{
    public function index()
    {
    	$sliders = Slider::where('section', 'donde')->orderBy('order', 'ASC')->get();
    	$metadato = Metadato::where('section', 'ubicacion')->first();
    	$active = 'donde';
    	return view('page.donde',compact('sliders', 'metadato', 'active'));
    }
}
