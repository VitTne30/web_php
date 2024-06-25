<?php
if(isset($_POST['dangnhap'])){
	$tentaikhoan = $_POST['tentaikhoan'];
	$matkhau = $_POST['matkhau'];
	
	$getUser = "SELECT * FROM tbl_user WHERE tentaikhoan = '".$tentaikhoan."' AND matkhau = '".$matkhau."' LIMIT 1";
	
	$result =  mysqli_query($mysqli, $getUser);
	$count = mysqli_num_rows($result);
	if($count>0){
		$row_data = mysqli_fetch_array($result);
		$_SESSION['dangnhap'] = $tentaikhoan;
		$_SESSION['id_taikhoan'] = $row_data['id_taikhoan'];
		$_SESSION['email'] = $row_data['email'];
		header("Location: index.php?quanli=giohang");
	}
	else{
		echo '<p style="color:red">Tên tài khoản hoặc mật khẩu sai, vui lòng nhập lại</p>';
	}
}
?>

<style type="text/css">
	table.dangnhap tr td{
		padding: 5px;
	}
</style>

<form action="" method="post">
<table class="dangnhap" border="1" width="50%" style="border-collapse: collapse">
	<tr>
        <td colspan="2" align="center">
            <h3>
                Đăng nhập tài khoản
            </h3>
        </td>
	</tr>
		<td>Tên tài khoản</td>
		<td><input type="text" size="60" name="tentaikhoan" placeholder="Tên tài khoản..."></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="text" size="60" name="matkhau" placeholder="Mật khẩu..."></td>
	</tr>
	<tr>
		<td><a href="index.php?quanli=quenmatkhau">Quên mật khẩu?</a></td>
		<td align="right"><a href="index.php?quanli=dangki">Chưa có tài khoản? Đăng kí ngay</a></td>
	</tr>
	<tr>
		<td><input type="submit" name="dangnhap" value="Đăng nhập"></td>
	</tr>
</table>

</form>