<?php include ("seguridad.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link href="fontawesome-free-5.13.0-web/js/all.js" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Procesar datos</title>
</head>
<body class="p-3 mb-2 bg-light text-dark">
    <?php
        include("conex.php");

        $matricula = $_POST["matricula"];  

        $link = Conectarse();

        $consulta = mysqli_query($link, "SELECT nombre, marca, descripcion, proveedor_pvr_id, inventario_ivo_id FROM t_refaccion WHERE nombre = '{$_POST["nombre"]}'");

        mysqli_query($link, "Delete From t_refaccion Where nombre='{$_POST["nombre"]}'");

    ?>

    <table align="center" border="1" cellspacing="1" cellpadding="1" width="70%" class="table table-striped">
        <tr class="table table-success">
            <td> Nombre </td>
            <td> Marca </td>
            <td> Descripcion </td>
            <td> Proveedor </td>
            <td> Inventario </td>
        </tr>

        <h1 class="text-info">Registro borrado: </h1>
        
        <?php
            while($reg = mysqli_fetch_array($consulta)) {
                printf("<tr>
                <td> %s </td>
                <td> %s </td>
                <td> %s </td>
                <td> %d </td>
                <td> %d </td>
                </tr>",
                $reg['nombre'],
                $reg['marca'],
                $reg['descripcion'],
                $reg['proveedor_pvr_id'],
                $reg['inventario_ivo_id']);
            }
            mysqli_free_result($consulta);
            mysqli_close($link);
        ?>
    </table>
    <a href="eliminarrefaccion.php" class="btn btn-danger">Atras</a>
    <a href="usuarioadmin.php" class="btn btn-success">Inicio</a>
</body>
</html>
