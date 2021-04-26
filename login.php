<html>
    <head>
            <meta charset="UTF-8">
    <title>FRANCO'S</title>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
        <link rel="stylesheet" href="css/style.css">

        <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/logo.css">
    </head>
    <body class="container-login100" style="background-image: url('img/bg-01.jpg');">

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
                       

                            <li role="presentation" ><a href="index.php"  > Inicio</a></li>
                            <li role="presentation"><a href="nosotros.html"> Nosotros</a></li>
                            <li role="presentation"><a href="reparaciones.html">Reparaciones</a></li>
                            <li role="presentation"><a href="refacciones.php">Refacciones</a></li>
                            <li role="presentation"><a href="login.php" class="active">Log in</a></li>
                             
                            
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
        <div style="position: fixed; top: 0px; width:100%; height: 7%;">
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
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Ingresar</h5>
            <form class="needs-validation form-signin" method="POST" action="validar.php" name="fvalida" novalidate>
              <div class="form-label-group">
                <input type="email" name="correo" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Correo electrónico</label>
                <div class="invalid-feedback">Complete el campo</div> 
              </div>

              <div class="form-label-group">
                <input type="password" name="contrasena" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Contraseña</label>
                <div class="invalid-feedback">Complete el campo</div> 
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="reset">Restablecer</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>