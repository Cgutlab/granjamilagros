@extends('adm.main')

@section('titulo', 'Crear galería')

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
				{!!Form::open(['route'=>'galeria.store', 'method'=>'POST', 'files' => true])!!}
					<div class="row">
						<div class="input-field col s6">
							<select name="id_category" required="required">
								<option value=""> -- Selecciona una categoría --</option>
								@foreach($categorias as $categoria)
									<option value="{{ $categoria->id }}">{{ $categoria->title }}</option>
								@endforeach
							</select>
						</div>
						<div class="input-field col s6">
							{!!Form::label('Orden')!!}
							{!!Form::text('order',null,['class'=>'validate', 'required'])!!}
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
				    </div>
				<div class="col s12 no-padding">
					{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
				{!!Form::close()!!} 
				</div>
			</div>
		</div>
	</div>
</main>
@endsection