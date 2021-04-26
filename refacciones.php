<?php function crearTarjeta(array $row) { ?>    
  <div class="col-md-4" style="padding-top: -20; padding-bottom: 30;">
      <div class="card border-dark mb-3">
          <img height="250"
                 width="250"
                 class="card-img-top"
                 src="<?php echo "img/" . $row["imagen"]; ?>">
          <div class="card-body card-footer">
                <h5 class="card-title"><?= $row["nombre"] ?></h5>
                <p class="card-text">Descripción : <?= $row["descripcion"] ?></p>
          </div>
      </div>
  </div>

<?php }?> 
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link href="fontawesome-free-5.13.0-web/js/all.js" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/logo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
        $(".loader").fadeOut("slow");
  });
</script>
	<title> Procesar datos </title>
    </head>
    <body >
    <div class="loader"></div>

    <header id="header" style="position: static">
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
                       

                            <li role="presentation" ><a href="index.php"  > Inicio</a></li>
                            <li role="presentation"><a href="nosotros.html"> Nosotros</a></li>
                            <li role="presentation"><a href="reparaciones.html">Reparaciones</a></li>
                            <li role="presentation"><a href="refacciones.php" class="active">Refacciones</a></li>
                            <li role="presentation"><a href="login.php">Log in</a></li>
                             
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    
   

    <!--

    <header>       
        <div  style="position: absolute; top: 0px; width:100%; height: 7%;">
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
        <br><br><br><br><br>
-->

        <div class="jumbotron jumbotron-fluid" style="padding: 20;">
            <div class="row">
                
              
        <?php

        include "conex.php";
        $link=Conectarse();

        $sql  = "SELECT nombre, descripcion, imagen FROM t_refaccion";
        $stmt = mysqli_stmt_init($link);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "error";
        } else {
            mysqli_stmt_execute($stmt);
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    crearTarjeta($row);
                }
            }
        }
        $conn->close();
        ?>
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
        
        </div>
        
        
      </div>
      
      
    <a href="index.html" class="btn btn-outline-danger" color:blue; "> Salir </a>
    
    </body>
    
    
</html>
