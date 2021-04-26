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

            mysqli_query($link, "insert into t_reparacion(descripcion, mano_obra, total, empleado_epo_id, auto_ato_id) 
                                                VALUES('".$_POST['descripcion']."', '".$_POST['mano_obra']."', '".$_POST['total']."',
                                                '".$_POST['empleado']."', '".$_POST['auto']."')");

            $consulta = mysqli_query($link, "SELECT descripcion, mano_obra, total, empleado_epo_id, auto_ato_id FROM t_reparacion WHERE descripcion = '".$_POST['descripcion']."'");
        ?>
        <h1>Resultado de la consulta</h1>

        <table align="center" border="1" cellspacing="1" cellpadding="1" width="70%" class="table table-hover">
            <tr class="table table-success">
                <td> Descripcion </td>
                <td> Mano de obra </td>
                <td> Total </td>
                <td> Empleado </td>
                <td> Auto </td>
            </tr>
            <?php
                while($reg = mysqli_fetch_array($consulta)) {
                    printf("<tr>
                    <td> %s </td>
                    <td> %.2f </td>
                    <td> %.2f </td>
                    <td> %d </td>
                    <td> %d </td>
                    </tr>",
                    $reg['descripcion'],
                    $reg['mano_obra'],
                    $reg['total'],
                    $reg['empleado_epo_id'],
                    $reg['auto_ato_id']);
                }
                mysqli_free_result($consulta);
                mysqli_close($link);
            ?>
        </table>
        <br>
        <a href="resultadosreparacion.php" class="btn btn-outline-success" color:blue;"> Ver todas las incidencias </a>
		<a href="usuarioempleado.php" class="btn btn-outline-danger" color:blue; "> Salir </a>
    </body>
</html>
