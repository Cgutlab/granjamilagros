@extends('adm.main')

@section('titulo', 'Editar galerias')

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
					<legend style="margin-bottom: 30px; font-weight: bold; color:#494949;">{!! $categoria->title !!}</legend>
					<thead>
						<td class="capitalize">Imagen</td>
						<td>Orden</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
						@foreach($galerias as $galeria)
							<tr>
								<td><img class="imagen" src="{{ asset('images/galerias/'.$galeria->image) }}" alt=""></td>
								<td>{!! $galeria->order !!}</td>
								<td class="text-right flex-action">
									<a href="{{ route('galeria.edit', $galeria->id) }}"><i title="Editar" class="material-icons">create</i></a>
									{!!Form::open(['class'=>'en-linea', 'route'=>['galeria.destroy', $galeria->id], 'method' => 'delete'])!!}
										<input type="hidden" value="{{$id_category}}" name="id_category">
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