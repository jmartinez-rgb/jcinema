@extends('layouts.peli')

@section('link')
    <link rel="stylesheet" href="{{asset('css/pelicula.css')}}">
    <link rel="stylesheet" href="{{asset('css/Compra2.css')}}">
@endsection
@section('movie')
        <h2>Selecciones los asientos</h2>

        <table class="tabla1">
            <tr>
                <td></td>
                <td class="pasadiso"></td>
                <td class="columna">A</td>
                <td class="columna">B</td>
                <td class="columna">C</td>
                <td class="columna">D</td>
                <td class="columna">E</td>
                <td class="columna">F</td>
                <td class="columna">G</td>
                <td class="columna">H</td>
                <td class="pasadiso"></td>
                
            </tr>
            <tr>
                <td></td>
                <td class="pasadiso" colspan="10"></td> 
            </tr>
            <tr>
                <td class="fila">1</td>
                <td class="pasadiso" rowspan="6"></td>
                
                <td class="asiento"><div class="filxcol">A1</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">B1</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C1</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D1</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E1</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F1</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G1</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">H1</div><i class="fas fa-chair"></i></td>

                <td class="pasadiso" rowspan="6"></td>
                
            </tr>
            <tr>
                <td class="fila">2</td>
                <td class="asiento"><div class="filxcol">A2</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">B2</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C2</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D2</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E2</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F2</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G2</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">H2</div><i class="fas fa-chair"></i></td>
            </tr>
            <tr>
                <td class="fila">3</td>
                <td class="asiento"><div class="filxcol">A3</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">B3</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C3</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D3</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E3</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F3</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G3</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">H3</div><i class="fas fa-chair"></i></td>
            </tr>
            <tr>
                <td class="fila">4</td>  
                <td class="asiento"><div class="filxcol">A4</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">B4</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C4</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D4</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E4</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F4</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G4</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">H4</div><i class="fas fa-chair"></i></td>
            </tr>
            <tr>
                <td class="fila">5</td>
                <td class="asiento"><div class="filxcol">A5</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">B5</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C5</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D5</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E5</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F5</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G5</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">H5</div><i class="fas fa-chair"></i></td>
            </tr>
            <tr>
                <td class="fila">6</td>
                <td class="asiento"><div class="filxcol">A6</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">B6</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C6</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D6</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E6</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F6</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G6</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">H6</div><i class="fas fa-chair"></i></td>
            </tr>
        </table>
        <table class="tabla2">
            <tr>
                <td class="pasadiso" colspan="11"></td>
            </tr>
        </table>
        <table class="tabla3">
            <tr>
                <td class="fila">7</td>
                <td  class="pasadiso" rowspan="6" colspan="2"></td>
                
                <td class="asiento"><div class="filxcol">B7</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C7</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D7</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E7</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F7</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G7</div><i class="fas fa-chair"></i></td>
                <td  class="pasadiso" rowspan="6" colspan="2"></td>
            </tr>
            <tr>
                <td class="fila">8</td>
                
                <td class="asiento"><div class="filxcol">B8</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C8</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D8</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E8</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F8</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G8</div><i class="fas fa-chair"></i></td>
                
                
            </tr>
            <tr>
                <td class="fila">9</td>
                
                
                <td class="asiento"><div class="filxcol">B9</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C9</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D9</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E9</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F9</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G9</div><i class="fas fa-chair"></i></td>
                
                
            </tr>
            <tr>
                <td class="fila">10</td>
                
                
                <td class="asiento"><div class="filxcol">B10</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C10</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D10</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E10</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F10</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G10</div><i class="fas fa-chair"></i></td>
                
                
            </tr>
            <tr>
                <td class="fila">11</td>
                
                
                <td class="asiento"><div class="filxcol">B11</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C11</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D11</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E11</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F11</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G11</div><i class="fas fa-chair"></i></td>
                
                
            </tr>
            <tr>
                <td class="fila">12</td>
                
                <td class="asiento"><div class="filxcol">B12</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">C12</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">D12</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">E12</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">F12</div><i class="fas fa-chair"></i></td>
                <td class="asiento"><div class="filxcol">G12</div><i class="fas fa-chair"></i></td>
                
            </tr>
        </table>
        <table class="tabla2">
            <tr>
                <td class="pasadiso" colspan="11"></td>
            </tr>
            <tr>
                <td class="pantalla">PANTALLA</td>
            </tr>
        </table>

@endsection
@section('sc')
    <article>
        <div class="baner-pago">
            <h2>Método de pago</h2>
        </div>
        <div class="modo">
            <div class="contenedor-prim">
                <div class="contenedor-sec">
                    <img src="../../img/img1.jpg" >
                    <div class="funcion">
                        <h3>Joker</h3>
                        <ul>
                            <li>Mayores de 14 | Doblada | 2D | Suspenso</li>
                            <li><br>Cinemark Jockey Plaza</li>
                            <li>Sala 06</li>
                            <li>Octubre 07, 2019</li>
                            <li>06:10 pm - 8:12 pm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="derecho">
                <div class="contenedor-datos-personales">
                    <h2>Datos Personales</h2>
                    <p>
                        <label>Nombres: </label>
                        <label>Josue Martinez </label>
                    </p>
                    <p>
                        <label>Correo: </label>
                        <label>lincoljosue7gmail.com </label>
                    </p>
                    <div class="cont-tarj">
                        <div class="tajeta">Tarjeta de crédito/débito (S/27.00)</div>
                        <div class="point"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-continuar">
            <div class="continuar">Continuar</div>
        </div>
    </article>
    <script src="{{asset('js/Compra2.js')}}"></script>
@endsection
