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
    <title>Eliminar inventario</title>

</head>
<body class="p-3 mb-2 bg-secondary text-white">

    <h1 class="text-info">Seleccione el campo que desea eliminar </h1>

    <table width="100%">
        <tr>
            <td> <img src="img/portada.jpg" height="250" width="100%"></td>
        </tr>
    </table>
    <?php
        include "conex.php";
        $link=Conectarse();
        $result=mysqli_query($link,"SELECT costo, stock FROM t_inventario");
    ?>
    <form name="formulario" action="eliminari.php" method="POST">
    <label for="eliminar">Eliminar: <br></label> <br>
    
    <select class="form-control form-control-sm" name="costo" id="costo">
            <?php
            $result=mysqli_query($link,"SELECT costo FROM t_inventario");
            while($row=mysqli_fetch_array($result))
            {
                echo '<option>'.$row["costo"];
            }
            ?>
            </select>
            <br>
<a href="usuarioadmin.php" class="btn btn-warning"> Regresar</a>
<button type="submit" class="btn btn-danger" value="Eliminar">Eliminar</button>
    
    </form>
   
    <?php
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
</body>
</html>
