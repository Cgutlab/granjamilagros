<?php

namespace App\Mail;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;

class Reserva extends Mailable

{
    use Queueable, SerializesModels;

    public function __construct($nombre, $email, $telefono, $fecha, $adulto, $menor)

    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->fecha = $fecha;
        $this->adulto = $adulto;
        $this->menor = $menor;
    }

    public function build()

    {
        return $this->view('page.mail.reserva')->with([
                        'nombre' => $this->nombre,
                        'email' => $this->email,
                        'telefono' => $this->telefono,
                        'fecha' => $this->fecha,
                        'adulto' => $this->adulto,    
                        'menor' => $this->menor    
                        ]);

    }

}

