<?php
session_start();
if(!isset($_SESSION['dangnhapNhanvien'])){
	header("Location: loginNhanvien.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>nhanvien</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
</head>
<body>
	<h3 class="title_admin"><a href="nhanviensite.php" style="text-decoration: none">Welcome to Nhân viên Site</a></h3>
	<div class="wrapper">
		<?php
			include("config/connect.php");
			include("nhanviens/header.php");
			include("nhanviens/menu.php");
			include("nhanviens/main.php");
    	?>	
	</div>
</body>
</html>