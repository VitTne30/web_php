<?php
session_start();
include("../../admincp/config/connect.php");
require('../../mail/sendmail.php');
require('../../carbon/autoload.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;

$datetime = Carbon::now('Asia/Ho_Chi_Minh');
$id_taikhoan = $_SESSION['id_taikhoan'];
$ma_donhang = rand(0,9999);
$payment = $_POST['payment'];

$id_taikhoan = $_SESSION['id_taikhoan'];
$sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_vanchuyen WHERE id_taikhoan='$id_taikhoan' LIMIT 1");
$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
$id_vanchuyen = $row_get_vanchuyen['id'];

$insertGiohang = "INSERT INTO tbl_giohang(id_taikhoan, ma_donhang, ngaydat, trangthai, payment, id_vanchuyen) VALUES('".$id_taikhoan."','".$ma_donhang."', '".$datetime."',1, '".$payment."', '".$id_vanchuyen."')";

$result = mysqli_query($mysqli, $insertGiohang);

if($result){
	foreach($_SESSION['cart'] as $item => $value){
		$id_sanpham = $value['id_sanpham'];
		$soluong = $value['soluong'];
		$insertChitietdonhang = "INSERT INTO tbl_chitietdonhang(ma_donhang, id_sanpham, soluongsp) VALUES('".$ma_donhang."','".$id_sanpham."','".$soluong."')";
		mysqli_query($mysqli, $insertChitietdonhang);
		
		$updateSanpham = "UPDATE tbl_sanpham SET soluong = soluong - '".$soluong."' WHERE id_sanpham = '".$id_sanpham."'";
		mysqli_query($mysqli, $updateSanpham);
	}
	
	$tieude = "Đặt hàng website thegioicongnghe.com thành công!!!";
	$noidung = "<p>Cảm ơn quý khách đã đặt hàng của chúng tôi với mã đơn hàng:<b>".$ma_donhang."</b></p>";
	$noidung .= "<h4>Đơn hàng bao gồm: </h4>";
	$tongtien = 0;
	foreach($_SESSION['cart'] as $item => $value){
		$thanhtien = $value['giasp'] * $value['soluong'];
		$tongtien += $thanhtien;
		$noidung .= "<ul style='border: 1px solid black, margin: 10px'>
			<li>Tên sản phẩm: ".$value['tensanpham']."</li>
			<li>Giá: ".number_format($value['giasp'],0,',','.')." vnd"."</li>
			<li>Số lượng: ".$value['soluong']."</li>
		</ul>";
	}
	$noidung .= "<p>Tổng giá trị đơn hàng: ".number_format($tongtien,0,',','.').' vnd'."</p>";
	$maildathang = $_SESSION['email'];
	$mail = new Mailer();
	$mail->Maildathang($tieude, $noidung ,$maildathang);
}
	unset($_SESSION['cart']);
	header("Location: ../../index.php?quanli=camon");

?>
