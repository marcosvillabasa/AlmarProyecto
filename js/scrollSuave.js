$(document).ready(function(){

  // mostrar y ocultar boton volver arriba
  var btnVolverArriba = $('#btn-volver-arriba');

  $(window).on('scroll', function(){

    var proyectosOffsetTop = $('#proyectos').offset().top;

    if ($(window).scrollTop() >=  proyectosOffsetTop) {

      btnVolverArriba.css('margin-right',0);
    }
    else
      if ($(window).scrollTop() <= proyectosOffsetTop/2){
        btnVolverArriba.css('margin-right','-60px');
    }
  })

  //scroll suave para inicio y volver arriba
  $('a.volver-arriba').on('click', function(e){

    e.preventDefault();

    if ($(window).scrollTop() != 0) {
      $('html,body').stop().animate({scrollTop: 0},1000);
    }

  })

  //scroll suave para los demas elementos
  $('a.scroll-suave').on('click', function(e){
    e.preventDefault();
    var seccionOT = $($(this).attr('href')).offset().top ;
    $('html,body').animate({scrollTop: seccionOT},1000);
  });

  $('a.scroll-sobre-nosotros').on('click', function(e){
    e.preventDefault();
    var seccionOT = $($(this).attr('href')).offset().top - 122;
    $('html,body').animate({scrollTop: seccionOT},1000);
  });

  $('a.scroll-equipo').on('click', function(e){
    e.preventDefault();
    var seccionOT = $($(this).attr('href')).offset().top -68;
    $('html,body').animate({scrollTop: seccionOT},1000);
  });

});
