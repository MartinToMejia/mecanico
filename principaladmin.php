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

        <script>
            function pregunta() {
                if(window.confirm("¿Estás seguro de que quieres eliminar este registro?")) {
                    document.write("Eliminación exitosa");
                } else {
                    document.write("Eliminación cancelada");
                }
            }
        </script>
    </head>
    <body bgcolor="gray">
        <table>
            <tr>
                <td>
                    Usuario:
                </td>
                <td>
                    <a href="nuevousuario.html" target="_top"> <input type="button" value="Crear nuevo usuario"> </a>
                </td>
            </tr>
            <tr>
                <td>
                    Empleado:
                </td>
                <td>
                    <a href="nuevoempleado.html" target="_top"> <input type="button" value="Crear nuevo empleado"> </a>
                </td>
            </tr>
        </table>
    <?php
			include 'conex.php';
			$enlace = Conectarse();
			$consulta = mysqli_query($enlace, "select * from t_cliente");
		?>
		<table align="center" border="1" cellspacing="1" cellpadding="1" width="100%">
			<tr>
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
					<td> %s </td>
					<td> %s </td>
					<td> %s </td>
					<td> %d </td>
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
					$reg['rfc']);
				}
				mysqli_free_result($consulta);
				mysqli_close($enlace);
			?>
		</table>
    
        <p>Empleados:</p>

        <table border= "1" width="100%">
                <tr>
                    <td align="center"> 
                        Usuario
                    </td>
    
                    <td align="center">
                        Telefono
                    </td>
    
                    <td align="center">
                        Correo
                    </td>
    
                    <td align="center">
                        Ver usuario
                    </td>
    
                    <td align="center">
                        Modificar usuario
                    </td>
    
                    <td align="center">
                        Eliminar usuario
                    </td>
                </tr>
    
                <tr>
                    <td> 
                        Carlos Osvaldo
                    </td>
        
                    <td>
                        2222222222
                    </td>
        
                    <td>
                        carlos@example.com
                    </td>
    
                    <td align="center">
                        <a href="mostrarempleado.html" target="_top"> <input type="button" value="Ver"> </a>
                    </td>
        
                    <td align="center">
                        <a href="modificarempleado.html" target="_top"> <input type="button" value="Modificar"> </a>
                    </td>
        
                    <td align="center">
                        <input type="button" value="Eliminar" onclick="pregunta()"> 
                    </td>
                </tr>
    
                <tr>
                    <td> 
                        Carlos Octavio
                    </td>
            
                    <td>
                        2222222225
                    </td>
            
                    <td>
                        carlos_o@example.com
                    </td>
    
                    <td align="center">
                        <input type="button" value="Ver">
                    </td>
        
                    <td align="center">
                        <input type="button" value="Modificar">
                    </td>
            
                    <td align="center">
                        <input type="button" value="Eliminar"> 
                    </td>
                </tr>
    
                <tr>
                    <td> 
                        Erick Geovanni
                    </td>
            
                    <td>
                        2222222223
                    </td>
            
                    <td>
                        erick@example.com
                    </td>
    
                    <td align="center">
                        <input type="button" value="Ver">
                    </td>
        
                    <td align="center">
                        <input type="button" value="Modificar">
                    </td>
            
                    <td align="center">
                        <input type="button" value="Eliminar"> 
                    </td>
                </tr>
    
                <tr>
                    <td> 
                        Martín
                    </td>
            
                    <td>
                        2222222224
                    </td>
            
                    <td>
                        martin@example.com
                    </td>
    
                    <td align="center">
                        <input type="button" value="Ver">
                    </td>
    
                    <td align="center">
                        <input type="button" value="Modificar">
                    </td>
            
                    <td align="center">
                        <input type="button" value="Eliminar"> 
                    </td>
                </tr>
                    
            </table>

        <p>Cambios que puede realizar: </p>

        <br><br>

        <table align="center">
                <tr>
                    <td>
                        <div>
                            <img src="img/imagen.jpg" height="200" width="200">
                            <div>
                                <h3>Imágenes</h3>
                            </div>
                        </div>
                    </td>
            
                    <td>
                        <div>
                            <img src="img/info.jpg" height="200" width="200">
                            <div>
                                <h3>Información</h3>
                            </div>
                        </div>
                    </td>
            
                    <td>
                        <div>
                            <img src="img/contenido.jpg" height="200" width="200">
                            <div>
                                <h3>Contenido</h3>
                            </div>
                        </div>
                    </td>
    
                    <td>
                        <div>
                        <img src="img/refacciones.jpg" height="200" width="200">
                        <div>
                        <h3>Refacciones</h3>
                        </div>
                        </div>
                    </td>
                </tr>
            </table>
    </body>
</html>