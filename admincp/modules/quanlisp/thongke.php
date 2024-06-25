<?php
	require('../../../tfpdf/tfpdf.php');
	require('../../config/connect.php');

	$pdf = new tFPDF();
	$pdf->AddPage("0");
	// $pdf->SetFont('Arial','B',16);
	// Add a Unicode font (uses UTF-8)
	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->SetFont('DejaVu','',15);
	
	$pdf->SetFillColor(193,229,252);
	//set header 

	$sql_lietke_sp = "SELECT * FROM tbl_sanpham ORDER BY id_danhmuc";
	$result = mysqli_query($mysqli, $sql_lietke_sp);

	$pdf->Write(10,"Tổng số sản phẩm: ".mysqli_num_rows($result));
	$pdf->Ln(10);

	$width_cell=array(15,35,130,40,50);

	$pdf->Cell($width_cell[0],10,'STT',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Mã sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Số lượng',1,0,'C',true);
	$pdf->Cell($width_cell[4],10,'Giá tiền',1,1,'C',true);
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$i = 0;

	while($row = mysqli_fetch_array($result)){
		$i++;
	$pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
	$pdf->Cell($width_cell[1],10,$row['masp'],1,0,'C',$fill);
	$pdf->Cell($width_cell[2],10,$row['tensanpham'],1,0,'C',$fill);
	$pdf->Cell($width_cell[3],10,$row['soluong'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],10, number_format($row['giasp'],0,',','.')." vnd",1,1,'C',$fill);
	$fill = !$fill;

	}
//	$pdf->Write(10,'Cảm ơn bạn đã đặt hàng tại website của chúng tôi.');
//	$pdf->Ln(10);

	$pdf->Output();
?>