<?php
	$lietketaikhoan = "SELECT * FROM tbl_user ORDER BY id_taikhoan ASC";
	$result = mysqli_query($mysqli, $lietketaikhoan);
?>

<script>
  function confirmAction() {
    // Hiển thị hộp thoại cảnh báo và lấy kết quả
    var result = window.confirm("Bạn có chắc chắn muốn thực hiện hành động này không?");

    // Kiểm tra kết quả
    if (result) {
      alert("Bạn đã chọn OK!");
      // Thực hiện hành động khi người dùng chọn OK
    } else {
		alert("Bạn đã chọn Cancel!");
		event.preventDefault();
    }
  }
</script>

<h2>Tổng số tài khoản người dùng: <?php echo mysqli_num_rows($result).' <button class="statistics-button"><a href="modules/quanlitaikhoan/thongke.php">Thống kê</a></button>'?></h2>

<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<tr>
		<th>STT</th>
		<th>Tên tài khoản</th>
		<th colspan="2">Quản lí</th>
	</tr>
	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)){
		$i++;
	?>
    <tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['tentaikhoan'] ?></td>
		<td>
			<form action="modules/quanlitaikhoan/xuly.php?&id_taikhoan=<?php echo $row['id_taikhoan']?>" method="post">
				<input type="submit" name="btnSua" value="Reset mật khẩu" onclick="confirmAction()">
			</form>
		</td>
		<td>
			<a href="modules/quanlitaikhoan/xuly.php?&id_taikhoan=<?php echo $row['id_taikhoan']?>" onclick="confirmAction()">
                Xoá tài khoản
            </a>
		</td>
    </tr>
	<?php
	}
	?>
</table>