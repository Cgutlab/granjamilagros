<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\Texto;
use Redirect;

class ContactoController extends Controller
{
     public function crearSlider(){
        $usuario = Auth::user();
        $sliders_seccion = 'active';
        $contacto_slider_create = 'active';
        return view('adm.contacto.crearSlider',  compact('usuario', 'sliders_seccion', 'contacto_slider_create'));
    }

    public function editarSliders(){
        $usuario = Auth::user();
        $sliders = Slider::where('section', 'contacto')->orderBy('order','ASC')->get();
        $sliders_seccion = 'active';
        $contacto_slider_edit = 'active';

        return view('adm.contacto.editarSliders',  compact('usuario', 'sliders', 'sliders_seccion', 'contacto_slider_edit'));
    }

    public function editarSlider($id){
        $usuario = Auth::user();
        $slider = Slider::find($id);
        $sliders_seccion = 'active';
        $contacto_slider_edit = 'active';

        return view('adm.contacto.editarSlider',  compact('usuario', 'slider', 'sliders_seccion', 'contacto_slider_edit'));
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
        $termino = Texto::where('section', 'contacto')->first();
        $contactos_seccion = 'active';
        $contactos_edit = 'active';

        return view('adm.contacto.editarContenido',  compact('usuario', 'termino', 'seccion', 'contactos_seccion', 'contactos_edit'));
    }

    public function update(Request $request, $id){
        $datos = $request->all();
        $termino = Texto::where('section', 'contacto')->first();
        $termino->fill($datos);
        $termino->save();
        $success = 'Términos y condiciones editados correctamente';
        return back()->with('success', $success);
    }

}
