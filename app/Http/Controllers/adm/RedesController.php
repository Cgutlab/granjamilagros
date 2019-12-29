<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use Laracasts\Flash\Flash;
use Redirect;
use App\Red;

class RedesController extends Controller
{

    public function index()
    {
        $redes = Red::orderBy('order','ASC')->paginate(8);
        $usuario = Auth::user();
        $redes_seccion = 'active';
        $redes_edit = 'active';
        return view('adm.redes.editarRedesSociales', compact('redes','usuario','redes_seccion','redes_edit'));
    }

    public function create()
    {
        $usuario = Auth::user();
        $redes_seccion = 'active';
        $redes_create = 'active';
        return view('adm.redes.crearRedSocial', compact('redes','usuario','redes_seccion','redes_create'));
    }

    public function store(Request $request)
    {

        $datos = $request->all();
        Red::create($datos);
        $success = 'Red social creada correctamente';
        return Redirect::to('adm/redes/create')->with('success', $success);
    }

    public function edit($id)
    {
        $red = Red::find($id);
        $usuario = Auth::user();
        $redes_seccion = 'active';
        $redes_edit = 'active';
        return view('adm.redes.editarRedSocial', compact('red','usuario','redes_seccion','redes_edit'));
    }

    public function update(Request $request, $id)
    {
    	$red = Red::find($id);
        $datos = $request->all();
        $red->fill($datos);
        $red->save();
        $success = 'Red social editada correctamente';
        return Redirect::to('adm/redes')->with('success', $success);
    }

    public function destroy($id)
    {
        $red = Red::find($id);
        $red->delete();
        $success = 'Red social eliminada correctamente';
        return Redirect::to('adm/redes')->with('success', $success);
    }
}
