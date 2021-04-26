<?php
	$mysqli=new mysqli("proydweb.com","proydweb_p2020","Dw3bp@020","proydweb_P2020"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
 
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	$acentos = $mysqli->query("SET NAMES 'utf8'")
?>