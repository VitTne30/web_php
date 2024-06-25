<?php
include('../../config/connect.php');

$tendanhmuc = $_POST['tendanhmuc'];
if(isset($_POST['btnThem'])){
	$insertDanhmucsp = "INSERT INTO tbl_danhmuc(tendanhmuc) VALUE('".$tendanhmuc."')";
	mysqli_query($mysqli, $insertDanhmucsp);
	
	header('Location: ../../index.php?action=quanlidanhmucsanpham&query=them');
}
elseif(isset($_POST['btnSua'])){
	$updateDanhmucsp = "UPDATE tbl_danhmuc SET tendanhmuc = '".$tendanhmuc."' WHERE id_danhmuc = '$_GET[id_danhmuc]'";
	mysqli_query($mysqli, $updateDanhmucsp);
	
	header('Location: ../../index.php?action=quanlidanhmucsanpham&query=them');
}
else{
	$id = $_GET['id_danhmuc'];
	$deleteDanhmucsp = "DELETE FROM tbl_danhmuc WHERE id_danhmuc = '".$id."'";
	mysqli_query($mysqli, $deleteDanhmucsp);
	
	header('Location: ../../index.php?action=quanlidanhmucsanpham&query=them');
}

?>