<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FRANCO'S</title>

        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 

    </head>
    <body class="p-3 mb-2 bg-secondary text-white">

    <h3> Consultas y reportes </h3>

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Acciones
        </button>
    
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="consultaempleado.php" target="_top"> Consulta tus reparaciones </a>
        </div>
    </div>

        <h1> Buscar </h1>

        <form name="formulario" method="POST" action="principalempleado2.php">
        <label for="matricula">Matricula: <br></label> <br>
            <select name="matricula" id="matricula" class="form-control form-control-sm">
            <?php
            include("conex.php");
            $link = Conectarse();
            $result=mysqli_query($link,"SELECT matricula FROM t_auto");
            while($row=mysqli_fetch_array($result))
            {
                echo '<option>'.$row["matricula"];
            }
            ?>
            </select>
            <br>
			<center> <input type="submit" name="boton" value="Mostrar"> </input> </center>
        </form>
        <?php
			if($_POST) {
				
                $matricula = $_POST['matricula'];
                
                $resultado = mysqli_query($link, "SELECT * FROM t_auto WHERE matricula = '$matricula'");

			} else {
				echo "Auto no encontrado";
			}	
        ?>
        
        <br><br><br>

		<table align="center" border="1" cellspacing="1" cellpadding="1" width="100%" class="table table-striped">
				<?php
					while($row = mysqli_fetch_array($resultado)) {
						printf("<h2 align='center' style='color: #FFFFFF'> Resultado de la b??squeda </h2>");
						printf("<table align='center' border='1' cellspacing='1' cellpadding='1' class='table table-striped' style='background-color: white'> <tr class='table-info'>
						<td>Id </td>
						<td>Matricula</td>
						<td>Marca</td>
                        <td>Modelo</td>
                        <td>A??o</td>
                        <td>Fecha de ingreso</td>
					</tr><tr><td>%d</td><td>%s</td>
						<td>%s</td><td>%s</td><td>%d</td><td>%s</td></tr> </table>", $row["ato_id"], $row["matricula"], $row["marca"], $row["modelo"], $row["anio"], $row["fecha_registro"]);
					}
					mysqli_free_result($resultado);
					mysql_close($link);
				?>
		</table>
    </body>
</html>