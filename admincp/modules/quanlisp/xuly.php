<?php
include('../../config/connect.php');

$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];

$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time()."_".$hinhanh;

$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$id_danhmuc = $_POST['danhmuc'];

if(isset($_POST['btnThem'])){
	$insertSP = "INSERT INTO tbl_sanpham(tensanpham,masp, id_danhmuc, giasp,soluong,hinhanh,tomtat,noidung,tinhtrang) VALUE('".$tensanpham."','".$masp."','".$id_danhmuc."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."')";
	mysqli_query($mysqli, $insertSP);
	move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
	header('Location: ../../index.php?action=quanlisanpham&query=them');
}
elseif(isset($_POST['btnSua'])){
	
	if($hinhanh !=''){
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[id_sanpham]' LIMIT 1";
		$query = mysqli_query($mysqli, $sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}
		
		$updateSP = "UPDATE tbl_sanpham SET tensanpham = '".$tensanpham."', masp = '".$masp."', id_danhmuc = '".$id_danhmuc."', giasp = '".$giasp."', soluong = '".$soluong."', hinhanh = '".$hinhanh."', tomtat = '".$tomtat."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."' WHERE id_sanpham = '$_GET[id_sanpham]'";
	}
	else{
		$updateSP = "UPDATE tbl_sanpham SET tensanpham = '".$tensanpham."', masp = '".$masp."', id_danhmuc = '".$id_danhmuc."', giasp = '".$giasp."', soluong = '".$soluong."', tomtat = '".$tomtat."', noidung = '".$noidung."', tinhtrang = '".$tinhtrang."' WHERE id_sanpham = '$_GET[id_sanpham]'";
	}
	mysqli_query($mysqli, $updateSP);
	header('Location: ../../index.php?action=quanlisanpham&query=them');
}
else{
	$id = $_GET['id_sanpham'];
	$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
	$query = mysqli_query($mysqli, $sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$deleteSP = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
	mysqli_query($mysqli, $deleteSP);
	
	header('Location: ../../index.php?action=quanlisanpham&query=them');
}

?>