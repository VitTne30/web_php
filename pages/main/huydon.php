<?php
session_start();
include("../../admincp/config/connect.php");
require('../../mail/sendmail.php');

$ma_donhang = $_GET['code'];

$deleteDonhang = "DELETE FROM tbl_giohang WHERE ma_donhang = '$ma_donhang'";
$result = mysqli_query($mysqli, $deleteDonhang);

	$tieude = "Đơn hàng đã được huỷ";
	$noidung = "<p>Quý khách vừa thực hiện huỷ đơn hàng mã <b>".$ma_donhang."</b> tại Website chúng tôi</p>";
	$noidung .= "<h4>Đơn hàng bao gồm: </h4>";
	$tongtien = 0;
	
	$selectDonhang = "SELECT * FROM tbl_sanpham A, tbl_chitietdonhang B WHERE B.ma_donhang = ".$ma_donhang." AND A.id_sanpham = B.id_sanpham";
	$donhang = mysqli_query($mysqli, $selectDonhang);
	
	while($row = mysqli_fetch_array($donhang)){
		$thanhtien = $row['giasp'] * $row['soluongsp'];
		$tongtien += $thanhtien;
		$noidung .= "<ul style='border: 1px solid black, margin: 10px'>
			<li>Tên sản phẩm: ".$row['tensanpham']."</li>
			<li>Giá: ".number_format($row['giasp'],0,',','.')." vnd"."</li>
			<li>Số lượng: ".$row['soluongsp']."</li>
		</ul>";	
		
		$updateSanpham = "UPDATE tbl_sanpham SET soluong = soluong + '".$row['soluongsp']."' WHERE id_sanpham = '".$row['id_sanpham']."'";
		mysqli_query($mysqli, $updateSanpham);
	}
	$noidung .= "<p>Tổng giá trị đơn hàng: <b>".number_format($tongtien,0,',','.').' vnd'."</b> </p>";
	$noidung .= "<h4>Hi vọng được đón tiếp quý khách lần tới!!!</h4>";
	$mailhuydonhang = $_SESSION['email'];
	$mail = new Mailer();
	$mail->Maildathang($tieude, $noidung ,$mailhuydonhang);

header("Location: ../../index.php?quanli=lichsumuahang");
?>