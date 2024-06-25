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

<h4>Thêm Nhân viên</h4>
<table border="1px solid black" width="50%" style="border-collapse: collapse">
	<form action="modules/quanlinhanvien/xuly.php" method="post" onsubmit="return validateForm()">
    <tr>
		<td>Tên nhân viên</td>
		<td><input type="text" id="inputField" name="hoten"></td>
    </tr>
	<tr>
		<td>Tên đăng nhập</td>
		<td><input type="text" id="inputField" name="tendangnhap"></td>
    </tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="text" id="inputField" name="matkhau"></td>
    </tr>
	<tr>
		<td>Giới tính</td>
		<td>
            <label>
                <input type="radio" name="gioitinh" value="Nam">
                Nam
            </label>
            <label>
                <input type="radio" name="gioitinh" value="Nữ">
                Nữ
            </label>
            <label>
                <input type="radio" name="gioitinh" value="Khác">
                Khác
            </label>
		</td>	
	</tr>
	<tr>
		<td>Số điện thoại</td>
		<td><input type="text" id="inputField" name="sdt"></td>
    </tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" id="inputField" name="diachi"></td>
    </tr>
	<tr>
    	<td colspan="2"><input type="submit" name="btnThem" value="Thêm nhân viên"></td>
	</tr>
	</form>
</table>