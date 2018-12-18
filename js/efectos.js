$(document).ready(function () {

    // http://api.jquery.com/category/effects/
  
    function mostrarOcultarCaro(){
    
        let text = "";
        if ( $("#botonCaro").text() === "See More") {
            $("#efectoCaro").show(2000);
            text="See Less";
        }else{
            if ($("#botonCaro").text() === "See Less") {
                $("#efectoCaro").hide(2000);
                text="See More";
            }
            else{
                if ($("#botonCaro").text() === "Ver Mas") {
                    $("#efectoCaro").show(2000);
                    text="Ver Menos";
                }
                else{
                    if ($("#botonCaro").text() === "Ver Menos") {
                        $("#efectoCaro").hide(2000);
                        text="Ver Mas";
                    }
                }
            }
        }


        // else{
        //     $("#efectoCaro").hide(2000);
        //     text="See More";
        // }
        $("#botonCaro").html(text);
    }
  
    var botonCaro = $("#botonCaro");
    botonCaro.click(mostrarOcultarCaro);
  
  });

  $(document).ready(function () {

    // http://api.jquery.com/category/effects/
  
    function mostrarOcultarKari(){
    
        let textK = "";

        if ( $("#botonKari").text() === "See More") {
            $("#efectoKari").show(2000);
            textK="See Less";
        }else{
            if ($("#botonKari").text() === "See Less") {
                $("#efectoKari").hide(2000);
                textK="See More";
            }
            else{
                if ($("#botonKari").text() === "Ver Mas") {
                    $("#efectoKari").show(2000);
                    textK="Ver Menos";
                }
                else{
                    if ($("#botonKari").text() === "Ver Menos") {
                        $("#efectoKari").hide(2000);
                        textK="Ver Mas";
                    }
                }
            }
        }


        
        $("#botonKari").html(textK);
    }
  
    var botonKari = $("#botonKari");
    botonKari.click(mostrarOcultarKari);
  
  });