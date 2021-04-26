<?php 
	include ("seguridad.php"); 
	include ("conexion.php");	

	$consulta = 'SELECT r.rfn_id, r.nombre, i.costo, r.descripcion, i.stock FROM t_inventario i INNER JOIN t_refaccion r ON (i.ivo_id = r.inventario_ivo_id);';	
	$resultado=$mysqli->query($consulta);
 
if(isset($_POST['create_pdf'])){
	require_once('tcpdf/tcpdf.php');
 
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
 
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Martin Toral');
	$pdf->SetTitle('Reporte de Inventario');
	
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();
 
	$content = '';
 
	$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">Reporte de Inventario</h1>
 
      <table border="1" cellpadding="5" class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Costo</th>
            <th>Descripcion</th>
            <th>Stock</th>
          </tr>
        </thead>
	';
 
	while ($row=$resultado->fetch_assoc()) { 
	$content .= '
		<tr bgcolor="'.$color.'">
            <td>'.$row['rfn_id'].'</td>
            <td>'.utf8_decode($row['nombre']).'</td>
            <td>'.$row['costo'].'</td>
            <td>'.utf8_decode($row['descripcion']).'</td>
            <td>'.$row['stock'].'</td>
        </tr>
	';
	}
 
	$content .= '</table>';
 
	$pdf->writeHTML($content, true, 0, true, 0);
 
	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
}
	
?>
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
    
    <h1 class="text-info"> Consulta inventario </h1>

	<table width="100%">
		<tr>
			<td> <img src="img/portada.jpg" height="250" width="100%"></td>
		</tr>
    </table>
    
		<h2>Consulta inventario:</h2>

		<table align="center" border="1" cellspacing="1" cellpadding="1" width="100%" class=" table table-striped">
			<tr class="table-info">
				<td> Id </td>
				<td> Nombre </td>
				<td> Costo </td>
				<td> Descripcion </td>
				<td> Stock </td>
			</tr>
			<?php 
			while ($row=$resultado->fetch_assoc()) {   ?>
          <tr>
            <td><?php echo $row['rfn_id']; ?></td>
            <td><?php echo utf8_decode($row['nombre']); ?></td>
            <td><?php echo $row['costo']; ?></td>
            <td><?php echo utf8_decode($row['descripcion']); ?></td>
            <td><?php echo $row['stock']; ?></td>
          </tr>
         <?php } ?>
		</table>
	<br>
	

	<div class="col-md-12">
        <form method="post">
			<a href="usuarioadmin.php" class="btn btn-danger"> Salir </a>
            <input type="submit" name="create_pdf" class="btn btn-success pull-right" value="Generar PDF">
        </form>
    </div>
	</body>
</html>