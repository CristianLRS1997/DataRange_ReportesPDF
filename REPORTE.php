<?php



	include 'plantilla.php';
	require 'conexion.php';

	$query = "SELECT * FROM tbl_order ORDER BY order_id desc";
	$resultado = $mysqli->query($query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage('L');

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(50,6,'Customer Name',1,0,'C',1);
	$pdf->Cell(90,6,'Item',1,0,'C',1);
	$pdf->Cell(40,6,'Value',1,0,'C',1);
	$pdf->Cell(40,6,'Order Date',1,1,'C',1);

	$pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(10,6,utf8_decode($row['order_id']),1,0,'C');
		$pdf->Cell(50,6,$row['order_customer_name'],1,0,'C');
		$pdf->Cell(90,6,utf8_decode($row['order_item']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['order_value']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['order_date']),1,1,'C');
	}
	$pdf->Output();
?>