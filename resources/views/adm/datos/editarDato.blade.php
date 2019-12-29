@extends('adm.main')

@section('titulo', 'Editar dato')

@section('cuerpo')

<main>
	<div class="container">
	    @if(count($errors) > 0)
		<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
	  		<ul>
	  			@foreach ($errors->all() as $error)
	  				<li>{!! $error !!}</li>
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
			<div class="col-sm-12">
            {!! Form::model($dato, ['route'=>['datos.update', $dato->id], 'method'=>'PUT']) !!}
				<div class="row">
					<div class="input-field col s12">
						{!! Form::label('description','Descripción') !!}
						{!! Form::text('description', $dato->description, ['class'=>'validate']) !!}
					</div>
					<div class="input-field col s6">
						{!! Form::label('Orden') !!}
						{!! Form::text('order', $dato->order, ['class'=>'validate']) !!}
					</div>
				</div>
				<div class="col s12 no-padding">
					{!! Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right']) !!}
				</div>
			{!! Form::close() !!} 
			</div>
			</div>
		</div>
	</div>
@endsection