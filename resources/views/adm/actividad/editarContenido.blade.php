@extends('adm.main')

@section('titulo', 'Editar contenido')

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
			{!!Form::model($texto, ['route'=>['actividadcontenido.update', $texto->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('title','Título')!!}
						{!!Form::text('title',null,['class'=>'validate'])!!}
					</div>
			      	<label class="col s12" for="text">Texto</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('text', $texto->text, ['class'=>'validate'])!!}
				    </div>	
				</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
				{!!Form::close()!!} 
				</div>
			</div>
		</div>
	</div>
</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('text');
	CKEDITOR.config.height = '300px';
	CKEDITOR.config.width = '100%';
</script>
@endsection