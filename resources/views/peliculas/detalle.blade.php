@extends('layouts.peli')
@if(Auth::check() && Auth::user()->name  == 'jmartinez')
@section('link')
    <link rel="stylesheet" href="{{asset('css/pelicula.css')}}">
@endsection
@else
@section('link')
    <link rel="stylesheet" href="{{asset('css/pelicula.css')}}">
@endsection
@section('movie')
        <div class="contenedor-video"> 
            <iframe width="560" height="315" src="{{ $detalles -> trailer }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        </div>
        <div class="contenedor-img-desc">
            <div class="cont-img-sinop">
                <img src="../img/{{$detalles->imagen_p}}">
                <div class="sinopsis">
                    <h3>{{ $detalles -> nombre }}</h3>
                    <p><br>{{ $detalles -> descripcion }}</p>
                </div>
            </div>
        </div>
        <div class="baner-funciones">
            <h2>Funciones</h2>
        </div>
        <div class="menujq">
                <ul>
                    <li><a href="javascript:void();"><i class="fas fa-angle-down"></i>Cinemark</a>
                        <ul>
                            <li><a href="javascript:void();"><i class="fas fa-plus"></i>Cinemark Jockey Plaza</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <a href="{{route('funcion')}}">
                                                <div class="horas">Hora5</div>
                                            </a>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void();"><i class="fas fa-plus"></i>Cinemark Mall Aventura Porongoche</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li> 
                                </ul>
                            </li>
                            <li><a href="javascript:void();"><i class="fas fa-plus"></i>Cinemark Mall Plaza Bellavista</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void();"><i class="fas fa-angle-down"></i>Cinestar</a>
                        <ul>
                            <li><a href="javascript:void();"><i class="fas fa-plus"></i>Cinestar Sur</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void();"><i class="fas fa-plus"></i>Cinestar Benavides</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void();"><i class="fas fa-plus"></i>Open Plaza Angamos</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>  
                        </ul>
                    </li>
                    <li><a href="javascript:void();"><i class="fas fa-angle-down"></i>Cinépolis</a>
                        <ul>
                            <li><a href="javascript:void();"><i class="fas fa-plus"></i>Opc. 1.3 desplegable</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void();"><i class="fas fa-plus"></i>Opc. 1.3 desplegable</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void();"><i class="fas fa-plus"></i>Opc. 1.3 desplegable</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void();"><i class="fas fa-angle-down"></i>Cineplanet</a>
                        <ul>
                            <li><a href="javascript:void();"><i class="fas fa-plus"></i>Opc. 1.3 desplegable</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void();"><i class="fas fa-plus"></i>Opc. 1.3 desplegable</a>
                                <ul>
                                    <li>
                                        <div class="tipo">2D DOBLADA</div>
                                        <div class="cont-hor">
                                            <div class="horas">Hora5</div>
                                            <div class="horas">Hora4</div>
                                            <div class="horas">Hora3</div>
                                            <div class="horas">Hora2</div>
                                            <div class="horas">Hora2</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void();"><i class="fas fa-plus"></i>Opc. 1.3 desplegable</a>
                                <ul>
                                    <ul>
                                        <li>
                                            <div class="tipo">2D DOBLADA</div>
                                            <div class="cont-hor">
                                                <div class="horas">Hora5</div>
                                                <div class="horas">Hora4</div>
                                                <div class="horas">Hora3</div>
                                                <div class="horas">Hora2</div>
                                                <div class="horas">Hora2</div>
                                            </div>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                        </ul>
                    </li>  
                </ul>
            </div>
@endsection
@section('sc')
    <footer>
            <div class="footer1">
              <div class="redes">Nuestras Redes</div>
              <div class="iconos">
                <div class="fab fa-facebook">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                <div class="fab fa-twitter-square">&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                <div class="far fa-envelope">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
              </div>
            </div>
            <div class="footer2">
              <div class="info">
                <p>Términos y condiciones</p>
                <p>informacion</p>
              </div>
            </div>
    </footer>
@endsection
@endif