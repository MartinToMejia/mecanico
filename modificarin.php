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
            function valida_envia() {
            //valido el nombre
            if (document.fvalida.nombre.value.length == 0) {
                    alert("Tiene que escribir el nombre del componente")
                    document.fvalida.nombre.focus()
                    return 0;
            } else if (document.fvalida.titulo.value.length == 0) {
                    alert("Tiene que escribir el título del componente")
                    document.fvalida.titulo.focus()
                    return 0;
            } else if (document.fvalida.contenido.value.length == 0) {
                    alert("Tiene que escribir el contenido del componente")
                    document.fvalida.contenido.focus()
                    return 0;
            }   
                document.fvalida.submit();
                alert("La actualización se realizó exitosamente");
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

    <?php
        include "conex.php";
        $link=Conectarse();
        

        $nombre_interfaz = $_POST["nombre"];  

        $resultado=mysqli_query($link,"SELECT * FROM t_interfaz WHERE nombre = '$nombre_interfaz' ");

        $resultado_row = mysqli_fetch_array($resultado);

            $nombre = $resultado_row['nombre'];
            $titulo = $resultado_row['titulo'];
            $contenido = $resultado_row['contenido'];
            $imagen = $resultado_row['imagen'];        
    ?>

    <h1>Modificar interfaz</h1>

    <table width="100%">
        <tr>
            <td> <img src="img/portada.jpg" height="250" width="100%"></td>
        </tr>
    </table>

    <main> 
        <h2>Cambia los campos que deseas de la interfaz</h2>

        <form method="POST" name="fvalida" action="modinterfaz.php">
            <fieldset></fieldset>
            <p class="text-danger"> <strong> (*) Campos obligatorios </strong> </p>

            <!-- NOMBRE-->
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="nombre" id="nombre" placeholder="nombre" class="form-control" value="<?php echo $nombre; ?>" required>
                </div>
            </div>
            <!-- CONTENIDO-->
            <div class="form-group row">
                <label for="titulo" class="col-sm-2 col-form-label">Titulo (*):</label>
                <div class="col-sm-10">

                    <input type="text" name="titulo" id="titulo" placeholder="titulo" value="<?php echo $titulo; ?>" class="form-control" required>
                </div>
            </div>
            <!-- CONTENIDO-->
            <div class="form-group row">
                <label for="contenido" class="col-sm-2 col-form-label">Contenido (*):</label>
                <div class="col-sm-10">

                    <!-- <input type="text" name="contenido" id="contenido" placeholder="contenido" value="" class="form-control" required> -->
                    <textarea class="form-control" name="contenido" rows="10" cols="50"><?php echo $contenido; ?></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="button" class="btn btn-danger" value="Cancelar" onclick=history.back()>Cancelar</button>
                    <button type="reset" class="btn btn-warning">Restablecer</button>
                    <button type="button" class="btn btn-success" value="Registrar usuario" onclick="valida_envia()">Modificar</button>
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