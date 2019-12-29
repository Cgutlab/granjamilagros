<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metadato->description }}">
    <meta name="keyword" content="{{ $metadato->keyword }}">
	<title>Galería ~ Granja Milagros</title>
	@include('page.template.links')
	<link rel="stylesheet" href="{{ asset('css/galeria.css') }}">
</head>
<body>
	@include('page.template.header')
	<main class="galeria">
		@include('page.template.slider')
		<div class="container width85 mb40 mt40 center-align">
			<div class="vinotinto fs35 semibold" style="line-height: 1.2;">Galería</div>
			<div>
				<ul id="tabs-swipe-demo" class="tabs mb30" style="display: flex; justify-content: space-around; align-items: center;">
				    <li class="tab col s3">
				    	<a href="#test-swipe-0" style="font-family:'raleway'; letter-spacing:2px;">Todas</a>
				    </li>
				    @foreach($categorias as $categoria)
				    	<li class="tab col s3 naranja">
				    		<a href="#test-swipe-{{ $categoria->id }}" style="font-family:'raleway'; letter-spacing:2px;">{{ $categoria->title }}</a>
				    	</li>
				    @endforeach
		  		</ul>
		  		<div id="test-swipe-0">
		  			<div class="row">
			  			@foreach($galerias as $galeria)
			  				<div class="col s12 m4">
			  					<img class="responsive-img mb20 materialboxed" style="height: ;" src="{{ asset('images/galerias/'.$galeria->image) }}" alt="">
			  				</div>
			  			@endforeach
		  			</div>
	  			</div>
		  		@foreach($categorias as $categoria)
	  				<div id="test-swipe-{{ $categoria->id }}">
			  			<div class="row">
				  			@foreach($categoria->galeria as $galeria)
				  				<div class="col s12 m4">
				  					<img class="responsive-img mb20 materialboxed" src="{{ asset('images/galerias/'.$galeria->image) }}" alt="">
				  				</div>
				  			@endforeach
			  			</div>
		  			</div>
		  		@endforeach
			</div>
		</div>
	</main>
	@include('page.template.footer')
	@include('page.template.scripts')
	<script>
		$(document).ready(function(){
			$('.materialboxed').materialbox();
		    $('.tabs').tabs();
		});
	</script>
</body>
</html>