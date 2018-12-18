<?php
    session_start();
    require 'requirelenguage.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0,user-scalable=no" >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Almar Servicios</title>
  <!-- favicom -->

  <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
  <link rel="manifest" href="/img/site.webmanifest">
  <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/img/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="/icon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- fuentes -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700" rel="stylesheet">
  <!--mis estilos  -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/animaciones.css">

  <!-- modal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

</head>
<body>

    <!-- boton volver arriba -->
    <div class="btn-volver-arriba" id="btn-volver-arriba">
        <a href="" class="volver-arriba">
        <i class="fas fa-arrow-up"></i>
        </a>
    </div>

    <!-- menu-movil -->
    <div class="menu-movil">
        <div class="barra">
        <a href="#" class="logo volver-arriba">
            <p>ALMAR</p>
        </a>
        <a href="#" id="btnMenu">
            <i class="fas fa-bars"></i>
        </a>
        </div>

        <nav class="menu-principal">
            <a href="" class="volver-arriba"><?php echo $inicio;    ?></a>
            <a href="#servicios" class="scroll-suave"><?php echo $servicios;    ?></a>
            <a href="#sobre-nosotros" class="scroll-sobre-nosotros"><?php echo $quienesSomos;    ?></a>
            <a href="#equipo" class="scroll-equipo"><?php echo $equipo;    ?></a>
            <a href="#clientes" class="scroll-equipo"><?php echo $clientes;    ?></a>
            <a href="#contacto" class="scroll-suave"><?php echo $contacto;    ?></a>
            <a href="changelanguage.php?language=es"><?php echo $spanish; ?></a>
            <a href="changelanguage.php?language=en"><?php echo $english; ?></a>
        </nav>

    </div>

    <!-- Header-Encabezado -escritorio -->
    <header>
        <div class="menu-desktop">
        <a href="#" class="logo volver-arriba">
            <p class="animated fadeIn">ALMAR</p>
        </a>
        <nav class="menu-principal">
            <a href="" class="volver-arriba"><?php echo $inicio;    ?></a>
            <a href="#servicios" class="scroll-suave"><?php echo $servicios;    ?></a>
            <a href="#sobre-nosotros" class="scroll-sobre-nosotros"><?php echo $quienesSomos;    ?></a>
            <a href="#equipo" class="scroll-equipo"><?php echo $equipo;    ?></a>
            <a href="#clientes" class="scroll-equipo"><?php echo $clientes;    ?></a>
            <a href="#contacto" class="scroll-suave"><?php echo $contacto;    ?></a>
        </nav>

        <div class="top-idiomas">
            <a href="changelanguage.php?language=es">
                <i class="fas fa-globe-americas"></i> <?php echo $spanish; ?>
            </a>

            <a href="changelanguage.php?language=en">
                <i class="fas fa-globe-americas"></i> <?php echo $english; ?>
            </a>
            
        </div>
        </div>
    </header>

    <!-- encabezado fixed -->

    <div class="menu-fixed" id="menu-fixed">
    <a href="#" class="logo volver-arriba">
            <p class="animated fadeIn">ALMAR</p>
        </a>
        <nav class="menu-principal">
            <a href="" class="volver-arriba"><?php echo $inicio;    ?></a>
            <a href="#servicios" class="scroll-suave"><?php echo $servicios;    ?></a>
            <a href="#sobre-nosotros" class="scroll-sobre-nosotros"><?php echo $quienesSomos;    ?></a>
            <a href="#equipo" class="scroll-equipo"><?php echo $equipo;    ?></a>
            <a href="#clientes" class="scroll-equipo"><?php echo $clientes;    ?></a>
            <a href="#contacto" class="scroll-suave"><?php echo $contacto;    ?></a>
        </nav>

        <div class="top-idiomas">
            <a href="changelanguage.php?language=es">
                <i class="fas fa-globe-americas"></i> <?php echo $spanish; ?>
            </a>

            <a href="changelanguage.php?language=en">
                <i class="fas fa-globe-americas"></i> <?php echo $english; ?>
            </a>
            
        </div>
    </div>

    <section class="main">
         <!-- banner-principal -->
        <section class="banner-principal">
            <div class="banner" id="banner">

            </div>
            <div class="texto-banner">
                <p>
                    "<?php echo $textoBanner;    ?>"
                </p>
            <h1>ALMAR</h1>
            <a class="scroll-suave" href="#servicios"><?php echo $nuestrosServicios; ?></a>
            </div>
        </section>

        <!-- servicios -->
        <section class="servicios" id="servicios">
            <div class="contenedor">
            <div class="titulo-section">
                <h2><?php echo $servicios?></h2>
            </div>
            <div class="galeria-servicios">

                <div class="tarjeta">
                <img src="img/innovacion.svg" alt="">
                <h4><?php echo $traduccion; ?></h4>
                <p><?php echo $textoTraduccion; ?></p>
                </div>

                <div class="tarjeta">
                <img src="img/diseno-editorial.svg" alt="">
                <h4><?php echo $edicion; ?></h4>
                <p><?php echo $textoEdicion; ?></p>
                </div>

                <div class="tarjeta">
                <img src="img/contenido.svg" alt="">
                <h4><?php echo $edicionGrafica; ?> </h4>
                <p><?php echo $textoGrafica; ?></p>
                </div>

                <div class="tarjeta">
                <img src="img/subtitulos.svg" alt="">
                <h4><?php echo $subtitulacion; ?></h4>
                <p><?php echo $textoSubtitulacion; ?></p>
                </div>

            </div>
            </div>
        </section>

        <!-- slider de la web -->
        <section class="contenedor-slider">
            <div class="contenedor">

                <div class="titulo-slider">
                    <h2 class="animated fadeInDown"><?php echo $titNuestrosValores;    ?></h2>
                </div>
                <div class="slider" id="slider">

                        <div class="slide">
                            <div class="tarjeta">
                                <img src="img/monitoreo.svg" alt="">
                                <h4><?php echo $titEficiencia ;?></h4>
                                <p><?php echo $textoEficiencia; ?></p>
                                <!-- modal -->
                                <div class="verMas">
                                <div id="efi" class="modal">
                                    <h4><?php echo $titEficiencia ;?></h4>
                                    <p>
                                        <?php echo $textoEficiencia; ?>
                                    </p>
                                </div>
                                <p><a href="#efi" rel="modal:open"><?php echo $verMas; ?></a></p>
                                </div>

                            </div>
                        </div>
                        <div class="slide">
                        <div class="tarjeta">
                            <img src="img/recomendacion.svg" alt="">
                            <h4><?php echo $calidadHumana?></h4>
                            <p>
                                <?php echo $textoCalidadHumana ;?>
                            </p>
                            <!-- modal -->
                            <div class="verMas">
                            <div id="cal" class="modal">
                                <h4><?php echo $calidadHumana?></h4>
                                <p>
                                <?php echo $textoCalidadHumana ;?>
                                </p>
                            </div>
                            <p><a href="#cal" rel="modal:open"><?php echo $verMas; ?></a></p>
                            </div>
                        </div>
                        </div>
                        <div class="slide">
                        <div class="tarjeta">
                            <img src="img/tiempo-infinito.svg" alt="">
                            <h4><?php echo $flexibilidad?></h4>
                            <p><?php echo $textoFlexibilidad; ?></p>

                            <!-- modal -->
                            <div class="verMas">
                            <div id="fle" class="modal">
                                <h4><?php echo $flexibilidad;?></h4>
                                <p>
                                    <?php echo $textoFlexibilidad; ?>
                                </p>
                            </div>
                            <p><a href="#fle" rel="modal:open"><?php echo $verMas; ?></a></p>
                            </div>
                        </div>
                        </div>
                        <div class="slide">
                        <div class="tarjeta">
                            <img src="img/apreton-de-manos.svg" alt="">
                            <h4><?php echo $compromiso; ?></h4>
                            <p><?php echo $textoCompromiso; ?></p>

                            <!-- modal -->
                            <div class="verMas">
                            <div id="com" class="modal">
                                <h4><?php echo $compromiso; ?></h4>
                                <p>
                                <?php echo $textoCompromiso; ?>
                                </p>
                            </div>
                            <p><a href="#com" rel="modal:open"><?php echo $verMas; ?></a></p>
                            </div>
                        </div>
                        </div>

                    </div>

                    <div class="btn-anterior" id="btn-anterior">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="btn-siguiente" id="btn-siguiente">
                        <i class="fas fa-arrow-right"></i>
                    </div>
            </div>
        </section>

        <!-- Sobre nosotros -->
        <section class="sobre-nosotros" id="sobre-nosotros">
            <div class="contenedor">
            <div class="titulo-section">
                <h2><?php echo $titSobreNosotros; ?></h2>
            </div>
            <div class="texto-sobre-nosotros">
                <p>
                    <?php  echo $textoUno;?>
                </p>
                <p>
                    <?php  echo $textoDos;?>
                </p>
                <p>
                    <?php  echo $textoTres;?>
                </p>
                <p>
                    <?php  echo $textoCuatro;?>
                </p>
            </div>
            </div>

        </section>

        <!-- equipo -->
        <section class="equipo" id="equipo">
            <div class="contenedor">
                <div class="titulo-section">
                    <h2><?php echo $titEquipo; ?></h2>
                </div>
                <div class="integrantes">

                    <div class="persona">
                        <div class="foto">
                            <img src="img/caro.jpg" alt="Integrante">
                        </div>

                        <div class="texto">
                            <h3><?php echo $trCaro; ?></h3>
                            <h4><?php echo $profesionCaro; ?></h4>
                            <p id="efectoCaro">
                                <?php echo $descripcionCaro; ?>
                            </p>
                        </div>
                        <p><a id="botonCaro"><?php echo $verMas; ?></a></p>

                    </div>

                    <div class="persona">
                        <div class="foto">
                            <img src="img/karina.jpg" alt="Integrante">
                        </div>
                        <div class="texto">
                                <h3><?php echo $trKari; ?></h3>
                                <h4><?php echo $profesionKari; ?></h4>
                                <p id="efectoKari">
                                    <?php echo $descripcionKari; ?>
                                </p>
                        </div>
                        <p><a id="botonKari"><?php echo $verMas; ?></a></p>
                        
                    </div>

                    </div>
            </div>
        </section>

        <!-- contacto -->
        <section class="contacto" id="contacto" data-parallax="scroll" data-image-src="img/contacto2.jpg">
            <div class="contenedor">

            <div class="contenedor-formulario">
                <div class="formulario" id="formulario">
                <h2> <?php echo $titProyecto; ?></h2>

                <form action="enviar.php" method="POST">
                    <div>
                    <input type="text" name="nombre" value="" placeholder="<?php echo $placeNombre;  ?>" id="nombre">
                    <p class="error"><?php echo $errorNombre;  ?></p>
                    </div>
                    <div>
                    <input type="email" name="email" value="" placeholder="<?php echo $placeCorreo;  ?>" id="email">
                    <p class="error"><?php echo $errorCorreo;  ?></p>
                    </div>
                    <div>
                    <textarea name="mensaje" placeholder="<?php echo $placeMensaje;  ?>" id="mensaje"></textarea>
                    <p class="error"><?php echo $errorConsulta;  ?></p>
                    </div>

                    <div>
                    <input type="submit" name="Enviar" value="<?php echo $enviar;  ?>">
                    </div>
                </form>

                </div>
                <div class="foto">

                </div>
            </div>
            </div>
        </section>

        <!-- seccion CLIENTES -->
        <section class="contenedor-slider" id="clientes">
            <div class="contenedor">

                <div class="titulo-slider">
                    <h2 class="animated fadeInDown"><?php echo $titClientes;    ?></h2>
                </div>
                <div class="slider" id="sliderClientes">

                        <div class="slide">
                            <div class="tarjeta">
                                
                                <h4><?php echo $petFood; ?></h4>
                                <p><?php echo $textoPet; ?></p>

                                <img src="img/clientes/dianaPetFood.jpg" alt="">

                                <!-- modal -->
                                <div class="verMas">
                                    <div id="pet" class="modal">
                                    <h4><?php echo $petFood; ?></h4>
                                    <p>
                                        <?php echo $textoPet; ?>
                                    </p>
                                    </div>
                                    <p><a href="#pet" rel="modal:open"><?php echo $verMas; ?></a></p>
                                </div>

                            </div>
                        </div>
                        <div class="slide">
                            <div class="tarjeta">
                                
                                <h4><?php echo $petTorres?></h4>
                                <p>
                                    <?php echo $textoTorres ;?>
                                </p>

                                <img src="img/clientes/pet.png" alt="">

                                <!-- modal -->
                                <div class="verMas">
                                <div id="torres" class="modal">
                                    <h4><?php echo $petTorres?></h4>
                                    <p>
                                    <?php echo $textoTorres ;?>
                                    </p>
                                </div>
                                <p><a href="#torres" rel="modal:open"><?php echo $verMas; ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="tarjeta">
                                
                                <h4><?php echo $geet?></h4>
                                <p><?php echo $textoGeet; ?></p>

                                <!-- <img src="img/clientes/Geet.jpg" alt=""> -->

                                <!-- modal -->
                                <div class="verMas">
                                <div id="geet" class="modal">
                                    <h4><?php echo $geet;?></h4>
                                    <p>
                                        <?php echo $textoGeet; ?>
                                    </p>
                                </div>
                                <p><a href="#geet" rel="modal:open"><?php echo $verMas; ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="tarjeta">
                                
                                <h4><?php echo $mauricio; ?></h4>
                                <p><?php echo $textoMauricio; ?> </p>

                                <!-- <img src="img/apreton-de-manos.svg" alt=""> -->

                                <!-- modal -->
                                <div class="verMas">
                                <div id="mau" class="modal">
                                    <h4><?php echo $mauricio; ?></h4>
                                    <p>
                                    <?php echo $textoMauricio; ?> 
                                    </p>
                                </div>
                                <p><a href="#mau" rel="modal:open"><?php echo $verMas; ?></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="slide">
                            <div class="tarjeta">
                                
                                <h4><?php echo $king; ?></h4>
                                <p><?php echo $textoKing; ?> </p>

                                <!-- <img src="img/apreton-de-manos.svg" alt=""> -->

                                <!-- modal -->
                                <div class="verMas">
                                <div id="king" class="modal">
                                    <h4><?php echo $king; ?></h4>
                                    <p>
                                    <?php echo $textoKing; ?> 
                                    </p>
                                </div>
                                <p><a href="#king" rel="modal:open"><?php echo $verMas; ?></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="slide">
                            <div class="tarjeta">
                                
                                <h4><?php echo $elena; ?></h4>
                                <p><?php echo $textoElena; ?> </p>

                                <!-- <img src="img/apreton-de-manos.svg" alt=""> -->

                                <!-- modal -->
                                <div class="verMas">
                                <div id="elena" class="modal">
                                    <h4><?php echo $elena; ?></h4>
                                    <p>
                                    <?php echo $textoElena; ?> 
                                    </p>
                                </div>
                                <p><a href="#elena" rel="modal:open"><?php echo $verMas; ?></a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-anterior" id="btn-anterior-clientes">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="btn-siguiente" id="btn-siguiente-clientes">
                        <i class="fas fa-arrow-right"></i>
                    </div>
            </div>
        </section>





      
    




    </section>

    <!-- pie de pagina -->
    <footer>
      <div class="copy">
        <p><?php echo $miembro; ?></p>
      </div>
      <div class="footer-miembro-de">
            <div class="miembro">
                <img src="img/logos/pleca.png" alt="">
            </div>
            <div class="miembro">
                <img src="img/logos/ata.png" alt="">
            </div>
            <div class="miembro">
                <img src="img\logos\logo_aati_color.svg" alt="">
            </div>
            <div class="miembro">
                <img src="img\logos\proz-logo.png" alt="">
            </div>
            <div class="miembro">
                <img src="img\logos\sdl.png" alt="">
            </div>
        </div>
      <div class="derechos">
        <p>&copy;<?php echo $derechos; ?></p>
      </div>
    </footer>

    
    




     <!-- modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/scrollSuave.js"></script>
  <script src="js/stickyHeader.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/sliderClientes.js"></script>
  <script src="js/validacion.js"></script>
  <script src="js/menu-movil.js"></script>
  <script >
      $('#btn').click(function(){
        $('#modal').modal();
      });
  </script>
  
  
  <script src="js/efectos.js"></script>
  <script src="js/banner.js"></script>
  <script type="text/javascript" src="js/prefix.min.js"></script>
  <script></script>
    
</body>
</html>