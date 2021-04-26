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

            mysqli_query($link, "insert into t_detalles(cantidad_rfn, subtotal, fecha, refaccion_rfn_id, reparacion_rpn_id) 
                                                VALUES(null, null, NOW(),'".$_POST['refaccion']."', '".$_POST['reparacion']."')");

            mysqli_query($link, "update t_inventario set stock = (stock - 1) where ivo_id = (select inventario_ivo_id from t_refaccion where rfn_id = '".$_POST['refaccion']."')");

            $consulta = mysqli_query($link, "SELECT fecha, refaccion_rfn_id, reparacion_rpn_id FROM t_detalles WHERE reparacion_rpn_id = '".$_POST['reparacion']."'");
        ?>
        <h1 class="text-info">Resultado de la consulta</h1>

        <table align="center" border="1" cellspacing="1" cellpadding="1" width="70%" class="table table-hover">
            <tr class="table table-success">
                <td> Fecha </td>
                <td> Refaccion </td>
                <td> Reparacion </td>
            </tr>
            <?php
                while($reg = mysqli_fetch_array($consulta)) {
                    printf("<tr>
                    <td> %s </td>
                    <td> %d </td>
                    <td> %d </td>
                    </tr>",
                    $reg['fecha'],
                    $reg['refaccion_rfn_id'],
                    $reg['reparacion_rpn_id']);
                }
                mysqli_free_result($consulta);
                mysqli_close($link);
            ?>
        </table>
        <br>
        <a href="resultadosreparacion.php" class="btn btn-success" color:blue;"> Ver todas las incidencias </a>
		<a href="usuarioempleado.php" class="btn btn-danger" color:blue; "> Salir </a>
    </body>
</html>
