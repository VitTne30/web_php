<?php
session_start();
include("config/connect.php");

if(isset($_POST['dangnhap'])){
	$taikhoan = $_POST['username'];
	$matkhau = $_POST['password'];
	$getAdmin = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
	
	$result = mysqli_query($mysqli, $getAdmin);
	
	$count = mysqli_num_rows($result);
	if($count>0){
		$_SESSION['dangnhapAdmin'] = $taikhoan;
		header("Location: index.php");
	}
	else{
//		echo '<script>alert("Tài khoản hoặc mật khẩu sai. Yêu cầu nhập lại!");</script>';
		header("Location: login.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập hệ thống</title>
	
	<style type="text/css">
		body{
			background: #f2f2f2;
		}
		
		.wrapper_login{
			width: 20%;
			margin: 0 auto;
		}
		
		table.table_login{
			width: 100%;
		}
		
		table.table_login tr td{
			padding: 5px
		}
		
	</style>
</head>
<body>
	<div class="wrapper_login">
		<form action="" autocomplete="off" method="post">
		<table border="1" class="table_login" style="text-align: center; border-collapse: collapse">
			<tr>
				<td colspan="2" align="center">
					<h3>
						Đăng nhập hệ thống
					</h3>
				</td>
			</tr>
			<tr>
				<td>
					Tên tài khoản: 
				</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>
					Mật khẩu: 
				</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="dangnhap" value="Đăng nhập">
				</td>
			</tr>
		</table>
		</form>
<!--		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>-->
	</div>
</body>
</html>