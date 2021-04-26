<?php

session_start();
include 'conex.php';
$enlace = Conectarse();

	$correo=$_POST['correo'];
	$contrasena=$_POST['contrasena'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$empleado=mysqli_query($enlace,"SELECT * FROM t_empleado WHERE email='$correo'");
	$usuario=mysqli_query($enlace,"SELECT * FROM t_cliente WHERE email='$correo'");

	if($f1=mysqli_fetch_assoc($empleado)) {
		if($contrasena == $f1['contrasena'] and $f1['tipo_empleado'] == 'Administrado') {
			$_SESSION['epo_id']=$f1['epo_id'];
			$_SESSION['nombre']=$f1['nombre'];
			$_SESSION['tipo_empleado']=$f1['tipo_empleado'];
			$_SESSION['imagen']=$f1['imagen'];

			echo '<script>alert("Bienvenido administrador")</script> ';
			echo "<script>location.href='usuarioadmin.php'</script>";
		
		} else if($contrasena == $f1['contrasena'] and $f1['tipo_empleado'] == 'Mecánico') {
			$_SESSION['epo_id']=$f1['epo_id'];
			$_SESSION['nombre']=$f1['nombre'];
			$_SESSION['email']=$f1['email'];
			$_SESSION['fecha_ingreso']=$f1['fecha_ingreso'];
			$_SESSION['salario']=$f1['salario'];
			$_SESSION['tipo_empleado']=$f1['tipo_empleado'];
			$_SESSION['imagen']=$f1['imagen'];

			echo '<script>alert("Bienvenido empleado")</script> ';
			echo "<script>location.href='usuarioempleado.php'</script>";

		} else {
			echo '<script>alert("Contraseña incorrecta")</script> ';
		
			echo "<script>location.href='login.php'</script>";
		}
	} else if($f2=mysqli_fetch_assoc($usuario)) {
		if($contrasena == $f2['contrasena']) {
			$_SESSION['cte_id']=$f2['cte_id'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['tipo_cliente']=$f2['tipo_cliente'];
			$_SESSION['imagen']=$f2['imagen'];
			$_SESSION['num_tel']=$f2['num_tel'];
			$_SESSION['apellidop']=$f2['apellidop'];
			$_SESSION['apellidom']=$f2['apellidom'];
			$_SESSION['email']=$f2['email'];

			echo '<script>alert("Bienvenido cliente")</script> ';
			echo "<script>location.href='usuariocuenta.php'</script>";

		} else {
			echo '<script>alert("Contraseña incorrecta")</script> ';
		
			echo "<script>location.href='login.php'</script>";
		}

	} else{
		
		echo '<script>alert("Este usuario no existe, por favor contáctese con el administrador para generar su cuenta")</script> ';
		
		echo "<script>location.href='login.php'</script>";	

	}

	
	
?>