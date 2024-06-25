<?php
include('../../config/connect.php');

	if(isset($_GET['trangthai']) && isset($_GET['code'])){
		$state = $_GET['trangthai'];
		$code = $_GET['code'];
		
		$updateTrangthai = "UPDATE tbl_giohang SET trangthai = '".$state."' WHERE ma_donhang = '".$code."'";
		$result = mysqli_query($mysqli, $updateTrangthai);
		
		header("Location: ../../index.php?action=quanlidonhang&query=lietke");
	}
?>