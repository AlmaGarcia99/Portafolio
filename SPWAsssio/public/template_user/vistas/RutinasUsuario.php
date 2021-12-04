<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Spasssio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
        <meta property="og:title" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">

        <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
        <link href="favicon.ico" rel="shortcut icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../lib/animate-css/animate.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="../css/style.css" rel="stylesheet">

        <!-- audioflotante -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/estilos.css">

        <link rel="icon" href="http://nubecolectiva.com/blog/wp-content/uploads/2017/09/cropped-favicon-1-32x32.png">

        <!--boton flotante-->
        <link rel="stylesheet" href="../css/btf.css">


        <link rel="stylesheet" href="../css/modal.css">

        <!--timer 8 tiempos-->
        <link rel="stylesheet" href="../css/style8t.css">



        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    </head>
    <body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
        <div id="preloader"></div>


        <!--==========================
        Sección de encabezado
        ============================-->
        <header id="header">
            <div class="container">
                <div id="logo" class="pull-left">
                    <a href="../InicioUsuario.php"><img src="../img/logo.png" alt="" title="" /></img></a>
                    <!-- Descomenta abajo si prefieres usar una imagen de texto -->
                    <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="../InicioUsuario.php">Inicio</a></li>
                        <li><a href="RecordatoriosUsuario.php">Recordatorios</a></li>
                        <li><a href="AjustesUsuario.php">Ajustes</a></li>
                        <li><a href="ProgresosUsuario.php">Mi progreso</a></li>
                        <li><a href="LogrosUsuario.php">Mis logros</a></li>
                         <li class="dropdown user user-menu">
              <?php
        		    include_once'../funciones/funciones.php';
        		    if($conn->connect_errno){
        		        echo "Error de conexion de la base datos".$conn->connect_error;
        		        exit();
        		    }
                $sql = "SELECT * FROM usuario WHERE usu_id='" . $_SESSION[ "idUsuario" ] . "'";

        		$resultado = $conn->query($sql);
        	  
               while($datos=$resultado->fetch_array()){
            ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../<?php echo $datos["foto"];?>" alt="User Image" width="30" height="30">
              <span class="hidden-xs"><?php echo $datos["usu_nombre"];?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              
              <li class="user-header">
                <img src="../../<?php echo $datos["foto"];?>">

                <p>
                  <?php echo $datos["usu_nombre"];?> 
                </p>
              </li>
              <?php
              }
              ?>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../controlador/usuario/controlador_cerrar_session.php" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </header>
        <!-- #header -->



        <!--==========================
        Rutinas Section
        ============================-->
        <section id="testimonials">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Tus Rutinas</h3>
<!--
                        <div class="calentamiento"></div>
                        <div class="elevacionCorporal"></div>
-->
                        <div class="section-title-divider"></div>

                        <div class="container" align="center">
                            <div class="row">

                                <div class="contenedor_video">

                                    <div class="video"> <!-- escribe video en la clase y verás la magía -->

                                        <div class="btn_cerrar"> x </div>

                                        <video class="vid" controls>
                                            <source src="../video/audio.mp3" type="audio/mp3">
                                            Tu navegador no soporta Videos HTML, por favor usa un navegador moderno.
                                        </video> 

                                    </div>

                                </div>
                            </div>
                        </div>
                        <center><h1>Para hacer flotante el video, tiene que reproducirlo primero</h1></center>
                        <div class="container" align="center">
                            <div class="row">

                                <div class="contenedor_video">

                                    <div class="video"> <!-- escribe video en la clase y verás la magía -->

                                        <div class="btn_cerrar"> x </div>

                                        <video class="vid" controls>
                                            <source src="../video/video.mp4" type="video/mp4">
                                            Tu navegador no soporta Videos HTML, por favor usa un navegador moderno.
                                        </video> 

                                    </div>

                                </div>
                            </div>
                        </div>

                        <center><h1>Video de calentamiento</h1>
                            <iframe width="250" height="150" src="https://www.youtube.com/embed/uNeIBIHYAGg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </center>
                        <center><h1>Video de relajación</h1>
                            <iframe width="250" height="150" src="https://www.youtube.com/embed/ZAbls6xmkUk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </center>
                    </div>
                </div>
            </div>

            <!--==========================
            Rutinas Section imagenes
            ============================-->           
            <div class="content-wrapper">
                <?php
        		    include_once'funciones/funciones.php';
        		    if($conn->connect_errno){
        		        echo "Error de conexion de la base datos".$conn->connect_error;
        		        exit();
        		    }
                $sql = "SELECT * FROM rutinas WHERE usu_id='" . $_SESSION[ "idUsuario" ] . "'";

        		$resultado = $conn->query($sql);
        	  
               while($datos=$resultado->fetch_array()){
            ?>
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        
                        <div class="panel panel-info">
                            
                            <div class="panel-heading">
                                <h3 class="text-center"><strong><?php echo $datos["titulo1"];?></strong></p></h3>
                            </div>
                            <div class="panel-body text-center">
                                <center><img  style="width:150px; height:150px;" src="../../<?php echo $datos["imagen1"];?>" class="img-responsive"></center>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">

                                    <p style="text-align:center"><?php echo $datos["descripcion1"];?></p>

                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="text-center"><strong>2 Flexión lateral, manos agarradas</strong></h3>
                            </div>
                            <div class="panel-body text-center">
                                <center>
                                    <img  style="width:150px; height:150px;" src="../img/rutina2.gif" class="img-responsive">
                                </center>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">
                                    <p style="text-align:center">Flexión lateral del tronco agarrándose las manos todo el tiempo y moviendo brazos como se muestra</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="text-center"><strong>3.- Flexión lateral y tocar el piso</strong></h3>
                            </div>
                            <div class="panel-body text-center">
                                <center>
                                    <img  style="width:150px; height:150px;" src="../img/rutina3.gif" class="img-responsive">
                                </center>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">
                                    <p style="text-align:center">Flexión lateral de tronco con movs de brazo, luego bajarlas y tocar rodillas, posteriormente flexionar rodillas y tocar el piso para regresar a tocar rodillas con las manos y flexión lateral al otro lado</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="text-center"><strong>4.- Desplaz lat con manos agarradas</strong></h3>
                            </div>
                            <div class="panel-body text-center">
                                <center>
                                    <img  style="width:150px; height:150px;" src="../img/rutina4.gif" class="img-responsive">
                                </center>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">
                                    <p style="text-align:center">Desplazamiento lateral con 1 o 2 saltos laterales estirando los brazos con las manos agarradas y flexionando tronco, luego 1 o 2 saltos para el otro lado realizando el mismo movimiento para el otro lado</p>
                                </li>
                            </ul>
                        </div>
                    </div>   
                    <div class="col-md-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="text-center"><strong>5.- Abrir y cerrar con brincos</strong></h3>
                            </div>
                            <div class="panel-body text-center">
                                <center>
                                    <img  style="width:150px; height:150px;" src="../img/rutina5.gif" class="img-responsive">
                                </center>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">
                                    <p style="text-align:center">Abrir y cerrar piernas con brincos como se muestra. Si hay dolor de espalda evita el impacto y haz desplazamientos laterales como la rutina anterior</p>
                                </li>
                            </ul>
                        </div>
                    </div> 
                </div>

                <center>
                    <div class="contenedor-imagenes">
                        <img  style="width:100px; height:100px;" src="../img/rutina1.gif" > 
                        <img  style="width:100px; height:100px;" src="../img/rutina2.gif" >
                        <img  style="width:100px; height:100px;" src="../img/rutina3.gif" >
                    </div>
                    <div class="contenedor-imagenes">
                        <img  style="width:100px; height:100px;" src="../img/rutina4.gif" >
                        <img  style="width:100px; height:100px;" src="../img/rutina5.gif" >
                         <?php
                    }
                  ?>
                    </div>
                </center>
            </div>
                </div>


            <!--
                        ventana flotante
            -->

            <div class="window-notice" id="window-notice">
                <div class="content">
                    <div class="content-text" align="center">Recuerda calificar tu rutina.
                        <!-- <img src="../img/caritas.png" width="190" height="100"> -->
                        <img src="../img/c1.png" >
                        Bueno
                        <img src="../img/c2.png">
                        Medio 
                        <img src="../img/c3.png">
                        Malo
                    </div>
                    <div class="content-buttons"><a href="#" id="close-button">Aceptar</a></div>
                </div>
            </div>

        </section>
        <div class="contenedor">           
            <input type="checkbox" id="btn-mas">
            <div class="redes">
                <a href="" class="fa fa-check"></a>
                <a href="https://docs.google.com/forms/d/14zgiksw7JjVU1da3RuTwuJa2KapZwRy3YhbWwR5pSSg/edit?usp=drivesdk" class="fa fa-google"></a>
            </div>
            <div class="btn-mas">
                <h1>!!Evaluate</h1>
                <label for="btn-mas" class="fa fa-plus"></label>
            </div>
        </div>
        <!--==========================
        Footer
      ============================-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            &copy; Copyright <strong>Spasssio</strong>. Todos los derechos reservados
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Required JavaScript Libraries -->
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../lib/superfish/hoverIntent.js"></script>
        <script src="../lib/superfish/superfish.min.js"></script>
        <script src="../lib/morphext/morphext.min.js"></script>
        <script src="../lib/wow/wow.min.js"></script>
        <script src="../lib/stickyjs/sticky.js"></script>
        <script src="../lib/easing/easing.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../../js/usuario.js"></script>
        <script src="../js/ventanaF.js"></script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.16/d3.min.js'></script><script  src="../js/script8t.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script  src="../js/app.js"></script>
    </body>
</html>
