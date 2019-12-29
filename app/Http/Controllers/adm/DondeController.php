<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Slider;
use Redirect;

class DondeController extends Controller
{
    public function crearSlider(){
        $usuario = Auth::user();
        $sliders_seccion = 'active';
        $donde_slider_create = 'active';
        return view('adm.donde.crearSlider',  compact('usuario', 'sliders_seccion', 'donde_slider_create'));
    }

    public function editarSliders(){
        $usuario = Auth::user();
        $sliders = Slider::where('section', 'donde')->orderBy('order','ASC')->get();
        $sliders_seccion = 'active';
        $donde_slider_edit = 'active';

        return view('adm.donde.editarSliders',  compact('usuario', 'sliders', 'sliders_seccion', 'donde_slider_edit'));
    }

    public function editarSlider($id){
        $usuario = Auth::user();
        $slider = Slider::find($id);
        $sliders_seccion = 'active';
        $donde_slider_edit = 'active';

        return view('adm.donde.editarSlider',  compact('usuario', 'slider', 'sliders_seccion', 'donde_slider_edit'));
    }

    public function updateSlider(Request $request, $id)
    {
        $slider = Slider::find($id);
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'sliders');
        $file_save ? $datos['image'] = $file_save : false;
       
        $slider->fill($datos);
        $slider->save();
        $success = 'Slider editado correctamente';
        return back()->with('success', $success);
    }

}
