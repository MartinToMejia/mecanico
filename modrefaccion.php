<?php include ("seguridad.php"); ?>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link href="fontawesome-free-5.13.0-web/js/all.js" rel="stylesheet">
	    <title> Procesar datos </title>
    </head>
    <body class="p-3 mb-2 bg-light text-dark">
        <?php
            include "conex.php";
            $link=Conectarse();

            $imagen = addslashes(file_get_contents($_FILES['archivo']['name']));
            $archivo_final = $_FILES['imagen']['name'];
            $target_path = 'img/';
			$target_path = $target_path.basename($_FILES['imagen']['name']);
			move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);

            mysqli_query($link, "UPDATE t_refaccion SET nombre = '".$_POST["nombre"]."', marca = '".$_POST["marca"]."', descripcion = '".$_POST["descripcion"]."', imagen = '$archivo_final', proveedor_pvr_id = '".$_POST["proveedor"]."', inventario_ivo_id = '".$_POST["inventario"]."' WHERE nombre='".$_POST["nombre"]."' ");

            $consulta = mysqli_query($link, "SELECT nombre, marca, descripcion, imagen, proveedor_pvr_id, inventario_ivo_id FROM t_refaccion WHERE nombre = '".$_POST['nombre']."'");
        ?>
        <h1 class="text-info">Resultado de la consulta</h1>

        <table align="center" border="1" cellspacing="1" cellpadding="1" width="70%" class="table table-hover">
            <tr class="text table-success">
                <td> Nombre </td>
                <td> Marca </td>
                <td> Descripcion </td>
                <td> Imagen </td>
                <td> Proveedor </td>
                <td> Inventario </td>
            </tr>
            <?php
                while($reg = mysqli_fetch_array($consulta)) {
                    $var= "<img src=img/" . $reg['imagen'] . " width=80>";
                    printf("<tr>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %s </td>
					<td> %s </td>
                    <td> %d </td>
                    <td> %d </td>
                    </tr>",
                    $reg['nombre'],
                    $reg['marca'],
                    $reg['descripcion'],
                    $var,
                    $reg['proveedor_pvr_id'],
                    $reg['inventario_ivo_id']);
                }
                mysqli_free_result($consulta);
                mysqli_close($link);
            ?>
        </table>
        <a href="usuarioadmin.php" class="btn btn-danger"> Regresar</a>
        <br>
    </body>
</html>
