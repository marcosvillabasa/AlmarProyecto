$(document).ready(function(){

  var formulario = $('#formulario');
  var nombre = $('#nombre');
  var email = $('#email');
  var mensaje = $('#mensaje');
  var enviado = false;

  function valNombre(e){

    if (nombre.val() ==  '' || nombre.val() == null) {
      e.preventDefault();
      $('input[type="text"] + .error').css('display','block');
      enviado=false;
    }else {
      $('input[type="text"] + .error').css('display','none');
      enviado=true;
    }
  }

  function valEmail(e){

    if (email.val() ==  '' || email.val() == null) {
      e.preventDefault();
      $('input[type="email"] + .error').css('display','block');
      enviado=false;
    }else {
      $('input[type="email"] + .error').css('display','none');
      enviado=true;
    }
  }

  function valMensaje(e){

    if (mensaje.val() ==  '' || mensaje.val() == null) {
      e.preventDefault();
      $('textarea + .error').css('display','block');
      enviado=false;
    }else {
      $('textarea + .error').css('display','none');
      enviado=true;
    }
  }

  function confirmacion(e){
    if(enviado){
      $('.success').css('display','block');
    }
    else{
      $('.success').css('display','none');
    }
  }
  setInterval(confirmacion(),2000);

  function validacion(e){
    valNombre(e);
    valEmail(e);
    valMensaje(e);
    confirmacion(e);
  }
  
  formulario.on('submit',validacion);
  
})
