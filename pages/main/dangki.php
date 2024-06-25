<script>
    function validateForm() {
      // Lấy giá trị của thẻ input
      var inputValue = document.getElementById("inputField").value;

      // Kiểm tra nếu giá trị là rỗng
      if (inputValue.trim() === "") {
        alert("Vui lòng nhập đầy đủ thông tin!");
        return false; // Ngăn chặn việc submit nếu giá trị là rỗng
      }
      // Nếu giá trị không rỗng, cho phép submit
      return true;
    }
</script>

<?php
if(isset($_POST['dangki'])){
	$hoten = $_POST['hoten'];
	$tentaikhoan = $_POST['tentaikhoan'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$diachi = $_POST['diachi'];
	$matkhau = $_POST['matkhau'];
	
	$insertUser = "INSERT INTO tbl_user(tentaikhoan, hoten, email, diachi, matkhau, dienthoai) VALUE('".$tentaikhoan."', '".$hoten."', '".$email."', '".$diachi."', '".$matkhau."', '".$sdt."')";
	
	$result =  mysqli_query($mysqli, $insertUser);
	if($result){
		$_SESSION['dangki'] = $tentaikhoan;
		$_SESSION['id_taikhoan'] =  mysql_insert_id($mysqli);
		$_SESSION['email'] = $email;
		header("Location: index.php?quanli=dangnhap");
	}
}
?>


<h2>Đăng kí tài khoản</h2>

<style type="text/css">
	table.dangki tr td{
		padding: 5px;
	}
</style>

<form action="" method="post"  onsubmit="return validateForm()">
<table class="dangki" border="1" width="50%" style="border-collapse: collapse">
	<tr>
		<td>Họ và tên</td>
		<td><input type="text" id="inputField" size="50" name="hoten"></td>
	</tr>
	<tr>
		<td>Tên tài khoản</td>
		<td><input type="text" id="inputField" size="50" name="tentaikhoan"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" id="inputField" size="50" name="email"></td>
	</tr>
	<tr>
		<td>SDT</td>
		<td><input type="tel" id="inputField" size="50" name="sdt"></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" id="inputField" size="50" name="diachi"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="text" id="inputField" size="50" name="matkhau"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="dangki" value="Đăng kí"></td>
	</tr>
</table>

</form>