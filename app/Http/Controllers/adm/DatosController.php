<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Dato;
use Redirect;

class DatosController extends Controller
{

    public function index()
    {
        $datos = Dato::orderBy('order','ASC')->get();
        $usuario = Auth::user();
        $datos_seccion = 'active';
        $datos_edit = 'active';

        return view('adm.datos.editarDatos', compact('datos', 'usuario', 'datos_seccion', 'datos_edit'));
    }

    public function edit($id)
    {
        $dato = Dato::find($id);
        $usuario = Auth::user();
        $datos_seccion = 'active';
        $datos_edit = 'active';

        return view('adm.datos.editarDato', compact('dato', 'usuario', 'datos_seccion', 'datos_edit'));
    }

    public function update(Request $request, $id)
    {
        $dato = Dato::find($id);
        $dato->fill($request->all());
        $dato->save();
        $success = 'Dato editado correctamente';
        return Redirect::to('adm/datos')->with('success', $success);
    }
}


