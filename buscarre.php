<html>
    <head>
	    <title> Procesar datos </title>
    </head>
    <body bgcolor="gray">
        <?php
            include "conex.php";
            $link=Conectarse();

            $consulta = mysqli_query($link, "SELECT descripcion, mano_obra, total, empleado_epo_id, auto_ato_id FROM t_reparacion WHERE descripcion = '".$_POST['descripcion']."'");
        ?>
        <h1>Resultado de la consulta</h1>

        <table align="center" border="1" cellspacing="1" cellpadding="1" width="70%">
            <tr>
                <td> Descripcion </td>
                <td> Mano de obra </td>
                <td> Total </td>
                <td> Empleado </td>
                <td> Auto </td>
            </tr>
            <?php
                while($reg = mysqli_fetch_array($consulta)) {
                    printf("<tr>
                    <td> %s </td>
                    <td> %.2f </td>
                    <td> %.2f </td>
                    <td> %d </td>
                    <td> %d </td>
                    </tr>",
                    $reg['descripcion'],
                    $reg['mano_obra'],
                    $reg['total'],
                    $reg['empleado_epo_id'],
                    $reg['auto_ato_id']);
                }
                mysqli_free_result($consulta);
                mysqli_close($link);
            ?>
        </table>
        <table>
									<tr>
									<td> <br> <input type="image" src="img\back_arrow.png" onclick=history.back() width="55" height="35"> </td>
									</tr>
								</table>
        <br>
    </body>
</html>
