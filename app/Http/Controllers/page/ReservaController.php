<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\mail\Reserva;
use App\Metadato;
use App\Slider;
use App\Texto;
use App\Dato;

class ReservaController extends Controller
{
    public function index()
    {
    	$sliders = Slider::where('section', 'reserva')->orderBy('order', 'ASC')->get();
    	$metadato = Metadato::where('section','reserva')->first();
      	$active = 'reserva';
    	return view('page.reserva', compact('metadato', 'active', 'sliders'));
    }

    public function enviarMail(Request $request) {
      $dato = Dato::where('type', 'correo')->first();
      $nombre = $request->input('nombre');
      $email = $request->input('email');
      $telefono = $request->input('telefono');
      $fecha = $request->input('fecha');
      $adulto = $request->input('adulto');
      $menor = $request->input('menor');
      Mail::to($dato->description)->send(new Reserva($nombre, $email, $telefono, $fecha, $adulto, $menor));

      if (count(Mail::failures()) > 0) {

          $success = 'Ha ocurrido un error al enviar el correo';

      }else{

          $success = 'Correo enviado correctamente';

      }

      return back()->with('success', $success);

    }
}
