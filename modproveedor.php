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
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
            $telefonouno = $_POST['telefono_1'];
            $telefonodos = $_POST['telefono_2'];
			$calleuno = $_POST['calle_uno'];
			$calledos = $_POST['calle_dos'];
			$ciudad = $_POST['ciudad'];
            $colonia = $_POST['colonia'];
            $estado = $_POST['estado'];
			$postal = $_POST['codigo_postal'];

			include 'conex.php';
			$enlace = Conectarse();

			mysqli_query($enlace, "UPDATE t_proveedor SET email = '$email', nombre = '$nombre', calle1 = '$calleuno', calle2 = '$calledos', ciudad = '$ciudad', colonia = '$colonia', estado = '$estado', codigo_postal = '$postal',
                            num_tel1 = '$telefonouno', num_tel2 = '$telefonodos' WHERE email = '$email'");
			$consulta = mysqli_query($enlace, "select email, nombre, calle1, calle2, ciudad, colonia, estado, codigo_postal, num_tel1, num_tel2 from t_proveedor where email = '$email'");
		?>

		<h1 class="text-info">Resultado de la consulta</h1>

		<table align="center" border="1" cellspacing="1" cellpadding="1" width="70%" class="table table-hover">
			<tr class="text table-success">
                <td> Email </td>
				<td> Nombre </td>
				<td> Calle 1 </td>
				<td> Calle 2 </td>
				<td> Ciudad </td>
                <td> Colonia </td>
                <td> Estado </td>
                <td> Código postal </td>
                <td> Telefono uno</td>
                <td> Telefono dos</td>
	
			</tr>
			<?php
				while($reg = mysqli_fetch_array($consulta)) {
					printf("<tr>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %d </td>
					<td> %s </td>
					<td> %s </td>
                    </tr>",
                    $reg['email'],
					$reg['nombre'],
					$reg['calle1'],
					$reg['calle2'],
					$reg['ciudad'],
                    $reg['colonia'],
                    $reg['estado'],
                    $reg['codigo_postal'],
                    $reg['num_tel1'],
                    $reg['num_tel2']);
				}
				mysqli_free_result($consulta);
				mysqli_close($enlace);
			?>
		</table>
		<a href="usuarioadmin.php" class="btn btn-danger"> Regresar</a>
		<br>
	</body>
</html>