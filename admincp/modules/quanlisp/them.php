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

<p>Thêm sản phẩm</p>
<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<form action="modules/quanlisp/xuly.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <tr>
		<td>Tên sản phẩm</td>
		<td><input type="text" id="inputField" name="tensanpham"></td>
    </tr>
	<tr>
		<td>Mã sản phẩm</td>
		<td><input type="text" id="inputField" name="masp"></td>
    </tr>
	<tr>
		<td>Giá sản phẩm</td>
		<td><input type="text" id="inputField" name="giasp"></td>
    </tr>
	<tr>
		<td>Số lượng</td>
		<td><input type="text" id="inputField" name="soluong"></td>
    </tr>
	<tr>
		<td>Hình ảnh</td>
		<td><input type="file" id="inputField" name="hinhanh"></td>
    </tr>
	<tr>
		<td>Tóm tắt</td>
		<td><textarea rows="10" id="inputField" name="tomtat" id="tomtat" style="resize: none"></textarea></td>
    </tr>
	<tr>
		<td>Nội dung</td>
		<td><textarea rows="10" id="inputField" name="noidung" style="resize: none"></textarea></td>
    </tr>
	<tr>
		<td>Danh mục sản phẩm</td>
		<td>
			<select name="danhmuc">
				<?php
				$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
				$result = mysqli_query($mysqli, $sql_danhmuc);
				while($row = mysqli_fetch_array($result)){
				?>
				<option value="<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></option>
				<?php
				}
				?>
			</select>
		</td>
    </tr>
	<tr>
		<td>Tình trạng</td>
		<td>
			<select name="tinhtrang">
				<option value="1">Kích hoạt</option>
				<option value="0">Ẩn</option>
			</select>
		</td>
    </tr>
	<tr>
    	<td colspan="2"><input type="submit" name="btnThem" value="Thêm sản phẩm"></td>
	</tr>
	</form>
</table>