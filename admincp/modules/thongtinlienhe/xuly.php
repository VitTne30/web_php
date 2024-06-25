<?php
include('../../config/connect.php');

$thongtinlienhe = $_POST['noidung'];
if(isset($_POST['capnhatthongtin'])){
	$capnhatthongtin = "UPDATE tbl_lienhe SET thongtinlienhe = '".$thongtinlienhe."'";
	mysqli_query($mysqli, $capnhatthongtin);
	
	header('Location: ../../index.php?action=lienhe&query=capnhat');
}
?>