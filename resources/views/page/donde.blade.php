<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Dónde estamos ~ Granja Milagros</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
	@include('page.template.header')
	<main class="home">
		@include('page.template.slider')
		<div class="container width85 mb40 mt40 center-align">
			<div class="vinotinto fs35 semibold" style="line-height: 1.2; letter-spacing: 2px;">Dónde estamos</div>
			<div class="fs25 mb40 semibold" style="color:#CB6532; letter-spacing: 2px;">En el corazón de Paso del Rey</div>
			<iframe src="{{ $mapa->description }}" width="100%" height="700" frameborder="0" allowfullscreen></iframe>
		</div>
	</main>
	@include('page.template.footer')
	@include('page.template.scripts')
</body>
</html>