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

<p>Thêm bài viết</p>
<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<form action="modules/quanlibaiviet/xuly.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <tr>
		<td>Tên bài viết</td>
		<td><input type="text" id="inputField" name="tenbaiviet"></td>
    </tr>	
	<tr>
		<td>Hình ảnh</td>
		<td><input type="file" id="inputField" name="hinhanh"></td>
    </tr>
	<tr>
		<td>Tóm tắt</td>
		<td><textarea rows="10" id="inputField" name="tomtat" style="resize: none"></textarea></td>
    </tr>
	<tr>
		<td>Nội dung</td>
		<td><textarea rows="10" id="inputField" name="noidung" style="resize: none"></textarea></td>
    </tr>
	<tr>
		<td>Danh mục bài viết</td>
		<td>
			<select name="danhmuc">
				<?php
				$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_danhmuc ASC";
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
    	<td colspan="2"><input type="submit" name="btnThem" value="Thêm bài viết"></td>
	</tr>
	</form>
</table>