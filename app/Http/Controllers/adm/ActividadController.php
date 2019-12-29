<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Actividad;
use App\Slider;
use App\Texto;
use Redirect;

class ActividadController extends Controller
{
    public function crearSlider(){
        $usuario = Auth::user();
        $sliders_seccion = 'active';
        $actividad_slider_create = 'active';
        return view('adm.actividad.crearSlider',  compact('usuario', 'sliders_seccion', 'actividad_slider_create'));
    }

    public function editarSliders(){
        $usuario = Auth::user();
        $sliders = Slider::where('section', 'actividad')->orderBy('order','ASC')->get();
        $sliders_seccion = 'active';
        $actividad_slider_edit = 'active';

        return view('adm.actividad.editarSliders',  compact('usuario', 'sliders', 'sliders_seccion', 'actividad_slider_edit'));
    }

    public function editarSlider($id){
        $usuario = Auth::user();
        $slider = Slider::find($id);
        $sliders_seccion = 'active';
        $actividad_slider_edit = 'active';

        return view('adm.actividad.editarSlider',  compact('usuario', 'slider', 'sliders_seccion', 'actividad_slider_edit'));
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

    public function create()
    {
        $usuario = Auth::user();
        $actividades_seccion = 'active';
        $actividades_create = 'active';
        return view('adm.actividad.crearActividad', compact('usuario','actividades_seccion','actividades_create'));
    }

    public function store(Request $request)
    {

        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'actividad');
        $file_save ? $datos['image'] = $file_save : false;

        Actividad::create($datos);
        $success = 'Actividad creada correctamente';
        return Redirect::to('adm/actividad/show')->with('success', $success);
    }

    public function show()
    {
        $actividades = Actividad::orderBy('order','ASC')->get();
        $usuario = Auth::user();
        $actividades_seccion = 'active';
        $actividades_edit = 'active';
        return view('adm.actividad.editarActividades', compact('actividades','usuario','actividades_seccion','actividades_edit'));
    }

    public function edit($id)
    {
        $actividad = Actividad::find($id);
        $usuario = Auth::user();
        $actividades_seccion = 'active';
        $actividades_edit = 'active';
        return view('adm.actividad.editarActividad', compact('actividad','usuario','actividades_seccion','actividades_edit'));
    }

    public function update(Request $request, $id)
    {
    	$actividad = Actividad::find($id);
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'actividad');
        $file_save ? $datos['image'] = $file_save : false;

        $actividad->fill($datos);
        $actividad->save();
        $success = 'Actividad editada correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $actividad = Actividad::find($id);
        $actividad->delete();
        $success = 'Actividad eliminada correctamente';
        return Redirect::to('adm/actividad/show')->with('success', $success);
    }

    public function editContenido(){
        $usuario = Auth::user();
        $texto = Texto::where('section', 'actividad')->first();
        $actividad_seccion = 'active';
        $actividad_contenido_edit = 'active';

        return view('adm.actividad.editarContenido',  compact('usuario', 'texto', 'actividad_contenido_edit', 'actividad_seccion'));
    }

    public function updateContenido(Request $request, $id){
        $datos = $request->all();
        $texto = Texto::where('section', 'actividad')->first();
        $texto->fill($datos);
        $texto->save();
        $success = 'Texto editado correctamente';
        return back()->with('success', $success);
    }
}
