@extends('adm.main')

@section('titulo', 'Editar actividades')

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
				<table class="highlight bordered">
					<thead>
						<td>Logo</td>
						<td>Título</td>
						<td>Orden</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
					@foreach($actividades as $actividad)
						<tr>
							<td><img class="imagen logo" src="{{ asset('images/actividad/'.$actividad->image) }}"></td>
							<td>{!! $actividad->title !!}</td>
							<td>{!! $actividad->order !!}</td>
							<td class="text-right">
								<a href="{{ route('actividad.edit', $actividad->id) }}"><i title="Editar" class="material-icons">create</i></a>
								{!!Form::open(['class'=>'en-linea', 'route'=>['actividad.destroy', $actividad->id], 'method' => 'DELETE'])!!}
									<button type="submit" class="submit-button confirmar">
										<i title="Eliminar" class="material-icons red-text">cancel</i>
									</button>
								{!!Form::close()!!}
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>			
			</div>
		</div>
    </div>
</main>


@endsection