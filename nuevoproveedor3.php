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
    function cancelar(){
        if (confirm("¿Cancelar el registro del nuevo empleado?")) {
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

    <h1 class="text-white bg-dark " align="center"> Registar Nuevo Proveedor </h1>

    <table width="100%">
        <tr>
            <td> <img src="img/portada.jpg" height="250" width="100%"></td>
        </tr>
    </table>

    <main> 
        <h2 class="text-info">Registro de nuevo proveedor</h2>


         <!-- -->
         <form method="POST" name="fvalida" action="procesador_proveedor.php" class="needs-validation" novalidate>
            <p class="text-danger"> <strong> (*) Campos obligatorios </strong> </p>

            <!-- NOMBRE-->
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="nombre" id="nombre" placeholder="nombre" class="form-control" required>
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

              <!-- ESTADO-->
              <div class="form-group row">
                <label for="colonia" class="col-sm-2 col-form-label">Estado (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="estado" id="estado" placeholder="estado" class="form-control" required>
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

             <!-- TELEFONO 1-->
             <div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono uno (*):</label>
                <div class="col-sm-10">

                    <input type="tel" name="telefono_1" id="telefono_1" placeholder="teléfono uno" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>

             <!-- TELEFONO 2-->
             <div class="form-group row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono dos (*):</label>
                <div class="col-sm-10">

                    <input type="tel" name="telefono_2" id="telefono_2" placeholder="teléfono dos" class="form-control" required>
                    <div class="invalid-feedback">Complete el campo</div>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="button" class="btn btn-danger" value="Cancelar" onclick="cancelar()">Cancelar</button>
                    <button type="reset" class="btn btn-warning">Restablecer</button>
                    <button type="submit" class="btn btn-success" value="Registrar proveedor">Registar</button>
                </div>
            </div>
        </form>

        <!--

        <form method="POST" name="fvalida" action="procesador_proveedor.php">

                    <p> <strong> (*) Campos obligatorios </strong> </p>

                    <fieldset>
                            <legend>Información personal</legend>

                            <table>
                                <tr>
                                    <td> <label for="nombre">Nombre (*):</label> </td>
                                    <td> <input type="text" name="nombre" id="nombre" placeholder="nombre" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="email">Email (*):</label> </td>
                                    <td> <input type="email" name="email" id="email" placeholder="correo electrónico" required> </td>
     
                                </tr>
								
                                <tr>
                                    <td> <label for="calle_uno">Calle uno (*):</label> </td>
                                    <td> <input type="text" name="calle_uno" id="calle_uno" placeholder="calle uno" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="calle_dos">Calle dos:</label> </td>
                                    <td> <input type="text" name="calle_dos" id="calle_dos" placeholder="calle dos" required> </td>
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
                                        <td> <label for="ciudad">Estado (*):</label> </td>
                                        <td> <input type="text" name="estado" id="estado" placeholder="estado" required> </td>
                                    </tr>

                                <tr>
                                    <td> <label for="codigo_postal">Código postal (*):</label> </td>
                                    <td> <input type="text" name="codigo_postal" id="codigo_postal" placeholder="código postal" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="telefono">Telefono uno (*):</label> </td>
                                    <td> <input type="tel" name="telefono_1" id="telefono_1" placeholder="teléfono uno" required> </td>
                                </tr>

                                <tr>
                                    <td> <label for="telefono">Telefono dos (*):</label> </td>
                                    <td> <input type="tel" name="telefono_2" id="telefono_2" placeholder="teléfono dos" required> </td>
                                </tr>
                                <tr>
                                    <table>
                                        <tr>
                                        <td> <br> <input type="button" value="Cancelar" onclick="cancelar()"> </td>
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