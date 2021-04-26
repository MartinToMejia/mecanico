<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar datos de carro</title>


</head>
<body bgcolor="gray">

    <h1>Seleccione el campo que desea buscar </h1>

    <table width="100%">
        <tr>
            <td> <img src="img/portada.jpg" height="250" width="100%"></td>
        </tr>
    </table>
    
    <?php
        include "conex.php";
        $link=Conectarse();
        $result=mysqli_query($link,"SELECT descripcion FROM t_reparacion");
    ?>
    <form name="formulario" action="buscarre.php" method="POST">
    <table>
        <tr>
            Descripcion: <select name="descripcion">
            <?php
            $result=mysqli_query($link,"SELECT descripcion FROM t_reparacion");
            while($row=mysqli_fetch_array($result))
            {
                echo '<option>'.$row["descripcion"];
            }
            ?>
            </select>
            </td>
        </tr>
        <tr>
            <td align="center"><input type="submit" value="Buscar"></td>
        </tr>
    </table>
    </form>
    <?php
        mysqli_free_result($result);
        mysqli_close($link);
    ?>
    
								<table>
									<tr>
									<td> <br> <input type="reset"> </td>
									</tr>
									<tr>
									<td> <br> <input type="image" src="img\back_arrow.png" onclick=history.back() width="55" height="35"> </td>
									</tr>
								</table>
								
</body>
</html>
