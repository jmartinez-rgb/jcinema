$('.contenedor-promociones h2').on('click',function(){
    $('.precios-contenido').addClass('cambio')
    $('.promociones-contenido').addClass('cambio2');
    $('.contenedor-promociones h2').addClass('borde-promocion')
    $('.contenedor-precios h2').addClass('borde-precio')
    
});
$('.contenedor-precios').on('click',function(){
    $('.precios-contenido').removeClass('cambio')
    $('.promociones-contenido').removeClass('cambio2');
    $('.contenedor-promociones h2').removeClass('borde-promocion')
});