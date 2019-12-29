@extends('adm.main')

@section('titulo', 'Crear red social')

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
            <div class="col s12">
				{!!Form::open(['route'=>'redes.store', 'method'=>'POST', 'files' => true])!!}
					<div class="row">
						<div class="input-field col s6">
							{!!Form::label('name','Nombre')!!}
							{!!Form::text('name',null,['class'=>'validate', 'required'])!!}
						</div>
						<div class="input-field col s6">
							{!!Form::label('route','Enlace')!!}
							{!!Form::text('route',null,['class'=>'validate', 'required'])!!}
						</div>
						<div class="input-field col s6">
							{!!Form::label('icon','Icono')!!}
							{!!Form::text('icon',null,['class'=>'validate', 'required'])!!}
						</div>
						<div class="input-field col s6">
							{!!Form::label('order','Orden')!!}
							{!!Form::text('order',null,['class'=>'validate', 'required'])!!}
						</div>
						<div class="file-field input-field col s6">
					    	{!!Form::Select('section',[''=>'Sección...', 'header'=>'header', 'footer'=>'footer'])!!}
						</div>
					</div>
					{!!Form::submit('crear', ['class'=>'waves-effect waves-light btn right'])!!}
				{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>


@endsection