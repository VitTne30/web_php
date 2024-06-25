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
	$tentaikhoan = $_SESSION['dangnhap'];
	$matkhaucu = $_POST['matkhaucu'];
	$matkhaumoi = $_POST['matkhaumoi'];
	$getUser = "SELECT * FROM tbl_user WHERE tentaikhoan = '$tentaikhoan' AND matkhau = '".$matkhaucu."' LIMIT 1";
	
	$result = mysqli_query($mysqli, $getUser);
	$count = mysqli_num_rows($result);
	if($count>0){
		$updateUser = "UPDATE tbl_user SET matkhau = '".$matkhaumoi."' WHERE tentaikhoan = '$tentaikhoan' ";
		mysqli_query($mysqli, $updateUser);
		echo '<p style="color:green">Thay đổi thành công!</p>';
	}
	else{
		echo '<p style="color:red">Tên tài khoản hoặc mật khẩu sai, vui lòng nhập lại</p>';
	}
}
?>

<form action="" autocomplete="off" method="post" onsubmit="return validateForm()">
	<table border="1" class="table_login" style="text-align: left; border-collapse: collapse">
		<tr>
			<td colspan="2" align="center">
				<h3>
					Đổi mật khẩu
				</h3>
			</td>
		</tr>
        <tr>
            <td>
                Tên tài khoản: 
            </td>
            <td align="center"><?php echo $_SESSION['dangnhap']?></td>
        </tr>
        <tr>
            <td>
                Mật khẩu cũ: 
            </td>
            <td><input type="text" name="matkhaucu"></td>
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