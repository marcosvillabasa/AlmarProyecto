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
  <link rel="stylesheet" href="/css/animaciones.css">

  <!-- modal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


  <!-- bootstrap -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->


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
                    <p><?php echo $textoCompromiso; ?> del cliente, desde el inicio, en su primer contacto, hasta la instancia de publicación. La dedicación, la previsión y la proactividad está en nuestro ADN. Traducimos con pasión, comprensión y responsabilidad. </p>

                    <!-- modal -->
                    <div class="verMas">
                    <div id="com" class="modal">
                        <h4><?php echo $compromiso; ?></h4>
                        <p>
                        <?php echo $textoCompromiso; ?> del cliente, desde el inicio, en su primer contacto, hasta la instancia de publicación. La dedicación, la previsión y la proactividad está en nuestro ADN. Traducimos con pasión, comprensión y responsabilidad.
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




    </section>

    
    




     <!-- modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/scrollSuave.js"></script>
  <script src="js/stickyHeader.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/validacion.js"></script>
  <script src="js/menu-movil.js"></script>
  <script >
      $('#btn').click(function(){
        $('#modal').modal();
      });
  </script>
  <!-- swal -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <!-- masonry -->
  <script src="plugins\masonry.pkgd.min.js"></script>
  <script src="js/masonry.js"></script>

  <!-- <script src="js/banner.js"></script> -->
  <script type="text/javascript" src="js/prefix.min.js"></script>
  <script></script>
    
</body>
</html>