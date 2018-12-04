$(document).ready(function(){
  var fixed = $('#menu-fixed');

  $(window).on('scroll',function(){

    var servicioOffTop = $('#servicios').offset().top;

    if ($(window).scrollTop() >= servicioOffTop) {

      fixed.css('margin-top',0);
    }else {
      if ($(window).scrollTop() <= servicioOffTop/2) {
        fixed.css('margin-top','-68px');
      }
    }

  })


});
