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


<p>Thêm danh mục sản phẩm</p>
<table border="1px solid black" width="50%" style="border-collapse: collapse">
	<form action="modules/quanlidanhmucsp/xuly.php" method="post" onsubmit="return validateForm()">
    <tr>
		<td>Tên danh mục</td>
		<td><input type="text" id="inputField" name="tendanhmuc"></td>
    </tr>
	<tr>
    	<td colspan="2"><input type="submit" name="btnThem" value="Thêm danh mục sản phẩm"></td>
	</tr>
	</form>
</table>