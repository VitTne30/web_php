<?php
include('../../config/connect.php');

$tendanhmuc = $_POST['tendanhmuc'];
if(isset($_POST['btnThem'])){
	$insertDanhmucBV = "INSERT INTO tbl_danhmucbaiviet(tendanhmuc) VALUE('".$tendanhmuc."')";
	mysqli_query($mysqli, $insertDanhmucBV);
	
	header('Location: ../../index.php?action=quanlidanhmucbaiviet&query=them');
}
elseif(isset($_POST['btnSua'])){
	$updateDanhmucBV = "UPDATE tbl_danhmucbaiviet SET tendanhmuc = '".$tendanhmuc."' WHERE id_danhmuc = '$_GET[id_danhmuc]'";
	mysqli_query($mysqli, $updateDanhmucBV);
	
	header('Location: ../../index.php?action=quanlidanhmucbaiviet&query=them');
}
else{
	$id = $_GET['id_danhmuc'];
	$deleteDanhmucBV = "DELETE FROM tbl_danhmucbaiviet WHERE id_danhmuc = '".$id."'";
	mysqli_query($mysqli, $deleteDanhmucBV);
	
	header('Location: ../../index.php?action=quanlidanhmucbaiviet&query=them');
}

?>