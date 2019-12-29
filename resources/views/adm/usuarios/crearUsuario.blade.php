@extends('adm.main')

@section('titulo', 'Crear usuarios')

@section('cuerpo')

<main>
	<div class="container">
	    @if(count($errors) > 0)
		<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
	  		<ul>
	  			@foreach($errors->all() as $error)
	  				<li>{!!$error!!}</li>
	  			@endforeach
	  		</ul>
	  	</div>
		@endif
		@if(session('success'))
		<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
			{{ session('success') }}
		</div>
		@endif

		<div class="row">
			{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST', 'class' => 'col s12'])!!}
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('name', 'Nombre')!!}
						{!!Form::text('name',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('user' ,'Usuario')!!}
						{!!Form::text('user',null,['class'=>'validate', 'required'])!!}
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						{!!Form::password('password',['class'=>'validate', 'required'])!!}
						{!!Form::label('Contraseña')!!}
					</div>
				</div>
				{!!Form::submit('crear', ['class'=>'waves-effect waves-light btn right btn-submit'])!!}
			{!!Form::close()!!}
		</div>


@endsection