<?php include ("seguridad.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link href="fontawesome-free-5.13.0-web/js/all.js" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar datos</title>
</head>
<body class="p-3 mb-2 bg-light text-dark">
    <?php
        include("conex.php");

        $email = $_POST["email"];  

        $link = Conectarse();

        $resultado = mysqli_query($link,"Select * from t_empleado where email='$email'");

        mysqli_query($link, "Delete From t_empleado Where email='{$_POST["email"]}'");
    ?>

    <table border="1" cellpadding="1" align="center" class="table table-striped">
        <tr class="table table-success">
            <td>Celular</td>
            <td>Email</td>
            <td>Nombre</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Salario </td>
            <td>Fecha de ingreso</td>
            <td>Tipo de empleado</td>
            <td>Calle 1</td>
            <td>Calle 2</td>
            <td>Ciudad</td>
            <td>Colonia</td>
            <td>Código postal</td>
        </tr>

        <h1 class="text-info">Registro borrado: </h1>

        <?php
        while($row = mysqli_fetch_array($resultado))
        {
            printf("<tr>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%.2f</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%d</td>
            </tr>",$row["num_tel"],$row["email"],$row["nombre"],$row["apellidop"],$row["apellidom"],$row["salario"],$row["fecha_ingreso"],
            $row["tipo_empleado"],$row["calle1"],$row["calle2"],$row["ciudad"],$row["colonia"],$row["codigo_postal"]);
        }
        mysqli_free_result($resultado);
        mysqli_close($link);
        ?>
    </table>
            <a href="eliminarempleado.php" class="btn btn-danger">Atras</a>
            <a href="usuarioadmin.php" class="btn btn-success">Inicio</a>
</body>
</html>
