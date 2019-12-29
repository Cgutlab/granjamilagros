@extends('adm.main')

@section('titulo', 'Editar destacados')

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
							<td>Imagen</td>
							<td>Título</td>
							<td>Orden</td>
							<td class="text-right">Acciones</td>
						</thead>
						<tbody>
							@foreach($destacados as $destacado)
								<tr>
									<td><img src="{{ asset("images/destacados/".$destacado->image) }}" width="100"></td>
									<td>{!! $destacado->title !!}</td>
									<td>{!! $destacado->order !!}</td>
									<td class="text-right">
										<a href="{{ route('homedestacado.edit',$destacado->id) }}"><i title="Editar" class="material-icons">create</i></a>
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