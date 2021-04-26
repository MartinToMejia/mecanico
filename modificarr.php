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
        

        $nombre_buscar = $_POST["nombre"];  

        $resultado=mysqli_query($link,"SELECT * FROM t_refaccion WHERE nombre = '$nombre_buscar'");

        $resultado_row = mysqli_fetch_array($resultado);

            $nombre = $resultado_row['nombre'];
            $marca = $resultado_row['marca'];
            $descripcion = $resultado_row['descripcion'];
            $proveedor = $resultado_row['proveedor_pvr_id'];
            $inventario = $resultado_row['inventario_ivo_id'];
            $imagen = $resultado_row['imagen'];
    ?>

    <h1>Modificar datos de la refaccion</h1>

    <table width="100%">
        <tr>
            <td> <img src="img/portada.jpg" height="250" width="100%"></td>
        </tr>
    </table>

    <main> 
        <h2>Cambia los campos que deseas de la refaccion</h2>

        <form method="POST" name="fvalida" enctype="multipart/form-data" action="modrefaccion.php" class="needs-validation" novalidate>

                    <p class="text-danger"> Todos los campos son obligatorios </p>
            
                                <div class="form-group row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label> 
                                    <div class="col-sm-10">
                                        <input type="text" name="nombre" id="nombre" placeholder="nombre" class="form-control" value="<?php echo $nombre; ?>" required> 
                                        <div class="invalid-feedback">Complete el campo</div> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marca" class="col-sm-2 col-form-label">Marca:</label> 
                                    <div class="col-sm-10">
                                        <input type="text" name="marca" id="marca" placeholder="marca" class="form-control" value="<?php echo $marca; ?>" required> 
                                        <div class="invalid-feedback">Complete el campo</div> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label> 
                                    <div class="col-sm-10">
                                        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion" class="form-control" value="<?php echo $descripcion; ?>" required> 
                                        <div class="invalid-feedback">Complete el campo</div> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="proveedor">Proveedor:</label> </td>
                                    <select class="custom-select" name="proveedor" id="proveedor" required>
                                                <?php
                                                
                                                    $consulta = mysqli_query($link, "SELECT * FROM t_proveedor");

                                                    while($row = mysqli_fetch_array($consulta)) {
                                                        echo "<option value= '".$row['pvr_id']."'>".$row['nombre']."</option>";
                                                    }
                                                ?>
                                    </select> 
                                    <div class="invalid-feedback">Complete el campo</div> 
                                </div>  

                                <div class="form-group">
                                    <label for="inventario">Inventario:</label> 
                                    <select class="custom-select" name="inventario" id="inventario" required>
                                                <?php

                                                    $consulta = mysqli_query($link, "SELECT * FROM t_inventario");

                                                    while($row = mysqli_fetch_array($consulta)) {
                                                        echo "<option value= '".$row['ivo_id']."'>".$row['costo']."</option>";
                                                    }
                                                ?>
                                    </select> 
                                    <div class="invalid-feedback">Complete el campo</div> 
                                </div>  

                                <div class="form-group">
                                    <label for="imagen">Imagen:</label> 
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="imagen" id="imagen" size="25" maxlength="70" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Escoge una imagen...</label>
                                        <div class="invalid-feedback">Complete el campo</div>  
                                    </div>
                                </div>

                                <br>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="button" class="btn btn-danger" value="Cancelar" onclick=history.back()>Cancelar</button>
                    <button type="reset" class="btn btn-warning">Restablecer</button>
                    <button type="submit" class="btn btn-success" value="Registrar carro">Actualizar</button>
                </div>
            </div>
        </form>

    </main>

</body>
</html>