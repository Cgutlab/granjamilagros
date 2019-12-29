<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
	Route::post('contacto/enviar', ['uses' => 'page\ContactoController@enviarMail', 'as' => 'contacto.enviar']);
	//Route::post('reserva/enviar', ['uses' => 'page\ReservaController@enviarMail', 'as' => 'reserva.enviar']);
	Route::post('reserva/enviar', 'page\ReservaController@enviarMail');

	Route::get('/', function () {
    	return view('page.home');
	});

	Route::get('/', ['uses' => 'page\HomeController@index', 'as' => 'home']);
	Route::get('servicios', ['uses' => 'page\ServicioController@index', 'as' => 'servicio']);
	Route::get('actividades', ['uses' => 'page\ActividadController@index', 'as' => 'actividad']);
	Route::get('galeria', ['uses' => 'page\GaleriaController@index', 'as' => 'galeria']);
	Route::get('reservas', ['uses' => 'page\ReservaController@index', 'as' => 'reserva']);
	Route::get('donde+estamos', ['uses' => 'page\DondeController@index', 'as' => 'donde']);
	Route::get('contacto', ['uses' => 'page\ContactoController@index', 'as' => 'contacto']);


	Route::group(['prefix' => 'adm'], function() {
			Route::resource('login', 'adm\LoginController');
			Route::get('logout', ['uses' => 'adm\LoginController@logout' , 'as' => 'adm.logout']);
		});

		Route::group(['prefix' => 'adm', 'middleware' => 'guest'], function() {

			Route::get('/', function() {
				$usuario = Auth::user();
				return view('adm.index', compact('usuario'));
			});

			Route::resource('metadatos', 'adm\MetadatosController');
			Route::resource('usuarios', 'adm\UserController');
			Route::resource('slider', 'adm\SliderController');
			Route::resource('datos', 'adm\DatosController');
			Route::resource('logos', 'adm\LogosController');
			Route::resource('redes', 'adm\RedesController');

			Route::group(['prefix' => 'home', 'as' => 'home'], function() {		
				Route::group(['prefix' => 'slider'], function() {
					Route::get('create',  ['uses' => 'adm\HomeController@crearSlider', 'as' => '.slider.create']);
					Route::get('show',  ['uses' => 'adm\HomeController@editarSliders', 'as' => '.slider.show']);
					Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarSlider', 'as' => '.slider.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\HomeController@updateSlider', 'as' => '.slider.update']);
				});

				Route::group(['prefix' => 'texto', 'as' => 'texto'], function() {
					Route::get('edit', ['uses' => 'adm\HomeController@edit', 'as' => '.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\HomeController@update', 'as' => '.update']);
				});

				Route::group(['prefix' => 'destacado', 'as' => 'destacado'], function() {
					Route::get('show',  ['uses' => 'adm\HomeController@editarDestacados', 'as' => '.show']);
					Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarDestacado', 'as' => '.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\HomeController@updateDestacado', 'as' => '.update']);
				});
			});

			Route::group(['prefix' => 'servicio', 'as' => 'servicio'], function() {
				Route::get('edit', ['uses' => 'adm\ServicioController@edit', 'as' => '.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\ServicioController@update', 'as' => '.update']);

				Route::group(['prefix' => 'slider'], function() {
					Route::get('create',  ['uses' => 'adm\ServicioController@crearSlider', 'as' => '.slider.create']);
					Route::get('show',  ['uses' => 'adm\ServicioController@editarSliders', 'as' => '.slider.show']);
					Route::get('edit/{id}', ['uses' => 'adm\ServicioController@editarSlider', 'as' => '.slider.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\ServicioController@updateSlider', 'as' => '.slider.update']);
				});
			});

			Route::group(['prefix' => 'actividad', 'as' => 'actividad'], function() {
				Route::get('create',  ['uses' => 'adm\ActividadController@create', 'as' => '.create']);
				Route::post('store',  ['uses' => 'adm\ActividadController@store', 'as' => '.store']);
				Route::get('show',  ['uses' => 'adm\ActividadController@show', 'as' => '.show']);
				Route::get('edit/{id}', ['uses' => 'adm\ActividadController@edit', 'as' => '.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\ActividadController@update', 'as' => '.update']);
				Route::delete('destroy/{id}',  ['uses' => 'adm\ActividadController@destroy', 'as' => '.destroy']);

				Route::group(['prefix' => 'contenido', 'as' => 'contenido'], function() {
					Route::get('edit', ['uses' => 'adm\ActividadController@editContenido', 'as' => '.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\ActividadController@updateContenido', 'as' => '.update']);
				});

				Route::group(['prefix' => 'slider'], function() {
					Route::get('create',  ['uses' => 'adm\ActividadController@crearSlider', 'as' => '.slider.create']);
					Route::get('show',  ['uses' => 'adm\ActividadController@editarSliders', 'as' => '.slider.show']);
					Route::get('edit/{id}', ['uses' => 'adm\ActividadController@editarSlider', 'as' => '.slider.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\ActividadController@updateSlider', 'as' => '.slider.update']);
				});
			});

			Route::group(['prefix' => 'galeria', 'as' => 'galeria'], function() {
				Route::get('create',  ['uses' => 'adm\GaleriaController@create', 'as' => '.create']);
				Route::post('store',  ['uses' => 'adm\GaleriaController@store', 'as' => '.store']);
				Route::get('select',  ['uses' => 'adm\GaleriaController@select', 'as' => '.select']);
				Route::post('show',  ['uses' => 'adm\GaleriaController@show', 'as' => '.show']);
				Route::get('edit/{id}', ['uses' => 'adm\GaleriaController@edit', 'as' => '.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\GaleriaController@update', 'as' => '.update']);
				Route::delete('destroy/{id}',  ['uses' => 'adm\GaleriaController@destroy', 'as' => '.destroy']);

				Route::group(['prefix' => 'categoria'], function() {
					Route::get('create',  ['uses' => 'adm\GaleriaController@createCategoria', 'as' => '.categoria.create']);
					Route::post('store',  ['uses' => 'adm\GaleriaController@storeCategoria', 'as' => '.categoria.store']);
					Route::get('show',  ['uses' => 'adm\GaleriaController@showCategoria', 'as' => '.categoria.show']);
					Route::get('edit/{id}', ['uses' => 'adm\GaleriaController@editCategoria', 'as' => '.categoria.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\GaleriaController@updateCategoria', 'as' => '.categoria.update']);
					Route::delete('destroy/{id}',  ['uses' => 'adm\GaleriaController@destroyCategoria', 'as' => '.categoria.destroy']);
				});

				Route::group(['prefix' => 'slider'], function() {
					Route::get('create',  ['uses' => 'adm\GaleriaController@crearSlider', 'as' => '.slider.create']);
					Route::get('show',  ['uses' => 'adm\GaleriaController@editarSliders', 'as' => '.slider.show']);
					Route::get('edit/{id}', ['uses' => 'adm\GaleriaController@editarSlider', 'as' => '.slider.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\GaleriaController@updateSlider', 'as' => '.slider.update']);
				});
			});

			Route::group(['prefix' => 'reserva', 'as' => 'reserva'], function() {
				Route::group(['prefix' => 'slider'], function() {
					Route::get('create',  ['uses' => 'adm\ReservaController@crearSlider', 'as' => '.slider.create']);
					Route::get('show',  ['uses' => 'adm\ReservaController@editarSliders', 'as' => '.slider.show']);
					Route::get('edit/{id}', ['uses' => 'adm\ReservaController@editarSlider', 'as' => '.slider.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\ReservaController@updateSlider', 'as' => '.slider.update']);
				});
			});

			Route::group(['prefix' => 'donde', 'as' => 'donde'], function() {
				Route::group(['prefix' => 'slider'], function() {
					Route::get('create',  ['uses' => 'adm\DondeController@crearSlider', 'as' => '.slider.create']);
					Route::get('show',  ['uses' => 'adm\DondeController@editarSliders', 'as' => '.slider.show']);
					Route::get('edit/{id}', ['uses' => 'adm\DondeController@editarSlider', 'as' => '.slider.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\DondeController@updateSlider', 'as' => '.slider.update']);
				});
			});

			Route::group(['prefix' => 'contacto', 'as' => 'contacto'], function() {
					Route::get('edit', ['uses' => 'adm\ContactoController@edit', 'as' => '.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\ContactoController@update', 'as' => '.update']);

					Route::group(['prefix' => 'slider'], function() {
					Route::get('create',  ['uses' => 'adm\ContactoController@crearSlider', 'as' => '.slider.create']);
					Route::get('show',  ['uses' => 'adm\ContactoController@editarSliders', 'as' => '.slider.show']);
					Route::get('edit/{id}', ['uses' => 'adm\ContactoController@editarSlider', 'as' => '.slider.edit']);
					Route::put('update/{id}',  ['uses' => 'adm\ContactoController@updateSlider', 'as' => '.slider.update']);
				});
			});
		});