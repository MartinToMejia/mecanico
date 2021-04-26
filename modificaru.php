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

        $resultado=mysqli_query($link,"SELECT * FROM t_cliente WHERE email = '$email'");

        $resultado_row = mysqli_fetch_array($resultado);

            $celular = $resultado_row['num_tel'];
            $correo = $resultado_row['email'];
            $nommbre = $resultado_row['nombre'];
            $apellido_paterno = $resultado_row['apellidop'];
            $apellido_materno = $resultado_row['apellidom'];
            $cliente = $resultado_row['tipo_cliente'];
            $calle_1 = $resultado_row['calle1'];
            $calle_2 = $resultado_row['calle2'];
            $ciudad = $resultado_row['ciudad'];
            $colonia = $resultado_row['colonia'];
            $cp = $resultado_row['codigo_postal'];
            $rfc = $resultado_row['rfc'];
            $contrasena = $resultado_row['contrasena'];
        
    ?>

    <h1>Modificar usuario</h1>

    <table width="100%">
        <tr>
            <td> <img src="img/portada.jpg" height="250" width="100%"></td>
        </tr>
    </table>

    <main> 
        <h2>Cambia los campos que deseas del usuario</h2>

        <form method="POST" name="fvalida" enctype="multipart/form-data" action="modusuario.php" class="needs-validation" novalidate>
            <fieldset></fieldset>
            <p class="text-danger"> <strong> (*) Campos obligatorios </strong> </p>

            <!-- ANOMBRE-->
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="nombre" id="nombre"  class="form-control"value="<?php echo $nommbre; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>
            <!-- APELLIDO PATERNO-->
            <div class="form-group row">
                <label for="apellido_paterno" class="col-sm-2 col-form-label">Apellido paterno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="apellido paterno" value="<?php echo $apellido_paterno; ?>" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>
            <!-- APELLIDO MATERNO-->
            <div class="form-group row">
                <label for="apellido_materno" class="col-sm-2 col-form-label">Apellido materno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="apellido_materno" id="apellido_materno" placeholder="apellido materno" value="<?php echo $apellido_materno; ?>"  class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>
            <!-- EMAIL-->
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email (*):</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $correo; ?>" placeholder="correo electronico" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>
            <!-- TIPO DE CLIENTE-->
            <div class="form-group">
                <label for="tipo_cliente">Tipo de cliente (*): <br></label> <br>
                <select class="custom-select" name="tipo_cliente" id="tipo_cliente" required>
                    <option value="<?php echo $cliente; ?>"><?php echo $cliente; ?></option>
                    <option value="particular">  Particular </option>
                    <option value="empresa"> Encargado de flotilla</option>
                </select>
                <div class="invalid-feedback">Complete el campo</div> 
            </div>
            <br>

            <!-- TELEFONO-->
            <div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono (*):</label>
                <div class="col-sm-10">

                    <input type="tel" name="telefono" id="telefono" placeholder="teléfono" value="<?php echo $celular; ?>" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- CALLE UNO-->
            <div class="form-group row">
                <label for="calle_uno" class="col-sm-2 col-form-label">Calle uno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="calle_uno" id="calle_uno" placeholder="calle uno" value="<?php echo $calle_1; ?>" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- CALLE DOS-->
            <div class="form-group row">
                <label for="calle_dos" class="col-sm-2 col-form-label">Calle dos:</label>
                <div class="col-sm-10">

                    <input type="text" name="calle_dos" id="calle_dos" placeholder="calle dos" value="<?php echo $calle_2; ?>" class="form-control">
                </div>
            </div>

            <!-- CIUDAD-->
            <div class="form-group row">
                <label for="ciudad" class="col-sm-2 col-form-label">Ciudad (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="ciudad" id="ciudad" placeholder="ciudad" value="<?php echo $ciudad; ?>" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- COLONIA-->
            <div class="form-group row">
                <label for="colonia" class="col-sm-2 col-form-label">Colonia (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="colonia" id="colonia" placeholder="colonia" value="<?php echo $colonia; ?>" class="form-control" required>
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

            <!-- RFC-->
            <div class="form-group row">
                <label for="rfc" class="col-sm-2 col-form-label">RFC (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="rfc" id="rfc" placeholder="rfc " class="form-control"  value="<?php echo $rfc; ?>" required>
                    <div class="invalid-feedback">Complete el campo</div> 
                </div>
            </div>

            <!-- CONTRSEÑA-->
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Contraseña (*):</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="contrasena" value="<?php echo $contrasena; ?>" placeholder="contrseña" required>
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

        <!--

        <form method="POST" name="fvalida" action="modusuario.php">

                    <fieldset>
                            <legend>Información personal</legend>

                            <table>
                                <tr>
                                    <td> <label for="nombre">Nombre:</label> </td>
                                    <td> <input type="text" name="nombre" id="nombre" placeholder="nombre" value="" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="apellido_paterno">Apellido paterno:</label> </td>
                                    <td> <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="apellido paterno" value="<?php echo $apellido_paterno; ?>" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="apellido_materno">Apellido materno:</label> </td>
                                    <td> <input type="text" name="apellido_materno" id="apellido_materno" placeholder="apellido materno" value="<?php echo $apellido_materno; ?>" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="email">Email:</label> </td>
                                    <td> <input type="email" name="email" id="email" placeholder="correo electrónico" value="<?php echo $correo; ?>" required> </td>
     
                                </tr>
								<tr>
                                    <td> <label for="tipo_cliente">Tipo de cliente:</label> </td>
                                    <td> <input type="text" name="tipo_cliente" id="tipo_cliente" placeholder="tipo cliente" value="<?php echo $cliente; ?>" required> </td>
                                </tr>
                                <tr>
                                    <td> <label for="telefono">Telefono:</label> </td>
                                    <td> <input type="tel" name="telefono" id="telefono" placeholder="teléfono" value="<?php echo $celular; ?>" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="calle_uno">Calle uno:</label> </td>
                                    <td> <input type="text" name="calle_uno" id="calle_uno" placeholder="calle uno" value="<?php echo $calle_1; ?>" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="calle_dos">Calle dos:</label> </td>
                                    <td> <input type="text" name="calle_dos" id="calle_dos" placeholder="calle dos" value="<?php echo $calle_2; ?>" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="ciudad">Ciudad:</label> </td>
                                    <td> <input type="text" name="ciudad" id="ciudad" placeholder="ciudad" value="<?php echo $ciudad; ?>" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="colonia">Colonia:</label> </td>
                                    <td> <input type="text" name="colonia" id="colonia" placeholder="colonia" value="<?php echo $colonia; ?>" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="codigo_postal">Código postal:</label> </td>
                                    <td> <input type="text" name="codigo_postal" id="codigo_postal" placeholder="código postal" value="<?php echo $cp; ?>" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="rfc">RFC:</label> </td>
                                    <td> <input type="text" name="rfc" id="rfc" placeholder="rfc" value="<?php echo $rfc; ?>" required> </td>
                                </tr>
								<tr>
                                    <td> <label for="password">Contraseña:</label> </td>
                                    <td> <input type="text" name="contrasena" id="password" placeholder="contraseña" value="<?php echo $contrasena; ?>" required> </td>
                                </tr>
                                <tr>
								<table>
									<tr>
									<td> <br> <input type="reset"> </td>
									<td> <br> <input type="button" value="Registrar usuario" onclick="valida_envia()"> </td>
									</tr>
									<tr>
									<td> <br> <input type="image" src="img\back_arrow.png" onclick=history.back() width="55" height="35"> </td>
									</tr>
								</table>
								</tr>
                            </table>
                        </fieldset>
        </form>
        -->

    </main>

</body>
</html>