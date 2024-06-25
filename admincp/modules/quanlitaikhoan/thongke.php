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

	$sql_lietke_nv = "SELECT * FROM tbl_user";
	$result = mysqli_query($mysqli, $sql_lietke_nv);

	$pdf->Write(10,"Tổng số tài khoản khách hàng: ".mysqli_num_rows($result));
	$pdf->Ln(10);

	$width_cell=array(15,40,45,80,55,50);

	$pdf->Cell($width_cell[0],10,'STT',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Tên tài khoản',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên đăng kí',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Email',1,0,'C',true);
	$pdf->Cell($width_cell[4],10,'Địa chỉ',1,0,'C',true);
	$pdf->Cell($width_cell[5],10,'SĐT',1,1,'C',true);
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$i = 0;

	while($row = mysqli_fetch_array($result)){
		$i++;
	$pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
	$pdf->Cell($width_cell[1],10,$row['tentaikhoan'],1,0,'C',$fill);
	$pdf->Cell($width_cell[2],10,$row['hoten'],1,0,'C',$fill);
	$pdf->Cell($width_cell[3],10,$row['email'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],10,$row['diachi'],1,0,'C',$fill);
	$pdf->Cell($width_cell[5],10,$row['dienthoai'],1,1,'C',$fill);
	$fill = !$fill;

	}
//	$pdf->Write(10,'Cảm ơn bạn đã đặt hàng tại website của chúng tôi.');
//	$pdf->Ln(10);

	$pdf->Output();
?>