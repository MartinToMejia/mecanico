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

        $costo = $_POST["costo"];  

        $link = Conectarse();

        $resultado = mysqli_query($link,"Select * from t_inventario where costo = '$costo'");

        mysqli_query($link, "Delete From t_inventario Where costo='{$_POST["costo"]}'");
    ?>

    <table border="1" align="center" cellspacing="1" cellpadding="1" width="70%" class="table table-striped">
        <tr class="table table-success">
            
            <td>Id</td>
            <td>Costo</td>
            <td>Stock</td>
        </tr>

        <h1 class="text-info">Registro borrado: </h1>

        <?php
        while($row = mysqli_fetch_array($resultado))
        {
            printf("<tr>
            <td>%d</td>
            <td>%.2f</td>
            <td>%d</td>
            </tr>",$row["ivo_id"],$row["costo"],$row["stock"]);
        }
        mysqli_free_result($resultado);
        mysqli_close($link);
        ?>
    </table>
    <a href="eliminarempleado.php" class="btn btn-danger">Atras</a>
    <a href="usuarioadmin.php" class="btn btn-success">Inicio</a>
</body>
</html>
