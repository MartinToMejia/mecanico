<?php include ("seguridad.php"); ?>
<html>
    <head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link href="fontawesome-free-5.13.0-web/js/all.js" rel="stylesheet">
	    <title> Procesar datos </title>
    </head>
    <body lass="p-3 mb-2 bg-light text-dark">
        <?php
            include "conex.php";
            $link=Conectarse();

            mysqli_query($link, "UPDATE t_auto SET  matricula = '".$_POST["matricula"]."', marca = '".$_POST["marca"]."', modelo = '".$_POST["modelo"]."',
                                               anio = '".$_POST["anio"]."', cliente_cte_id = '".$_POST["cliente"]."'
                                               WHERE matricula='".$_POST["matricula"]."'");

            $consulta = mysqli_query($link, "SELECT matricula, marca, modelo, anio, cliente_cte_id FROM t_auto WHERE matricula = '".$_POST['matricula']."'");
        ?>
        <h1 class="text-info">Resultado de la consulta</h1>

        <table align="center" border="1" cellspacing="1" cellpadding="1" width="70%" class="table table-hover">
            <tr class="text table-success">
                <td> Matrícula </td>
                <td> Marca </td>
                <td> Modelo </td>
                <td> Año </td>
                <td> Cliente </td>
            </tr>
            <?php
                while($reg = mysqli_fetch_array($consulta)) {
                    printf("<tr>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %d </td>
                    <td> %d </td>
                    </tr>",
                    $reg['matricula'],
                    $reg['marca'],
                    $reg['modelo'],
                    $reg['anio'],
                    $reg['cliente_cte_id']);
                }
                mysqli_free_result($consulta);
                mysqli_close($link);
            ?>
        </table>
        <a href="usuarioempleado.php" class="btn btn-danger"> Regresar</a>
        <br>
    </body>
</html>
