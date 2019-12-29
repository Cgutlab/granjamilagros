<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadato;
use Redirect;

class MetadatosController extends Controller
{

    public function index()
    {
        $metadatos = Metadato::orderBy('order','ASC')->get();
        $usuario = Auth::user();
        $metadatos_seccion = 'active';
        $metadatos_edit = 'active';
        return view('adm.metadatos.editarMetadatos', compact('metadatos','usuario','metadatos_seccion','metadatos_edit'));
    }

    public function edit($id)
    {
        $metadato = Metadato::find($id);
        $usuario = Auth::user();
        $metadatos_seccion = 'active';
        $metadatos_edit = 'active';
        return view('adm.metadatos.editarMetadato', compact('metadato','usuario','metadatos_seccion','metadatos_edit'));
    }

    public function update(Request $request, $id)
    {
        $metadato = Metadato::find($id);
        $metadato->fill($request->all());
        $metadato->save();
        $success = 'Metadato editado correctamente';
        return Redirect::to('adm/metadatos')->with('success', $success);
    }
}
