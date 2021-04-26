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
			$nombre_interfaz = $_POST['nombre'];
			$titulo = $_POST['titulo'];
			$contenido = $_POST['contenido'];

			include 'conex.php';
			$enlace = Conectarse();

			mysqli_query($enlace, "UPDATE t_interfaz SET nombre = '$nombre_interfaz', titulo = '$titulo', contenido = '$contenido' WHERE nombre = '$nombre_interfaz'");
			$consulta = mysqli_query($enlace, "select nombre, titulo, contenido from t_interfaz where nombre = '$nombre_interfaz'");
		?>

		<h1 class="text-info">Resultado de la consulta</h1>

		<table align="center" border="1" cellspacing="1" cellpadding="1" width="70%" class="table table-hover">
			<tr class="text table-success">
				<td> Nombre </td>
				<td> Titulo </td>
			</tr>
			<?php
				while($reg = mysqli_fetch_array($consulta)) {
					printf("<tr>
					<td> %s </td>
					<td> %s </td>
					</tr>",
					$reg['nombre'],
					$reg['titulo']);
				}
				mysqli_free_result($consulta);
				mysqli_close($enlace);
			?>
			
		</table>
			<a href="index.php" class="btn btn-danger"> Ver en la página principal</a>
	</body>
</html>