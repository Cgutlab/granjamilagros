<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use App\Categoria;
use App\Galeria;
use App\Slider;
use Redirect;

class GaleriaController extends Controller
{
    public function crearSlider(){
        $usuario = Auth::user();
        $sliders_seccion = 'active';
        $galeria_slider_create = 'active';
        return view('adm.galeria.crearSlider',  compact('usuario', 'sliders_seccion', 'galeria_slider_create'));
    }

    public function editarSliders(){
        $usuario = Auth::user();
        $sliders = Slider::where('section', 'galeria')->orderBy('order','ASC')->get();
        $sliders_seccion = 'active';
        $galeria_slider_edit = 'active';

        return view('adm.galeria.editarSliders',  compact('usuario', 'sliders', 'sliders_seccion', 'galeria_slider_edit'));
    }

    public function editarSlider($id){
        $usuario = Auth::user();
        $slider = Slider::find($id);
        $sliders_seccion = 'active';
        $galeria_slider_edit = 'active';

        return view('adm.galeria.editarSlider',  compact('usuario', 'slider', 'sliders_seccion', 'galeria_slider_edit'));
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

    public function createCategoria()
    {
        $usuario = Auth::user();
        $categorias_seccion = 'active';
        $categorias_create = 'active';
        return view('adm.galeria.crearCategoria', compact('usuario', 'categorias_seccion', 'categorias_create'));
    }

    public function storeCategoria(Request $request)
    {

        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'categorias');
        $file_save ? $datos['image'] = $file_save : false;

        $categoria = Categoria::create($datos);
        $success = 'categoria creada correctamente';
        return Redirect::to('adm/galeria/categoria/show')->with('success', $success);
    }

    public function showCategoria()
    {
        $categorias = Categoria::orderBy('order','ASC')->get();
        $usuario = Auth::user();
        $categorias_seccion = 'active';
        $categorias_edit = 'active';
        return view('adm.galeria.editarCategorias', compact('categorias','usuario','categorias_seccion','categorias_edit'));
    }

    public function editCategoria($id)
    {
        $categoria = Categoria::find($id);
        $usuario = Auth::user();
        $categorias_seccion = 'active';
        $categorias_edit = 'active';
        return view('adm.galeria.editarCategoria', compact('categoria','usuario','categorias_seccion','categorias_edit'));
    }

    public function updateCategoria(Request $request, $id)
    {
    	$categoria = Categoria::find($id);
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'categorias');
        $file_save ? $datos['image'] = $file_save : false;
    
        $categoria->fill($datos);
        $categoria->save();
        $success = 'Categoría editada correctamente';
        return back()->with('success', $success);
    }

    public function destroyCategoria($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        $success = 'Categoría eliminada correctamente';
        return Redirect::to('adm/galeria/categoria/show')->with('success', $success);
    }

    public function create()
    {
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_create = 'active';
        $categorias = Categoria::orderBy('order','ASC')->get();
        return view('adm.galeria.crearGaleria', compact('usuario', 'galerias_seccion', 'galerias_create', 'categorias', 'galerias', 'galerias'));
    }

    public function store(Request $request)
    {

        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'galerias');
        $file_save ? $datos['image'] = $file_save : false;

        $galeria = Galeria::create($datos);         
        $success = 'Galería creada correctamente';
        return Redirect::to('adm/galeria/create')->with('success', $success);
    }

    public function select()
    {
        $usuario = Auth::user();
        $categorias_seccion = 'active';
        $categorias_edit = 'active';
        $categorias = Categoria::orderBy('order','ASC')->get();
        return view('adm.galeria.selectCategorias', compact('categorias', 'usuario', 'categorias_seccion', 'categorias_edit'));
    }

    public function show(Request $request)
    {
        $id_category = $request->id_category;
        $usuario = Auth::user();
        $categorias_seccion = 'active';
        $categorias_edit = 'active';
        $categoria = Categoria::find($request->id_category);
        $galerias = Galeria::where('id_category', $request->id_category)->orderBy('order','ASC')->get();
        return view('adm.galeria.editarGalerias', compact('categoria','galerias', 'usuario', 'categorias_seccion', 'categorias_edit', 'id_category'));
    }

    public function edit($id)
    {
        $usuario = Auth::user();
        $categorias_seccion = 'active';
        $categorias_edit = 'active';
        $galeria = Galeria::find($id);
        $categorias = Categoria::orderBy('order','ASC')->get();
        return view('adm.galeria.editarGaleria', compact('galeria', 'usuario', 'categorias_seccion', 'categorias_edit', 'categorias', 'galerias'));
    }

    public function update(Request $request, $id)
    {
    	$galeria = Galeria::find($id);
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('image'), 'galerias');
        $file_save ? $datos['image'] = $file_save : false;
        
        $galeria->fill($datos);
        $galeria->save();
        $success = 'Galería editada correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id, Request $request)
    {
        
        $galeria = Galeria::find($id);
        $galeria->delete();
        $success = 'Galería eliminada correctamente';
        return back()->with(['success' => $success]);
    }

}
