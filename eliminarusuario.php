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
    <title>Eliminar usuario</title>


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
        $result=mysqli_query($link,"SELECT email FROM t_cliente");
    ?>

<form name="formulario" action="eliminaru.php" method="POST">
<label for="eliminar">Eliminar: <br></label> <br>

<select class="form-control form-control-sm" name="email" id="email" >
    
<?php
            $result=mysqli_query($link,"SELECT email FROM t_cliente");
            while($row=mysqli_fetch_array($result))
            {
                echo '<option>'.$row["email"];
            }
            ?>
  </select>
<br>
<a href="usuarioadmin.php" class="btn btn-warning"> Regresar</a>
<button type="submit" class="btn btn-danger" value="Eliminar">Eliminar</button>

</form>



<!--
    <form name="formulario" action="eliminaru.php" method="POST">
    <table>
        <tr>
            Email: <select name="email">
            <?php
            $result=mysqli_query($link,"SELECT email FROM t_cliente");
            while($row=mysqli_fetch_array($result))
            {
                echo '<option>'.$row["email"];
            }
            ?>
            </select>
            </td>
        </tr>
        <tr>
            <td align="center"><input type="submit" value="Eliminar"></td>
        </tr>
    </table>
    
    </form>
        -->
    <?php
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
    <!--
    <table>
									<tr>
									</tr>
									<tr>
									<td> <br> <a href="usuarioadmin.html"><input type="image" src="img\back_arrow.png" width="55" height="35"> </a> </td>
									</tr>
                                </table>
        -->
</body>
</html>
