<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRANCO'S</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/logo.css">
</head>
<body bgcolor="gray">

<?php
        include "conex.php";
        $link=Conectarse();
         

        $resultado_uno=mysqli_query($link,"SELECT * FROM t_interfaz WHERE itz_id = 3 ");
        $resultado_dos=mysqli_query($link,"SELECT * FROM t_interfaz WHERE itz_id = 5 ");

        $resultado_row_uno = mysqli_fetch_array($resultado_uno);
        $resultado_row_dos = mysqli_fetch_array($resultado_dos);

            $nombre_uno = $resultado_row_uno['nombre'];
            $titulo_uno = $resultado_row_uno['titulo'];
            $contenido_uno = $resultado_row_uno['contenido'];
            $imagen_uno = $resultado_row_uno['imagen'];      
            
            $nombre_dos = $resultado_row_dos['nombre'];
            $titulo_dos = $resultado_row_dos['titulo'];
            $contenido_dos = $resultado_row_dos['contenido'];
            $imagen_dos = $resultado_row_dos['imagen'];   
    ?>

<header id="header" >
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                <div class="navbar-brand">
                    <a href="index.php"><img src="img/francos.png" id="logo1" height="100px"> <h1 class="text-info"> </h1></a>
                    </div>
                
                    <div class="menu">
                        <ul class="nav nav-tabs" role="tablist">
                       

                            <li role="presentation" ><a href="index.php" class="active" > Inicio</a></li>
                            <li role="presentation"><a href="nosotros.html"> Nosotros</a></li>
                            <li role="presentation"><a href="reparaciones.html">Reparaciones</a></li>
                            <li role="presentation"><a href="refacciones.php">Refacciones</a></li>
                            <li role="presentation"><a href="login.php">Log in</a></li>
                             
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <br>
    <br>

    <br>
    <br>
    <br>

      <!--
        <header>       
        <div style="position: relative; top: 0px; width:100%; height: 7%;">
            <nav class="navbar navbar-expand-lg navbar-light" style="height: 7rem; background-color: rgb(214, 0, 0);">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="font-weight: bold; font-size: 2rem;">FRANCO'S</a>
              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="margin-left: 52rem;">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="nosotros.html">Nosotros</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="reparaciones.html">Reparaciones</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="refacciones.php">Refacciones</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="login.php">Ingresar</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>
        </header>
-->

<div class="slider" class="p-3 mb-2 bg-light text-dark">
        <div id="about-slider">
            <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/reparaciones.jpg" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                                <h2>¡La mayor seguridad!</h2>

                            </div>

                            <div class="col-md-10 col-md-offset-1">
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                    
                                    <p>Tu auto nunca había estado tan seguro.</p>
                                

                                </div>
                            </div>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                                <form class="form-inline">


                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/portada.jpg" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                                <h2>¡La mejor opción!</h2>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                    
                                    <p>Con nosotros, tu auto está en las mejores manos.</p>
                                    
                                </div>
                            </div>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <!--
                                        <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button> -->
                                    </div>
                                    <div class="form-group">
                                        <!--
                                        <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/taller6.jpg" class="img-responsive" alt="">
                        <div class="carousel-caption">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                                <h2>¡Siempre a tiempo!</h2>
                            </div>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                                    
                                    <p>En taller FRANCO'S siempre tendrás tu auto a tiempo.</p>
                                    
                                </div>
                            </div>
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <!--  -->
                                        <!--<button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required">Live Demo</button>-->
                                    </div>
                                    <div class="form-group">
                                        <!-- <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Get Now</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>

                <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <!--/#carousel-slider-->
        </div>
        <!--/#about-slider-->
    </div>
    <!--/#slider-->

<!--
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="position: relative;">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/reparaciones.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:rgb(0, 60, 255); font-weight: bold; text-align: left; font-size: 4rem; top: -21rem; position: absolute; left: -9rem;">La mayor seguridad</h5>
                    <p style="color: rgb(255, 73, 73); font-weight: bold; text-align: left; font-size: 1.5rem; top: -16rem; position: absolute; left: -9rem;">Tu auto nunca había estado tan seguro.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/portada.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:rgb(0, 60, 255); font-weight: bold; text-align: right; font-size: 4rem; top: -25rem; position: absolute; right: -9rem;">La mejor opción</h5>
                    <p style="color: rgb(255, 73, 73); font-weight: bold; text-align: right; font-size: 1.5rem; top: -19rem; position: absolute; right: -9rem;">Con nosotros, tu auto está en las mejores manos.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/taller6.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5 style="color:rgb(0, 60, 255); font-weight: bold; text-align: left; font-size: 4rem; top: -28rem; position: absolute; left: -9rem;">Siempre a tiempo</h5>
                    <p style="color: rgb(255, 73, 73); font-weight: bold; text-align: left; font-size: 1.5rem; top: -22rem; position: absolute; left: -9rem;">En taller FRANCO'S siempre tendrás tu auto a tiempo.</p>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
-->

<div class="services" class="p-3 mb-2 bg-light text-dark">
        <div class="container">
            <div class="text-center">
                <h2><?php echo $titulo_uno;?></h2>
                <p><?php echo $contenido_uno;?></p>
                <br>
                <h2>Somos especialistas en fallas de motores a gasolina, transmisiones, direcciones, frenos, etc.</h2>

                <p>Brindamos servicio a particulares, flotillas y entidades gubernamentales. 
            Podemos proporcionar un servicio en promedio de 12 unidades diarias. 
            Nuestros servicios incluyen:</p>
            </div>
            <br>
            <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <i ></i>
                <h3>Servicio mecánico en general</h3>
                <p align="Justify">Las tecnologías móviles ya han sido una parte indispensable de nuestra vida cotidiana. La comunicación móvil se está volviendo cada vez más importante dentro del contexto de la industria 4.0 .</p>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <i ></i>
                <h3>Análisis de gases de escape para verificación ambiental</h3>
                <p align="Justify">Esta tecnología permite, de forma remota, procesar datos y acceder a archivos y software a través de internet, con el cloud computing no es tener gran infraestructura para guardar grandes cantidades de información o instalar programas
                    en una computadora. </p>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                <i ></i>
                <h3>Revisión de monitores para verificación ambiental</h3>
                <p align="Justify">Una mayor conectividad provocada por la industria 4.0 requiere una mayor atención de seguridad ya que, la cuarta revolución industrial es un arma de doble filo que los paises y las empresas deben de usar con responsabilidad.</p>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <i </i>
                <h3>Afinación de inyección electrónica de combustible</h3>
                <p align="Justify">La búsqueda hoy en día es la tecnología original de Big Data e IoT y la industria 4.0 creeran grandes cantidades de datos. Sí los dispositivos inteligentes son los dedos , los brazos e internet es el sistema nervioso, entonces la búsqueda
                    es el cerebro detrás de la industria 4.0</p>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
           
            <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <br>
                <br>
                <img src="img/copia_01.jpg" alt="">
                
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <i ></i>
                <h3>Reparación de motores</h3>
                <p align="Justify">Esta tecnología permite, de forma remota, procesar datos y acceder a archivos y software a través de internet, con el cloud computing no es tener gran infraestructura para guardar grandes cantidades de información o instalar programas
                    en una computadora. </p>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                <i ></i>
                <h3>Reparación de turbocargadores</h3>
                <p align="Justify">Una mayor conectividad provocada por la industria 4.0 requiere una mayor atención de seguridad ya que, la cuarta revolución industrial es un arma de doble filo que los paises y las empresas deben de usar con responsabilidad.</p>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <br>
                <br>
                <img src="img/copiataller5.jpg" alt="">
            </div>
        </div>
    </div>
    <br><br><br><br><br> 

    <footer>
        <div class="container">
            <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h4>Acerca de nosotros</h4>
                <p>Empresa dedicada la reparacion de automoviles para su beneficio común</p>
                <div class="contact-info">
                    <ul>
                        <li><i class="fa fa-home fa"></i>Calle 21 sur 908 barrio de Santiago Puebla Pue. </li>
                        
                        <li><i class="fa fa-envelope fa"></i> martin.toral@upaep.edu.mx</li>
                        <li><i class="fa fa-envelope fa"></i> erickgeovanni.ramos@upaep.edu.mx</li>
                        <li><i class="fa fa-envelope fa"></i> carlososvaldo.saavedra@upaep.edu.mx</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="text-center">
                
                    
                </div>
            </div>

            <div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
            <h4>Informacion:</h4>
                <p>MAs informacion por favor ingresar al sistema de Login donde podra encontrar distintas opciones para el mejor control de su auto</p>
                <div class="form-group">
                                       <a href="http://proydweb.com/proyectos/Francos/nosotros.html" class="btn bs-tooltip-bottom">Informacion</a> 
                                    </div>
                    
                    

                </div>
            </div>

        </div>
    </footer>
    <div class="sub-footer">
        <div class="container">
            <div class="social-icon">
                <div class="col-md-4">
                    <ul class="social-network">
                        <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-4">
                <div class="copyright">
                    &copy; proydeWeb. Todos los derechos reservados.
                    <div class="credits">

                        <a href="#">Made</a> by <a href="#">Equipo de Martin - Erick - Carlos</a>
                        <a href=""></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
           

             

    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW({}).init();
    </script>
</body>
</html>