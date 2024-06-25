<?php
include('../../config/connect.php');

if(isset($_POST['btnSua'])){
	$resetPassword = "UPDATE tbl_user SET matkhau = 1 WHERE id_taikhoan = '$_GET[id_taikhoan]'";
	mysqli_query($mysqli, $resetPassword);
	
	header('Location: ../../index.php?action=quanlitaikhoan&query=them');
}
else{
	$id = $_GET['id_danhmuc'];
	$deleteTaikhoan = "DELETE FROM tbl_user WHERE id_taikhoan = '$_GET[id_taikhoan]'";
	mysqli_query($mysqli, $deleteTaikhoan);
	
	header('Location: ../../index.php?action=quanlitaikhoan&query=them');
}

?>