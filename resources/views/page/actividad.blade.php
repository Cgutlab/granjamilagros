<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Actividades ~ Granja Milagros</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
	@include('page.template.header')
	<main class="home">
		@include('page.template.slider')
		<div class="container center-align mt50 mb50">
			<div class="vinotinto semibold fs35 mb10">{{ $texto->title }}</div>
			<div class="raleway fw5" style="font-size:1.1rem;">{!! $texto->text !!}</div>
		</div>
		<div class="container width75 mb50">
			<div class="row">
				@foreach($actividades as $actividad)
					@if ($loop->first)
	        			<div class="col s12 m6 l2 offset-l1">
							<div class="center-align">
								<img src="{{ asset('images/actividad/'.$actividad->image) }}" alt="">
							</div>
							<div class="center-align naranja-text semibold fs22">
								{{ $actividad->title }}
							</div>
						</div>
    				@else
					<div class="col s12 m6 l2">
						<div class="center-align">
							<img src="{{ asset('images/actividad/'.$actividad->image) }}" alt="">
						</div>
						<div class="center-align naranja-text semibold fs22">
							{{ $actividad->title }}
						</div>
					</div>
					@endif
				@endforeach
			</div>
		</div>
	</main>
	@include('page.template.footer')
	@include('page.template.scripts')
</body>
</html>