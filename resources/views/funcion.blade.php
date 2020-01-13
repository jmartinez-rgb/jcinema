@extends('layouts.peli')
@section('link')
	<link rel="stylesheet" href="{{asset('css/compra.css')}}">
	<script language="javascript">
		function ValidaCantidad(form){
			if(formulario.cantidad.value < 0){
				formulario.cantidad.value = 0;

			}
			if(formulario.cantidad.value > 9){
				formulario.cantidad.value = 9;
			}
		}
	</script>
@endsection
@section('movie')
    <div class="mode-pc">
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
            <div class="contenedor-precios-promociones">
                <div class="contenedor-precios">
                    <h2>PRECIOS</h2>
                    <form action="" name="formulario" method="POST" target="_blank">
                    <div class="precios-contenido">
                        <p id="mensaje">Niños mayores a dos años pagan su entrada</p>
                        <ul>
                            <li><p>2D ADULTO (S/27.00)</p>
                                <div class="menos-mas">
                                    <div class="symbol"><i class="fas fa-minus" onclick="formulario.cantidad.value--; ValidaCantidad(this.formulario)"></i></div>
                                    <div class="num"><input type="text" value="0" name="cantidad" size="1" readonly></div>
                                    <div class="symbol"><i class="fas fa-plus" onclick="formulario.cantidad.value++; ValidaCantidad(this.formulario)"></i></div>
                                </div>
                            </li>
                            <li><p>Persona con Discapacidad (S/19.50)</p>
                                <div class="menos-mas">
                                    <div class="symbol"><i class="fas fa-minus"></i></div>
                                    <div class="num">0</div>
                                    <div class="symbol"><i class="fas fa-plus"></i></div>
                                </div>
                            </li>
                            <li><p>Espacio para silla de ruedas (S/19.50)</p>
                                <div class="menos-mas">
                                    <div class="symbol"><i class="fas fa-minus"></i></div>
                                    <div class="num">0</div>
                                    <div class="symbol"><i class="fas fa-plus"></i></div>
                                </div></li>
                            <li><p>2D BBVA (S/24.50)</p>
                                <div class="menos-mas">
                                    <div class="symbol"><i class="fas fa-minus"></i></div>
                                    <div class="num">0</div>
                                    <div class="symbol"><i class="fas fa-plus"></i></div>
                                </div></li>
                            <li><p>2D PROMO FAMILIAR (S/20.25)</p>
                                <div class="menos-mas">
                                    <div class="symbol"><i class="fas fa-minus"></i></div>
                                    <div class="num">0</div>
                                    <div class="symbol"><i class="fas fa-plus"></i></div>
                                </div></li>
                            <li><p>2x1 2D BANBIF (S/13.50)</p>
                            <div class="menos-mas">
                                <div class="symbol"><i class="fas fa-minus"></i></div>
                                <div class="num">0</div>
                                <div class="symbol"><i class="fas fa-plus"></i></div>
                            </div></li>
                            <li><p>2D BCP (2) (S/10.00)</p>
                            <div class="menos-mas">
                                <div class="symbol"><i class="fas fa-minus"></i></div>
                                <div class="num">0</div>
                                <div class="symbol"><i class="fas fa-plus"></i></div>
                            </div></li>
                        </ul>
                    </div>
                    </form>
                </div>
                <div class="contenedor-promociones">
                    <h2>PROMOCIONES</h2>
                    <div class="promociones-contenido">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quaerat, nostrum quam corporis, sit magnam dolorem obcaecati ducimus illo ab voluptas possimus aspernatur at facilis necessitatibus! Necessitatibus cumque amet dolorem.
                    </div>
                </div>
            </div>
            <div class="banner-continuar">
                <p> S/0 </p>
                <a href="{{route('butaca')}}"><div class="continuar">Continuar</div></a>
            </div>
        </div>
    </div>
@endsection
@section('sc')
	<script src="{{asset('js/compra.js')}}"></script>
@endsection