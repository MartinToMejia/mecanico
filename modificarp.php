<?php include ("seguridad.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRANCO'S</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

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
    <link href="fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link href="fontawesome-free-5.13.0-web/js/all.js" rel="stylesheet">

</head>
<body class="p-3 mb-2 bg-secondary text-white">

    <?php
        include "conex.php";
        $link=Conectarse();
        

        $email = $_POST["email"];  

        $resultado=mysqli_query($link,"SELECT * FROM t_proveedor WHERE email = '$email'");

        $resultado_row = mysqli_fetch_array($resultado);

            $correo = $resultado_row['email'];
            $nommbre = $resultado_row['nombre'];
            $calle_1 = $resultado_row['calle1'];
            $calle_2 = $resultado_row['calle2'];
            $ciudad = $resultado_row['ciudad'];
            $colonia = $resultado_row['colonia'];
            $estado = $resultado_row['estado'];
            $cp = $resultado_row['codigo_postal'];
            $celularuno = $resultado_row['num_tel1'];
            $celulardos = $resultado_row['num_tel2'];
        
    ?>

    <h1>Modificar proveedor</h1>

    <table width="100%">
        <tr>
            <td> <img src="img/portada.jpg" height="250" width="100%"></td>
        </tr>
    </table>

    <main> 
        <h2>Cambia los campos que deseas del proveedor</h2>

        <!-- -->
        <form method="POST" name="fvalida" action="modproveedor.php" class="needs-validation" novalidate>
            <p class="text-danger"> <strong> (*) Campos obligatorios </strong> </p>

            <!-- NOMBRE-->
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="nombre" id="nombre" placeholder="nombre" class="form-control" value="<?php echo $nommbre; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- EMAIL-->
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email (*):</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="correo electronico" value="<?php echo $correo; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>
        
            <!-- CALLE UNO-->
            <div class="form-group row">
                <label for="calle_uno" class="col-sm-2 col-form-label">Calle uno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="calle_uno" id="calle_uno" placeholder="calle uno" class="form-control" value="<?php echo $calle_1; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- CALLE DOS-->
            <div class="form-group row">
                <label for="calle_dos" class="col-sm-2 col-form-label">Calle dos:</label>
                <div class="col-sm-10">

                    <input type="text" name="calle_dos" id="calle_dos" placeholder="calle dos" class="form-control" value="<?php echo $calle_2; ?>">
                </div>
            </div>

            <!-- CIUDAD-->
            <div class="form-group row">
                <label for="ciudad" class="col-sm-2 col-form-label">Ciudad (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="ciudad" id="ciudad" placeholder="ciudad" class="form-control" value="<?php echo $ciudad; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- COLONIA-->
            <div class="form-group row">
                <label for="colonia" class="col-sm-2 col-form-label">Colonia (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="colonia" id="colonia" placeholder="colonia" class="form-control" value="<?php echo $colonia; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- ESTADO-->
            <div class="form-group row">
                <label for="colonia" class="col-sm-2 col-form-label">Estado (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="estado" id="estado" placeholder="estado" class="form-control" value="<?php echo $estado; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- CODIGO POSTAL-->
            <div class="form-group row">
                <label for="codigo_postal" class="col-sm-2 col-form-label">Código postal (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="codigo_postal" id="codigo_postal" placeholder="código postal" class="form-control" value="<?php echo $cp; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

             <!-- TELEFONO 1-->
             <div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono uno (*):</label>
                <div class="col-sm-10">

                    <input type="tel" name="telefono_1" id="telefono_1" placeholder="teléfono uno" class="form-control" value="<?php echo $celularuno; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

             <!-- TELEFONO 2-->
             <div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono dos (*):</label>
                <div class="col-sm-10">

                    <input type="tel" name="telefono_2" id="telefono_2" placeholder="teléfono dos" class="form-control" value="<?php echo $celulardos; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-10">
                <button type="button" class="btn btn-danger" value="Cancelar" onclick=history.back()>Salir</button>
                    <button type="reset" class="btn btn-warning">Restablecer</button>
                    <button type="submit" class="btn btn-success" value="Registrar proveedor">Actualizar</button>
                </div>
            </div>
        </form>

    </main>

</body>
</html>