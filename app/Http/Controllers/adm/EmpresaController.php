<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Empresa;
use App\Slider;
use Redirect;

class EmpresaController extends Controller
{
    public function editarContenido(){
        $usuario = Auth::user();
        $empresa = Empresa::find(1);
        $empresa_seccion = 'active';
        $empresa_contenido_edit = 'active';

        return view('adm.empresa.editarContenido',  compact('usuario', 'empresa', 'empresa_contenido_edit', 'empresa_seccion'));
    }

    public function updateContenido(Request $request, $id){
        $datos = $request->all();
        $empresa = Empresa::find($id);

        $file_save = Helpers::saveImage($request->file('image'), 'empresa');
        $file_save ? $datos['image'] = $file_save : false;

        $empresa->fill($datos);
        $empresa->save();
        $success = 'Empresa editada correctamente';
        return back()->with('success', $success);
    }

    public function crearSlider(){
        $usuario = Auth::user();
        $sliders_seccion = 'active';
        $empresa_slider_create = 'active';
        return view('adm.empresa.crearSlider',  compact('usuario', 'sliders_seccion', 'empresa_slider_create'));
    }

    public function editarSliders(){
        $usuario = Auth::user();
        $sliders = Slider::where('section', 'empresa')->orderBy('order','ASC')->get();
        $sliders_seccion = 'active';
        $empresa_slider_edit = 'active';

        return view('adm.empresa.editarSliders',  compact('usuario', 'sliders', 'sliders_seccion', 'empresa_slider_edit'));
    }

    public function editarSlider($id){
        $usuario = Auth::user();
        $slider = Slider::find($id);
        $sliders_seccion = 'active';
        $empresa_slider_edit = 'active';

        return view('adm.empresa.editarSlider',  compact('usuario', 'slider', 'sliders_seccion', 'empresa_slider_edit'));
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
