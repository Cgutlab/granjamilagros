<header>
	<nav class="header z-depth-0 centrar">	
	  		<a href="{{ route('home') }}" class="brand-logo center" style="height: 100%; width: 20%; z-index: 10;"><img src="{{ asset('images/logos/'. $logoh->image) }}" style="position: absolute;left: 50%;transform: translateX(-50%);top: -40px;"></a>
	  		    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			    <div class="nav-wrapper">
			      	<ul id="nav-mobile" class="left hide-on-med-and-down" style="border-radius: 0 10px 10px 0;">
				        <li><a class="@if($active === 'servicio') activo @endif" href="{{ route('servicio') }}">Servicios</a></li>
				        <li><a class="@if($active === 'actividad') activo @endif" href="{{ route('actividad') }}">Actividades</a></li>
				        <li><a class="@if($active === 'galeria') activo @endif" href="{{ route('galeria') }}">Galería</a></li>
	                </ul>
	                <ul id="nav-mobile" class="right hide-on-med-and-down" style="border-radius: 10px 0 0 10px;">
				        <li><a class="@if($active === 'reserva') activo @endif" href="{{ route('reserva') }}">Reservas</a></li>
				        <li><a class="@if($active === 'donde') activo @endif" href="{{ route('donde') }}">Dónde Estamos</a></li>
				        <li><a class="@if($active === 'contacto') activo @endif" href="{{ route('contacto') }}">Contacto</a></li>
			      	</ul>
	            </div>

			</div>
		</div>
		
    </nav>
</header>

 <ul class="side-nav" id="mobile-demo">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('servicio') }}">Servicios</a></li>
	<li><a href="{{ route('actividad') }}">Actividades</a></li>
	<li><a href="{{ route('galeria') }}">Galería</a></li>
	<li><a href="{{ route('reserva') }}">Reservas</a></li>
	<li><a href="{{ route('donde') }}">Dónde Estamos</a></li>
	<li><a href="{{ route('contacto') }}">Contacto</a></li>
</ul>