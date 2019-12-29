<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Texto;
use Redirect;

class ServicioController extends Controller
{
	public function crearSlider(){
        $usuario = Auth::user();
        $sliders_seccion = 'active';
        $servicio_slider_create = 'active';
        return view('adm.servicio.crearSlider',  compact('usuario', 'sliders_seccion', 'servicio_slider_create'));
    }

    public function editarSliders(){
        $usuario = Auth::user();
        $sliders = Slider::where('section', 'servicio')->orderBy('order','ASC')->get();
        $sliders_seccion = 'active';
        $servicio_slider_edit = 'active';

        return view('adm.servicio.editarSliders',  compact('usuario', 'sliders', 'sliders_seccion', 'servicio_slider_edit'));
    }

    public function editarSlider($id){
        $usuario = Auth::user();
        $slider = Slider::find($id);
        $sliders_seccion = 'active';
        $servicio_slider_edit = 'active';

        return view('adm.servicio.editarSlider',  compact('usuario', 'slider', 'sliders_seccion', 'servicio_slider_edit'));
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

    public function edit(){
        $usuario = Auth::user();
        $texto = Texto::where('section', 'servicio')->first();
        $servicio_seccion = 'active';
        $servicio_contenido_edit = 'active';

        return view('adm.servicio.editarContenido',  compact('usuario', 'texto', 'servicio_contenido_edit', 'servicio_seccion'));
    }

    public function update(Request $request, $id){
        $datos = $request->all();
        $texto = Texto::where('section', 'servicio')->first();
        $texto->fill($datos);
        $texto->save();
        $success = 'Texto editado correctamente';
        return back()->with('success', $success);
    }
}
