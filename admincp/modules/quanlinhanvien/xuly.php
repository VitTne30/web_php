<?php
include('../../config/connect.php');

$hoten = $_POST['hoten'];
$tendangnhap = $_POST['tendangnhap'];
$gioitinh = $_POST['gioitinh'];
$sdt = $_POST['sdt'];
$diachi = $_POST['diachi'];
$matkhau = $_POST['matkhau'];

if(isset($_POST['btnThem'])){
	$insertNV = "INSERT INTO tbl_nhanvien(hoten ,sdt, diachi, gioitinh, tendangnhap, matkhau) VALUE('".$hoten."','".$sdt."','".$diachi."','".$gioitinh."','".$tendangnhap."','".$matkhau."')";
	mysqli_query($mysqli, $insertNV);
	
	header('Location: ../../index.php?action=quanlinhanvien&query=them');
}
elseif(isset($_POST['btnSua'])){
		
	$updateNV = "UPDATE tbl_nhanvien SET hoten = '".$hoten."', tendangnhap = '".$tendangnhap."', gioitinh = '".$gioitinh."', sdt = '".$sdt."', diachi = '".$diachi."', matkhau = '".$matkhau."' WHERE ID = '$_GET[ID]'";
	
	mysqli_query($mysqli, $updateNV);
	header('Location: ../../index.php?action=quanlinhanvien&query=them');
}
else{
	$ID = $_GET['ID'];
	$sql = "SELECT * FROM tbl_nhanvien WHERE ID = '$ID' LIMIT 1";
	$query = mysqli_query($mysqli, $sql);
	
	$deleteNV = "DELETE FROM tbl_nhanvien WHERE ID = '$ID'";
	mysqli_query($mysqli, $deleteNV);
	
	header('Location: ../../index.php?action=quanlinhanvien&query=them');
}

?>