<?php
	include 'plantila.php';
	include 'conex.php';
	
	$query = "SELECT r.rfn_id, r.nombre, i.costo, r.descripcion, i.stock FROM t_inventario i INNER JOIN t_refaccion r ON (i.ivo_id = r.inventario_ivo_id);";
	$resultado = $mysqli->query($query);

	$pdf->AliasNbPages();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'Id',1,0,'C',1);
	$pdf->Cell(20,6,'Nombre',1,0,'C',1);
    $pdf->Cell(70,6,'Costo',1,1,'C',1);
    $pdf->Cell(70,6,'Descripcion',1,1,'C',1);
    $pdf->Cell(70,6,'Stock',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['rfn_id']),1,0,'C');
		$pdf->Cell(20,6,$row['nombre'],1,0,'C');
        $pdf->Cell(70,6,utf8_decode($row['costo']),1,1,'C');
        $pdf->Cell(70,6,utf8_decode($row['descripcion']),1,1,'C');
        $pdf->Cell(70,6,utf8_decode($row['stock']),1,1,'C');
	}
	$pdf->Output();
?>