@extends('adm.main')

@section('titulo', 'Editar actividad')

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
			{{ session('success')}}
		</div>
		@endif

		<div class="row">
		    <div class="col-sm-12">
            {!!Form::model($actividad, ['route'=>['actividad.update', $actividad->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('title','Nombre')!!}
						{!!Form::text('title',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="file-field input-field col s6">
					    <div class="btn">
					        <span>Imagen</span>
					        {!! Form::file('image') !!}
					    </div>
					    <div class="file-path-wrapper">
					      	{!! Form::text('',null, ['class'=>'file-path validate']) !!}
					    </div>
					</div>
					<div class="input-field col s6">
						{!!Form::label('order','Orden')!!}
						{!!Form::text('order',null,['class'=>'validate', 'required'])!!}
					</div>
				</div>
				{!!Form::submit('guardar', ['class'=>'waves-effect waves-light btn right'])!!}
			{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>

@endsection