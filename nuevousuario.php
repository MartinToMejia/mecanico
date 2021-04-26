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

    <script>
        function cancelar() {
            if (confirm("¿Cancelar el registro del nuevo cliente?")) {
                history.back();
            } else {

            }
        }
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
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
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

    <h1 class="text-white bg-dark " align="center"> Registar Nuevo Cliente </h1>

    <table width="100%">
        <tr>
            <td> <img src="img/portada.jpg" height="250" width="100%" class="border border-dark"></td>
        </tr>
    </table>

    <main>
        <h2 class="text-info">Registro de nuevo cliente</h2>

        <!-- -->
        <form name="fvalida" method="POST" enctype="multipart/form-data" action="procesador_usuario.php" class="needs-validation" novalidate>
            <p class="text-danger"> <strong> (*) Campos obligatorios </strong> </p>

            <!-- ANOMBRE-->
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="nombre" id="nombre" placeholder="nombre" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>
            <!-- APELLIDO PATERNO-->
            <div class="form-group row">
                <label for="apellido_paterno" class="col-sm-2 col-form-label">Apellido paterno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="apellido paterno" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>
            <!-- APELLIDO MATERNO-->
            <div class="form-group row">
                <label for="apellido_materno" class="col-sm-2 col-form-label">Apellido materno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="apellido_materno" id="apellido_materno" placeholder="apellido materno" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>
            <!-- EMAIL-->
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email (*):</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="correo electronico" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>
            <!-- TIPO DE CLIENTE-->
            <div class="form-group">
                <label for="tipo_cliente">Tipo de cliente (*): </label>
                <select class="custom-select" name="tipo_cliente" id="tipo_cliente" required>
                    <option value="">-- Seleccionar --</option>
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

                    <input type="tel" name="telefono" id="telefono" placeholder="teléfono" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>

            <!-- CALLE UNO-->
            <div class="form-group row">
                <label for="calle_uno" class="col-sm-2 col-form-label">Calle uno (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="calle_uno" id="calle_uno" placeholder="calle uno" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>

            <!-- CALLE DOS-->
            <div class="form-group row">
                <label for="calle_dos" class="col-sm-2 col-form-label">Calle dos:</label>
                <div class="col-sm-10">

                    <input type="text" name="calle_dos" id="calle_dos" placeholder="calle dos" class="form-control">
                </div>
            </div>

            <!-- CIUDAD-->
            <div class="form-group row">
                <label for="ciudad" class="col-sm-2 col-form-label">Ciudad (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="ciudad" id="ciudad" placeholder="ciudad" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>

            <!-- COLONIA-->
            <div class="form-group row">
                <label for="colonia" class="col-sm-2 col-form-label">Colonia (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="colonia" id="colonia" placeholder="colonia" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>

            <!-- CODIGO POSTAL-->
            <div class="form-group row">
                <label for="codigo_postal" class="col-sm-2 col-form-label">Código postal (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="codigo_postal" id="codigo_postal" placeholder="código postal" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>

            <!-- RFC-->
            <div class="form-group row">
                <label for="rfc" class="col-sm-2 col-form-label">RFC (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="rfc" id="rfc" placeholder="rfc" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>

            <!-- CONTRSEÑA-->
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Contraseña (*):</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="contrseña" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>

            <div class="form-group">
                <label for="archivo">Foto:</label> 
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto" id="foto" size="25" maxlength="70" required> 
                    <label class="custom-file-label" for="validatedCustomFile">Escoge una imagen...</label>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="button" class="btn btn-danger" value="Cancelar" onclick="cancelar()">Cancelar</button>
                    <button type="reset" class="btn btn-warning">Restablecer</button>
                    <button type="submit" class="btn btn-success" value="Registrar usuario">Registar</button>
                </div>
            </div>
        </form>

        <!-- 

        <form method="POST" name="fvalida" action="procesador_usuario.php">

            <p> <strong> (*) Campos obligatorios </strong> </p>

            <fieldset>
                <legend>Información personal</legend>

                <table>
                    <tr>
                        <td> <label for="nombre">Nombre (*):</label> </td>
                        <td> <input type="text" name="nombre" id="nombre" placeholder="nombre" required> </td>
                    </tr>

                    <tr>
                        <td> <label for="apellido_paterno">Apellido paterno (*):</label> </td>
                        <td> <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="apellido paterno" required> </td>
                    </tr>

                    <tr>
                        <td> <label for="apellido_materno">Apellido materno (*):</label> </td>
                        <td> <input type="text" name="apellido_materno" id="apellido_materno" placeholder="apellido materno" required> </td>
                    </tr>

                    <tr>
                        <td> <label for="email">Email (*):</label> </td>
                        <td> <input type="email" name="email" id="email" placeholder="correo electrónico" required> </td>

                    </tr>
                    <tr>
                        <td> <label for="tipo_cliente">Tipo de cliente (*):</label> </td>
                        <td> <select name="tipo_cliente" id="tipo_cliente" required>
										<option value="selecciona"> -- Seleccionar -- </option>									
										<option value="particular"> Particular </option>
										<option value="empresa"> Encargado de flotilla </option>
										</select>
                        </td>
                    </tr>
                    <tr>
                        <td> <label for="telefono">Telefono (*):</label> </td>
                        <td> <input type="tel" name="telefono" id="telefono" placeholder="teléfono" required> </td>
                    </tr>

                    <tr>
                        <td> <label for="calle_uno">Calle uno (*):</label> </td>
                        <td> <input type="text" name="calle_uno" id="calle_uno" placeholder="calle uno" required> </td>
                    </tr>

                    <tr>
                        <td> <label for="calle_dos">Calle dos:</label> </td>
                        <td> <input type="text" name="calle_dos" id="calle_dos" placeholder="calle dos"> </td>
                    </tr>

                    <tr>
                        <td> <label for="ciudad">Ciudad (*):</label> </td>
                        <td> <input type="text" name="ciudad" id="ciudad" placeholder="ciudad" required> </td>
                    </tr>

                    <tr>
                        <td> <label for="colonia">Colonia (*):</label> </td>
                        <td> <input type="text" name="colonia" id="colonia" placeholder="colonia" required> </td>
                    </tr>

                    <tr>
                        <td> <label for="codigo_postal">Código postal (*):</label> </td>
                        <td> <input type="text" name="codigo_postal" id="codigo_postal" placeholder="código postal" required> </td>
                    </tr>

                    <tr>
                        <td> <label for="rfc">RFC (*):</label> </td>
                        <td> <input type="text" name="rfc" id="rfc" placeholder="rfc" required> </td>
                    </tr>
                    <tr>
                        <td> <label for="password">Contraseña (*):</label> </td>
                        <td> <input type="password" name="contrasena" id="password" placeholder="contraseña" required> </td>
                    </tr>
                    <tr>
                        <table>
                            <tr>
                                <td> <br> <input type="button" value="Cancelar" class="btn btn-outline-danger" onclick="cancelar()"> </td>
                                <td> <br> <input type="reset" class="btn btn-outline-warning"> </td>
                                <td> <br> <input type="button" value="Registrar usuario" class="btn btn-outline-success" onclick="valida_envia()"> </td>
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