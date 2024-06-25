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

	$madonhang = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_chitietdonhang A, tbl_sanpham B WHERE A.id_sanpham = B.id_sanpham AND A.ma_donhang = '$_GET[code]' ORDER BY A.id_chitietdonhang ASC";
	$result = mysqli_query($mysqli, $sql_lietke_dh);

	$getKH = "SELECT * FROM tbl_user A, tbl_giohang B WHERE B.ma_donhang = '$_GET[code]' LIMIT 1";
	$resultKH = mysqli_query($mysqli, $getKH);

    $rowKH = mysqli_fetch_array($resultKH);

	$getDiachi = "SELECT * FROM tbl_vanchuyen A WHERE A.id_taikhoan = '.$rowKH[hoten].' LIMIT 1";
	$resultDiachi = mysqli_query($mysqli, $getDiachi);

	$rowDiachi = mysqli_fetch_array($resultDiachi);

	$pdf->AddFont('DejaVu','','DejaVuSans-Bold.ttf',true);
	$pdf->SetFont('DejaVu','',25);
	$pdf->Cell(0,10,"Thế giới phụ kiện", 0, 1, 'C');

	
	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->SetFont('DejaVu','',15);	
	$pdf->Cell(0,10,"Địa chỉ: 162 - 164 Thái Hà, Phường Trung Liệt, Đống Đa, Hà Nội.", 0, 1, 'L');
	
	$pdf->Cell(0,10,"Liên hệ: 0373605557", 0, 1, 'L');
	$pdf->Cell(0,10, "----------------------------------------------------------------------------------------------------------------------------",0,1,"C");

	$pdf->AddFont('DejaVu','','DejaVuSans-Bold.ttf',true);
	$pdf->SetFont('DejaVu','',25);
	$pdf->Cell(0,10,"Hoá đơn", 0, 1, 'C');

	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->SetFont('DejaVu','',15);	
	$pdf->Write(10,"Thông tin khách hàng: ".$rowKH['hoten']);
	$pdf->Ln(10);
	$pdf->Write(10,"Địa chỉ nhận hàng: ".$rowDiachi['diachinhanhang']);
	$pdf->Ln(10);

	$pdf->Write(10,"Đơn hàng ".$madonhang." gồm có:");
	$pdf->Ln(10);

	$width_cell=array(15,35,125,30,40,40);

	$pdf->Cell($width_cell[0],10,'STT',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Mã sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Số lượng',1,0,'C',true); 
	$pdf->Cell($width_cell[4],10,'Giá',1,0,'C',true);
	$pdf->Cell($width_cell[5],10,'Tổng tiền',1,1,'C',true); 
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$i = 0;

	while($row = mysqli_fetch_array($result)){
		$i++;
	$pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
	$pdf->Cell($width_cell[1],10,$row['masp'],1,0,'C',$fill);
	$pdf->Cell($width_cell[2],10,$row['tensanpham'],1,0,'C',$fill);
	$pdf->Cell($width_cell[3],10,$row['soluongsp'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],10,number_format($row['giasp']),1,0,'C',$fill);
	$pdf->Cell($width_cell[5],10,number_format($row['soluongsp']*$row['giasp']),1,1,'C',$fill);
	$fill = !$fill;

	}
	$pdf->Ln(10);
	$pdf->Write(10,'Cảm ơn bạn đã đặt hàng tại website của chúng tôi.');
	$pdf->Ln(10);

	$pdf->Output();
?>