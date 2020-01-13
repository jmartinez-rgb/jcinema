var asiento = "";

$('.asiento').on('click',function chair (){
    $(this).toggleClass('cambio-celda');
    asiento = $(this).text();
    if ($(this).hasClass('cambio-celda')){
        asiento = $(this).text();
    }else{
        asiento = "borrado"
    }
    console.log(asiento);
    return asiento;
    
});

$('.point').on('click',function chair (){
    $(this).toggleClass('point-fill');
    
    
});




