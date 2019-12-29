<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Home ~ Granja Milagros</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
	@include('page.template.header')
	<main class="home">
	@include('page.template.slider')
		<div class="container width85 center-align">
			<div style="background-color: #894356; padding: 1rem; border-radius: 0 0 5px 5px;">
				<div class="blanco fs35 lighter" style="line-height: 1.2;   letter-spacing: 1px;
">Reservá Online</div>
				<div class="blanco fs35 mb20 semibold" style="line-height: 1.2; letter-spacing: 2px;">Mejor Precio Garantizado</div>
					<div class="container">
						<div class="row">
							<form action="{{route('reserva')}}">
							<div class="col s12 l4 relativo input-field no-padding">
								<input type="text" class="datepicker index-form" name="fecha" placeholder="Fecha" style="background-color: white; border: 1px solid #DDD; padding-left: 1rem; font-weight: 300;" required>
								<span class="absoluto" style="top: 0.7rem; right: 5px;"><i class="material-icons">date_range</i></span>
							</div>
							<div class="col s12 l4 input-field">
								<input type="number" class="index-form" name="adulto" id="adulto" placeholder="Cantidad de Adultos" min="1" class="validate" style="background-color: #FFF;border: 1px solid #DDD;padding-left: 1rem;padding-right: 1rem;font-weight: 300; color: #8A8A8A;" required>
							</div>
							<div class="col s12 l4 input-field no-padding">
					    		<input type="number" class="index-form" name="menor" id="menor" placeholder="Cantidad de Niños" min="1" class="validate" style="background-color: #FFF;border: 1px solid #DDD;padding-left: 1rem;font-weight: 300; color: #8A8A8A;" required>
							</div>
							<style>
								input[type=number]::-webkit-inner-spin-button, 
								input[type=number]::-webkit-outer-spin-button { 
								  -webkit-appearance: none; 
								  margin: 0; 
								}
							</style>
						</div>
					</div>
				<div class="col m12 center-align">
					<button class="btn waves-effect waves-dark z-depth-0 blanco semibold" type="submit" name="action" style="background-color:#894356; border: 1px solid #FFF; letter-spacing:2px;">Reservar</button>
				</div>
				</form>
			</div>
						{!! Form::close() !!}
			<div class="gris container raleway mt50 mb50" style="line-height: 1.5; font-weight:400; font-size:1.2rem">{!! $texto->text !!}</div>

			<div class="row mb20" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; padding: 0 40px;">
				@foreach($destacados as $destacado)
					@if($destacado->id == 1)
						<div class="col l8 m12 s12 mb20" style="padding:0.4rem;">
							<a href="{{ route($destacado->route) }}">
								<div class="relativo destacado" style="max-height: 270px; overflow: hidden;">
									<img class="responsive-img" src="{{ asset('images/destacados/'.$destacado->image) }}" style="float:left;">
									<div class="absoluto semibold blanco destacado-img">{{ $destacado->title }}</div>
								</div>
							</a>
						</div>
					@elseif( $destacado->id == 2)
						<div class="col l4 m6 s16 mb20" style="padding:0.4rem;">
							<a href="{{ route($destacado->route) }}">
								<div class="relativo destacado" style="max-height: 270px; overflow: hidden;">
									<img class="responsive-img" src="{{ asset('images/destacados/'.$destacado->image) }}" style="float:right;">
									<div class="absoluto semibold blanco destacado-img">{{ $destacado->title }}</div>
								</div>
							</a>
						</div>
					@elseif( $destacado->id == 3)
						<div class="col l4 m6 s16 mb20" style="padding:0.4rem;">
							<a href="{{ route($destacado->route) }}">
								<div class="relativo destacado" style="max-height: 270px; overflow: hidden;">
									<img class="responsive-img" src="{{ asset('images/destacados/'.$destacado->image) }}" style="float:left;">
									<div class="absoluto semibold blanco destacado-img">{{ $destacado->title }}</div>
								</div>
							</a>
						</div>
					@elseif( $destacado->id == 4)
						<div class="col l8 m12 s12 mb20" style="padding:0.4rem;">
							<a href="{{ route($destacado->route) }}">
								<div class="relativo destacado" style="max-height: 270px; overflow: hidden;">
									<img class="responsive-img " src="{{ asset('images/destacados/'.$destacado->image) }}" style="float:right;">
									<div style="left:100px;" class="absoluto semibold blanco destacado-img">{{ $destacado->title }}</div>
								</div>
							</a>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</main>
	@include('page.template.footer')
	@include('page.template.scripts')
</body>
</html>