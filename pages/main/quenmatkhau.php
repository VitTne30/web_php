 <script>
    function validateForm() {
      // Lấy giá trị của hai ô nhập mật khẩu
      var password = document.getElementById("matkhaumoi").value;
      var confirmPassword = document.getElementById("confirm").value;

      // Kiểm tra xem hai mật khẩu có giống nhau hay không
      if (password !== confirmPassword) {
        alert("Mật khẩu và xác nhận mật khẩu không khớp!");
        return false; // Ngăn chặn việc submit nếu mật khẩu không khớp
      }

      // Nếu mật khẩu khớp, cho phép submit
      return true;
    }
</script>

<?php
if(isset($_POST['doimatkhau'])){
	$tentaikhoan = $_POST['tentaikhoan'];
	$email = $_POST['email'];
	$matkhaumoi = $_POST['matkhaumoi'];
	
	$getUser = "SELECT * FROM tbl_user WHERE tentaikhoan = '$tentaikhoan' AND email = '".$email."' LIMIT 1";
	
	$result = mysqli_query($mysqli, $getUser);
	$count = mysqli_num_rows($result);
	if($count>0){
		$updatePassword = "UPDATE tbl_user SET matkhau = '".$matkhaumoi."' WHERE tentaikhoan = '$tentaikhoan' AND email = '$email'";
		mysqli_query($mysqli, $updatePassword);
		echo '<p style="color:green">Thay đổi thành công!</p>';
	}
	else{
		echo '<p style="color:red">Tên tài khoản hoặc email  sai, vui lòng nhập lại</p>';
	}
}
?>

<form action="" autocomplete="off" method="post" onsubmit="return validateForm()">
	<table border="1" class="table_login" style="text-align: left; border-collapse: collapse">
		<tr>
			<td colspan="2" align="center">
				<h3>
					Tạo mật khẩu mới
				</h3>
			</td>
		</tr>
        <tr>
            <td>
                Tên tài khoản: 
            </td>
            <td align="center"><input type="text" name="tentaikhoan"></td>
        </tr>
        <tr>
            <td>
                Email: 
            </td>
            <td><input type="email" name="email"></td>
        </tr>
		<tr>
            <td>
                Mật khẩu mới: 
            </td>
            <td><input type="text" id="matkhaumoi" name="matkhaumoi"></td>
        </tr>
		<tr>
            <td>
                Xác nhận mật khẩu mới: 
            </td>
            <td><input type="text" id="confirm" name="confirm"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="doimatkhau" value="Đổi mật khẩu">
            </td>
        </tr>
	</table>
</form>