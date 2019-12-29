<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Servicios ~ Granja Milagros</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
	@include('page.template.header')
	<main class="home">
		@include('page.template.slider')
		<div class="container center-align mt50 mb50">
			<div class="vinotinto semibold fs35">{{ $servicio->title }}</div>
			<div class="naranja-text semibold mb20 fs25">{{ $servicio->subtitle }}</div>
			<div class="raleway fw5" style="font-size: 1.1rem;">{!! $servicio->text !!}</div>
		</div>
	</main>
	@include('page.template.footer')
	@include('page.template.scripts')
</body>
</html>