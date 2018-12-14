$(document).ready(function(){

    // seleccionamos elementos
      var slider = $('#sliderClientes');
      var btnAnterior = $('#btn-anterior-clientes');
      var btnSiguiente = $('#btn-siguiente-clientes');
  
      //se pasa el ultimo al primer
      $('#sliderClientes .slide:last').insertBefore('#sliderClientes .slide:first');
      slider.css('margin-left','-43%');
  
      //funcion para que el slide se mueva a la derecha
      function moverDerecha(){
  
        if (!slider.is(':animated')) {
  
          slider.animate({
            marginLeft: '-105.6%'
          },700, function(){
            $('#sliderClientes .slide:first').insertAfter('#sliderClientes .slide:last');
            slider.css('margin-left','-43%');
            resetIntervalo();
          });
        }
  
      }
  
      btnSiguiente.on('click', moverDerecha);
  
  
      //funcion para mover a la izquierda
      function moverIzquierda(){
  
        if (!slider.is(':animated')) {
  
          $('#sliderClientes .slide:last').insertBefore('#sliderClientes .slide:first');
          slider.css('margin-left','-105.6%');
          slider.animate({
            marginLeft: '-43%'
          },700, function (){
            resetIntervalo()
          });
        }
      }
  
      btnAnterior.on('click', moverIzquierda);
  
      var intervalo = setInterval(moverDerecha,8000);
  
      function resetIntervalo(){
        clearInterval(intervalo);
        intervalo = setInterval(moverDerecha,8000);
      }
  });
  