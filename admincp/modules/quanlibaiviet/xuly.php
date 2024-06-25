<?php
include('../../config/connect.php');

$tenbaiviet = $_POST['tenbaiviet'];

$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time()."_".$hinhanh;

$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$id_danhmuc = $_POST['danhmuc'];

if(isset($_POST['btnThem'])){
	$insertBV = "INSERT INTO tbl_baiviet(tenbaiviet,id_danhmuc,hinhanh,tomtat,noidung) VALUE('".$tenbaiviet."','".$id_danhmuc."','".$hinhanh."','".$tomtat."','".$noidung."')";
	mysqli_query($mysqli, $insertBV);
	move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
	header('Location: ../../index.php?action=quanlibaiviet&query=them');
}
elseif(isset($_POST['btnSua'])){
	
	if($hinhanh !=''){
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		$sql = "SELECT * FROM tbl_baiviet WHERE id_baiviet = '$_GET[id_baiviet]' LIMIT 1";
		$query = mysqli_query($mysqli, $sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}
		
		$updateBV = "UPDATE tbl_baiviet SET tenbaiviet = '".$tenbaiviet."', id_danhmuc = '".$id_danhmuc."', hinhanh = '".$hinhanh."', tomtat = '".$tomtat."', noidung = '".$noidung."' WHERE id_baiviet = '$_GET[id_baiviet]'";
	}
	else{
		$updateBV = "UPDATE tbl_baiviet SET tenbaiviet = '".$tenbaiviet."', id_danhmuc = '".$id_danhmuc."', tomtat = '".$tomtat."', noidung = '".$noidung."' WHERE id_baiviet = '$_GET[id_baiviet]'";
	}
	mysqli_query($mysqli, $updateBV);
	header('Location: ../../index.php?action=quanlibaiviet&query=them');
}
else{
	$id = $_GET['id_baiviet'];
	$sql = "SELECT * FROM tbl_baiviet WHERE id_baiviet = '$id' LIMIT 1";
	$query = mysqli_query($mysqli, $sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$deleteBV = "DELETE FROM tbl_baiviet WHERE id_baiviet = '".$id."'";
	mysqli_query($mysqli, $deleteBV);
	
	header('Location: ../../index.php?action=quanlibaiviet&query=them');
}

?>