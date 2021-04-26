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

        $resultado=mysqli_query($link,"SELECT * FROM t_empleado WHERE email = '$email'");

        $resultado_row = mysqli_fetch_array($resultado);

            $celular = $resultado_row['num_tel'];
            $correo = $resultado_row['email'];
            $nommbre = $resultado_row['nombre'];
            $apellido_paterno = $resultado_row['apellidop'];
            $apellido_materno = $resultado_row['apellidom'];
            $empleado = $resultado_row['tipo_empleado'];
            $calle_1 = $resultado_row['calle1'];
            $calle_2 = $resultado_row['calle2'];
            $ciudad = $resultado_row['ciudad'];
            $colonia = $resultado_row['colonia'];
            $cp = $resultado_row['codigo_postal'];
            $fecha_ingreso = $resultado_row['fecha_ingreso'];
            $salario = $resultado_row['salario'];
            $contrasena = $resultado_row['contrasena'];
        
    ?>

    <h1>Modificar empleado</h1>

    <table width="100%">
        <tr>
            <td> <img src="img/portada.jpg" height="250" width="100%"></td>
        </tr>
    </table>

    <main> 
        <h2>Modificar datos del empleado</h2>

        <form method="POST" name="fvalida" enctype="multipart/form-data" action="modempleado.php" class="needs-validation" novalidate>
            <p class="text-danger"> <strong> (*) Campos obligatorios </strong> </p>

            <!-- ANOMBRE-->
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="nombre_empleado" id="nombre_empleado" value="<?php echo $nommbre ?>" placeholder="nombre" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>
            <!-- APELLIDO PATERNO-->
            <div class="form-group row">
                <label for="apellido_paterno" class="col-sm-2 col-form-label">Apellido paterno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="apellido_paterno_empleado" id="apellido_paterno_empleado" value="<?php echo $apellido_paterno ?>" placeholder="apellido paterno" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>
            <!-- APELLIDO MATERNO-->
            <div class="form-group row">
                <label for="apellido_materno" class="col-sm-2 col-form-label">Apellido materno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="apellido_materno_empleado" id="apellido_materno_empleado" placeholder="apellido materno" value="<?php echo $apellido_materno ?>" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>
            <!-- EMAIL-->
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email (*):</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email_empleado" name="email_empleado" value="<?php echo $email ?>" placeholder="correo electronico" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>
            <!-- TIPO DE CLIENTE-->
            <div class="form-group">
                <label for="tipo_empleado">Tipo de Empleado (*): <br></label> <br>
                <select class="custom-select" name="tipo_empleado" id="tipo_empleado" required>        
                    <option value="<?php echo $empleado; ?>"><?php echo $empleado; ?></option>
                    <option value="particular">  Ayudante </option>
                    <option value="empresa"> Mecanico encargado</option>
                    <option value="empresa">  Supervisor </option>
                </select>
                <div class="invalid-feedback">Complete el campo</div> 
            </div>
            <br>

            <!-- TELEFONO-->
            <div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono (*):</label>
                <div class="col-sm-10">

                    <input type="tel" name="telefono_empleado" id="telefono_empleado" value="<?php echo $celular ?>" placeholder="teléfono" value="<?php echo $celular ?>" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- CALLE UNO-->
            <div class="form-group row">
                <label for="calle_uno" class="col-sm-2 col-form-label">Calle uno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="calle_uno_empleado" id="calle_uno_empleado" value="<?php echo $calle_1 ?>" placeholder="calle uno" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- CALLE DOS-->
            <div class="form-group row">
                <label for="calle_dos" class="col-sm-2 col-form-label">Calle dos:</label>
                <div class="col-sm-10">

                    <input type="text" name="calle_dos_empleado" value="<?php echo $calle_2 ?>" id="calle_dos_empleado" placeholder="calle dos" class="form-control">
                </div>
            </div>

            <!-- CIUDAD-->
            <div class="form-group row">
                <label for="ciudad" class="col-sm-2 col-form-label">Ciudad (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="ciudad_empleado" value="<?php echo $ciudad ?>" id="ciudad_empleado" placeholder="ciudad" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- COLONIA-->
            <div class="form-group row">
                <label for="colonia" class="col-sm-2 col-form-label">Colonia (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="colonia_empleado" value="<?php echo $colonia ?>" id="colonia_empleado" placeholder="colonia" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- CODIGO POSTAL-->
            <div class="form-group row">
                <label for="codigo_postal" class="col-sm-2 col-form-label">Código postal (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="codigo_postal_empleado" id="codigo_postal_empleado" value="<?php echo $cp ?>" placeholder="código postal" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- salario-->
            <div class="form-group row">
                <label for="salario" class="col-sm-2 col-form-label">Salario (*):</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="salario_empleado" value="<?php echo $salario ?>" name="salario_empleado" placeholder="salario" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Contraseña (*):</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="contrasena" name="contrasena" value="<?php echo $contrasena ?>" placeholder="contrseña" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen:</label> 
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto" id="foto" size="25" maxlength="70" required>
                    <label class="custom-file-label" for="validatedCustomFile">Escoge una imagen...</label>
                    <div class="invalid-feedback">Complete el campo</div>  
                </div>
            </div>

            <div class="form-group row">
            <div class="col-sm-10">
                <button type="button" class="btn btn-danger" value="Cancelar" onclick=history.back()>Cancelar</button>
                <button type="reset" class="btn btn-warning">Restablecer</button>
                <button type="submit" class="btn btn-success" value="Registrar usuario">Actualizar</button>
            </div>
        </div>

        </form>

        
    </main>

</body>
</html>