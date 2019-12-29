@extends('adm.main')

@section('titulo', 'Editar destacado')

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
				{!!Form::model($destacado, ['route'=>['homedestacado.update', $destacado->id], 'method'=>'PUT', 'files' => true])!!}
						<div class="file-field input-field col s6">
					    	{!!Form::label('title','Título')!!}
							{!!Form::text('title',$destacado->title,['class'=>'validate'])!!}
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
						<div class="file-field input-field col s6">
					    	{!!Form::label('order','Orden')!!}
							{!!Form::text('order',$destacado->order,['class'=>'validate'])!!}
						</div>
						<div class="file-field input-field col s6">
					    	{!!Form::label('route','Ruta')!!}
							{!!Form::text('route',$destacado->route,['class'=>'validate'])!!}
						</div>
						<div class="col s12 no-padding">
							{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
						</div>
			{!!Form::close()!!}
			</div> 
		</div>
	</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('detail');
	CKEDITOR.config.height = '300px';
	CKEDITOR.config.width = '100%';
</script>
@endsection