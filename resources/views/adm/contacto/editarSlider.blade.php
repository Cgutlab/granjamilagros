@extends('adm.main')

@section('titulo', 'Editar slider')

@section('cuerpo')
<main>
	<div class="container width85">
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
			{!!Form::model($slider, ['route'=>['contacto.slider.update', $slider->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
		      		<div class="input-field col s12">
			      		{!! Form::label('title','Título') !!}
						{!! Form::text('title', null, ['class'=>'validate']) !!}
				    </div>
			      	<div class="input-field col s12">
			      		{!! Form::label('subtitle','Título') !!}
						{!! Form::text('subtitle', null, ['class'=>'validate']) !!}
				    </div>
					<div class="file-field input-field col s6">
						<div class="btn">
						    <span>Imagen</span>
						    {!! Form::file('image') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('',null, ['class'=>'file-path validate']) !!}
						</div>
						<small>Tamaño recomendado 1420 x 490</small>
					</div>
					<div class="input-field col s6">
						{!!Form::label('Orden')!!}
						{!!Form::text('order',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="col s12" style="margin-top: 20px">
						<small>Vista previa</small>
						<div class="vistaprevia">
							<div class="imagen-vista">
								<img class="responsive-img" src="{{ asset('images/sliders/'.$slider->image) }}" alt="Vista previa" title="Vista previa">
							</div>
							<div class="texto-vista" style="padding: 0;">
								<div class="titulo">{!! $slider->title !!}</div>
								<div class="subtitulo">{!! $slider->subtitle !!}</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
			{!!Form::close()!!} 
			</div>
			</div>
		</div>
	</main>
@endsection