<html>
	<head> <title>Ejemplo PHP función conectarse</title> </head>
	<body>
		<?php 
			function Conectarse() {
				if(!($link = mysqli_connect("proydweb.com", "proydweb_p2020", "Dw3bp@020", "proydweb_P2020"))) {
					die('Error Conectado: ' . mysqli_connect_error());
					exit();
				}

				return $link;
			}

			?>
	</body>
</html>