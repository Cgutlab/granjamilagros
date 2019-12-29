<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Dato;
use App\Logo;
use App\Red;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {    
        Schema::defaultStringLength(191);        
        $fredes = Red::where('section','footer')->orderBy('order','ASC')->get();
        $correo = Dato::where('type', 'correo')->first();
        $logoh = Logo::where('section','header')->first();
        $logof = Logo::where('section','footer')->first();
        $telefono = Dato::where('type', 'telefono')->first();
        $telefono2 = Dato::where('type', 'telefono2')->first();
        $telefono3 = Dato::where('type', 'telefono3')->first();
        $ubicacion = Dato::where('type', 'ubicacion')->first();
        $mapa = Dato::where('type', 'mapa')->first();

        view()->share(compact('correo', 'ubicacion', 'telefono', 'telefono2', 'telefono3', 'mapa', 'logof', 'logoh', 'fredes', 'footer'));
    }

    public function register()
    {
        //
    }
}
