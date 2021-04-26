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
	<body class="p-3 mb-2 bg-light text-dark">
		<?php
			$nombre = $_POST['nombre_empleado'];
			$apaterno = $_POST['apellido_paterno_empleado'];
			$amaterno = $_POST['apellido_materno_empleado'];
			$email = $_POST['email_empleado'];
			$telefono = $_POST['telefono_empleado'];
			$calleuno = $_POST['calle_uno_empleado'];
			$calledos = $_POST['calle_dos_empleado'];
			$ciudad = $_POST['ciudad_empleado'];
			$colonia = $_POST['colonia_empleado'];
			$postal = $_POST['codigo_postal_empleado'];
			$contrasena = $_POST['contrasena'];
			$salario = $_POST['salario_empleado'];
			$tipo_emp = $_POST['tipo_empleado'];
			$fotografia = $_FILES['foto']['name'];

			include 'conex.php';
			$enlace = Conectarse();

			$target_path = 'img/';
			$target_path = $target_path.basename($_FILES['foto']['name']);
			move_uploaded_file($_FILES['foto']['tmp_name'], $target_path);

			mysqli_query($enlace, "insert into t_empleado(num_tel, email, nombre, apellidop, apellidom, salario, fecha_ingreso, tipo_empleado, calle1, calle2, ciudad, colonia, codigo_postal, contrasena, imagen) values 
				('$telefono', '$email', '$nombre', '$apaterno', '$amaterno', '$salario', now(), '$tipo_emp', '$calleuno', '$calledos', '$ciudad', '$colonia', '$postal', '$contrasena', '$fotografia')");
			$consulta = mysqli_query($enlace, "select num_tel, email, nombre, apellidop, apellidom, salario, fecha_ingreso, tipo_empleado, calle1, calle2, ciudad, colonia, codigo_postal, contrasena, imagen from t_empleado where nombre = '$nombre'");
		?>

		<h1 class="text-info"> Resultado de la consulta </h1>

		<table align="center" border="1" cellspacing="1" cellpadding="1" width="70%" class="table table-hover">
			<tr class="table table-success">
				<td> Nombre </td>
				<td> Apellido Paterno </td>
				<td> Apellido Materno </td>
				<td> Email </td>
				<td> Telefono </td>
				<td> Calle 1 </td>
				<td> Calle 2 </td>
				<td> Ciudad </td>
				<td> Colonia </td>
				<td> Código postal </td>
				<td> Fecha de ingreso</td>
				<td> Salario   </td>
				<td> Tipo de Empleado </td>
				<td> Contraseña </td>
				<td> Fotografía </td>
			</tr>
			<?php
			while($reg = mysqli_fetch_array($consulta)){
				$var= "<img src=img/" . $reg['imagen'] . " width=80>";
				printf("<tr >
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
				<td> %.2f </td>
				<td> %s </td>
				<td> %s </td>
				<td> %s </td>
				</tr>",
				$reg['nombre'],
				$reg['apellidop'],
				$reg['apellidom'],
				$reg['email'],
				$reg['num_tel'],
				$reg['calle1'],
				$reg['calle2'],
				$reg['ciudad'],
				$reg['colonia'],
				$reg['codigo_postal'],
				$reg['fecha_ingreso'],
				$reg['salario'],
				$reg['tipo_empleado'],
				$reg['contrasena'],
				$var);

			}
			mysqli_free_result($consulta);
			mysqli_close($enlace);
			?>
		</table>
		<br>
		<a href="resultadosempleados.php" class="btn btn-success" color:blue;"> Ver todas las incidencias </a>
		<a href="usuarioadmin.php" class="btn btn-danger" color:blue; "> Salir </a>
	</body>
</html>