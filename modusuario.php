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
			$apaterno = $_POST['apellido_paterno'];
			$amaterno = $_POST['apellido_materno'];
			$email = $_POST['email'];
			$tipocliente = $_POST['tipo_cliente'];
			$telefono = $_POST['telefono'];
			$calleuno = $_POST['calle_uno'];
			$calledos = $_POST['calle_dos'];
			$ciudad = $_POST['ciudad'];
			$colonia = $_POST['colonia'];
			$postal = $_POST['codigo_postal'];
			$rfc = $_POST['rfc'];
			$pass = $_POST['contrasena'];

			include 'conex.php';
			$enlace = Conectarse();

			$imagen = addslashes(file_get_contents($_FILES['foto']['name']));
            $fotografia = $_FILES['foto']['name'];
            $target_path = 'img/';
			$target_path = $target_path.basename($_FILES['foto']['name']);
			move_uploaded_file($_FILES['foto']['tmp_name'], $target_path);

			mysqli_query($enlace, "UPDATE t_cliente SET num_tel = '$telefono', email = '$email', nombre = '$nombre', apellidop = '$apaterno', apellidom = '$amaterno',
                            tipo_cliente = '$tipocliente', calle1 = '$calleuno', calle2 = '$calledos', ciudad = '$ciudad', colonia = '$colonia', codigo_postal = '$postal',
                            rfc = '$rfc', contrasena = '$pass', imagen = '$fotografia' WHERE email = '$email'");
			$consulta = mysqli_query($enlace, "select num_tel, email, nombre, apellidop, apellidom, tipo_cliente, calle1, calle2, ciudad, colonia, codigo_postal, rfc, contrasena, imagen from t_cliente where email = '$email'");
		?>

		<h1 class="text-info">Resultado de la consulta</h1>

		<table align="center" border="1" cellspacing="1" cellpadding="1" width="70%" class="table table-hover">
			<tr class="text table-success">
				<td> Nombre </td>
				<td> Apellido Paterno </td>
				<td> Apellido Materno </td>
				<td> Email </td>
				<td> Tipo de cliente </td>
				<td> Telefono </td>
				<td> Calle 1 </td>
				<td> Calle 2 </td>
				<td> Ciudad </td>
				<td> Colonia </td>
				<td> Código postal </td>
				<td> RFC </td>
				<td> Contraseña </td>
				<td> Fotografia </td>
			</tr>
			<?php
				while($reg = mysqli_fetch_array($consulta)) {
					$var= "<img src=img/" . $reg['imagen'] . " width=80>";
					printf("<tr>
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
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
					<td> %s </td>
					</tr>",
					$reg['nombre'],
					$reg['apellidop'],
					$reg['apellidom'],
					$reg['email'],
					$reg['tipo_cliente'],
					$reg['num_tel'],
					$reg['calle1'],
					$reg['calle2'],
					$reg['ciudad'],
					$reg['colonia'],
					$reg['codigo_postal'],
					$reg['rfc'],
					$reg['contrasena'], 
					$var);
				}
				mysqli_free_result($consulta);
				mysqli_close($enlace);
			?>
			
		</table>
			<a href="usuarioadmin.php" class="btn btn-danger"> Regresar</a>
	</body>
</html>