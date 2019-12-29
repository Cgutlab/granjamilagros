<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Reservas ~ Granja Milagros</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/reserva.css') }}">
</head>
<body>
	@include('page.template.header')
	<main class="reserva">
		@include('page.template.slider')
		<div class="container width85 mb40 mt40 center-align">
			<div class="vinotinto fs35 mb20 semibold" style="line-height: 1.2; letter-spacing: 2px;">Reservas</div>
			@if(session('error'))
				<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
					{{ session('error') }}
				</div>
			@endif
			@if(session('success'))
				<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
					{{ session('success') }}
				</div>
			@endif 
			<div class="container">
				<div class="col s12 m8">
					<div class="row">
						<form method="POST" action="reserva/enviar">
						@csrf
						<div class="input-field col s12">
							{!!Form::text('nombre',null,['class'=>'validate', 'placeholder' => 'Nombre', 'required'])!!}
						</div>
						<div class="input-field col m6 s12">
							{!!Form::email('email',null,['class'=>'validate', 'placeholder' => 'Correo electrónico' ,'required'])!!}
						</div>                 
						<div class="input-field col m6 s12">
							{!!Form::text('telefono',null,['class'=>'validate', 'placeholder' => 'Teléfono' ,'required'])!!}
						</div>
					</div>
				</div>
			</div>
			<div class="mt30" style="background-color: #FF9865; padding: 2rem; border-radius: 5px;">
				<div class="vinotinto fs35 mb20" style="line-height: 1.2;">Reservá Online</div>
					<div class="container">
						<div class="row">
							<div class="col s12 l4 relativo input-field no-padding">
								<input type="text" class="datepicker" value="{{request()->fecha}}" name="fecha" placeholder="Fecha" style="background-color: white; border: 1px solid #DDD; padding-left: 1rem;" required>
								<span class="absoluto" style="top: 0.7rem; right: 5px;"><i class="material-icons">date_range</i></span>
							</div>
							<div class="col s12 l4 input-field">
								<input type="number" name="adulto" id="adulto" placeholder="Cantidad de adultos" min="1" class="validate" value="{{request()->adulto}}" style="background-color: #FFF;border: 1px solid #DDD;padding-left: 1rem;font-weight: bold; color: #8A8A8A; padding-right:0.5rem;" required>
							</div>
							<div class="col s12 l4 input-field no-padding">
					    		<input type="number" name="menor" id="menor" placeholder="Cantidad de niños" min="1" class="validate" style="background-color: #FFF;border: 1px solid #DDD;padding-left: 1rem;font-weight: bold; color: #8A8A8A; padding-right:0.5rem;" value="{{request()->menor}}" required>
							</div>
						</div>
					</div>
				<div class="col m12 center-align">
					<button class="btn waves-effect waves-dark z-depth-0 mt20 blanco semibold" type="submit" name="action" style="background-color:#894356; border:1px solid #FFF;">Reservar</button>
				</div>
			</div>
		</form>
	</div>
</main>
	@include('page.template.footer')
	@include('page.template.scripts')

</body>
</html>