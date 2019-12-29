@extends('adm.main')

@section('titulo', 'Editar redes sociales')

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
						<td class="center-align">Icono</td>
						<td>Nombre</td>
						<td>Sección</td>
						<td>Orden</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
						@foreach($redes as $red)
							<tr>
								<td class="center-align"><i class="{{ $red->icon }}"></i></td>
								<td>{{ $red->name }}</td>
								<td>{{ $red->section }}</td>
								<td>{{ $red->order }}</td>
								<td class="text-right flex-action">
									<a href="{{ route('redes.edit', $red->id) }}"><i title="Editar" class="material-icons">create</i></a>
									{!!Form::open(['class'=>'en-linea', 'route'=>['redes.destroy', $red->id], 'method' => 'DELETE'])!!}
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
		{!!$redes->render()!!}
    </div>
</main>


@endsection