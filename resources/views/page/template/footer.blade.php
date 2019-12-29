 <footer>
    <div class="container">
        <div class="row">
            <div class="col s12 l4 mt20 center-align">
                <img src="{{ asset('images/logos/'. $logof->image) }}" alt="">
            </div>
            <div class="col s12 l4 mb20">
                 <div class="row">
                    <div class="col l12 mb10">
                        <div class="row">
                            <div class="col s12 naranja semibold" style="letter-spacing: 2px;">
                                SITEMAP
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s6 no-padding">
                    <ul class="sitemap">
                        <li><a href="{{ route('servicio') }}">Servicios</a></li>
                        <li><a href="{{ route('actividad') }}">Actividades</a></li>
                        <li><a href="{{ route('galeria') }}">Galería</a></li>
                    </ul>
                </div>
                <div class="col s6 no-padding">
                    <ul class="sitemap">
                        <li><a href="{{ route('reserva') }}">Reserva</a></li>
                        <li><a href="{{ route('donde') }}">Dónde estamos</a></li>
                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                    </ul>
                </div> 
                <div class="row">
                    <div class="col s6">
                        @foreach($fredes as $fred)
                            <a href="{{ $fred->route }}" target="__blank">
                                <i class="naranja lighter fs22 {{ $fred->icon }}"></i>
                            </a>
                        @endforeach
                    </div>
                    <div class="col s6 no-padding">
                        <a href="https://www.mercadolibre.com.ar/" target="__blank">
                            <img src="{{ asset('images/mercadolibre.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        	<div class="col s12 l4">
                <div class="row">
                    <div class="col l12 mb10">
                        <div class="row">
                            <div class="col s12 naranja semibold" style="letter-spacing: 2px;">
                                CONTACTO
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l12 mb15">
                        <div class="row">
                            <a href="https://goo.gl/maps/n9m9KNgpCDU2" target="__blank">
                                <div class="col s1">    
                                    <i class="naranja {{ $ubicacion->icon }}"></i>
                                </div>
                                <div class="col s10 raleway lighter">
                                    {!! $ubicacion->description !!}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l12 mb15">
                        <div class="row">
                            <a href="tel:{{ $telefono->description }}" >
                                <div class="col s1">    
                                    <i class="naranja {{ $telefono->icon }}"></i>
                                </div>
                                <div class="col s10 raleway lighter">
                                    {{ $telefono->description }}
                                </div>                                
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col l12 mb15">
                        <div class="row">
                            <a href="mailto:{{ $correo->description }}">
                                <div class="col s1">    
                                    <i class="naranja {{ $correo->icon }}"></i>
                                </div>
                                <div class="col s10 raleway lighter" style="color:#DDDDDD">
                                    {{ $correo->description }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="linea" style="height: 1px;"></div>
        <div class="right mt10 mb10 blanco" style="font-size: 12px">BY OSOLE</div>
    </div>
</footer>