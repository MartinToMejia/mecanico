<html>
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
    <link href="fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link href="fontawesome-free-5.13.0-web/js/all.js" rel="stylesheet">
    </head>
	<body class="p-3 mb-2 bg-light text-dark"> 
    
    <h1 class="text-info"> <p align="center"> Resultados de carros</p> </h1>

	<table width="100%">
		<tr>
			<td> <img src="img/portada.jpg" height="250" width="100%"></td>
		</tr>
    </table>
    
		<?php
			
			include 'conex.php';
			$enlace = Conectarse();
			$consulta = mysqli_query($enlace, "select * from t_empleado");
		?>

		<h2>Empleados:</h2>

		<table align="center" border="1" cellspacing="1" cellpadding="1" width="100%" class=" table table-striped">
			<tr class="table-info">
				<td> Id </td>
				<td> Matricula </td>
				<td> Marca </td>
				<td> Modelo </td>
				<td> Año </td>
				<td> Fecha de registro </td>
				<td> Cliente  </td>
			</tr>
			<?php
			while($reg = mysqli_fetch_array($consulta)){
			printf("<tr>
			<td> %d </td>
			<td> %s </td>
			<td> %s </td>
			<td> %s </td>
			<td> %d </td>
			<td> %s </td>
			<td> %d </td>
			</tr>",
			$reg['ato_id'],
			$reg['matricula'],
			$reg['marca'],
			$reg['modelo'],
			$reg['anio'],
			$reg['fecha_registro'],
			$reg['cliente_cte_id']);

			}
			mysqli_free_result($consulta);
			mysqli_close($enlace);
			?>
		</table>
	<br>
	<a href="usuarioadmin.php" class="btn btn-outline-danger" color:blue;"> SALIR </a>
	</body>
</html>