<?php
	$lietketaikhoan = "SELECT * FROM tbl_nhanvien ORDER BY ID ASC";
	$result = mysqli_query($mysqli, $lietketaikhoan);
?>

<h2>Tổng số Nhân viên: <?php echo mysqli_num_rows($result).' <button class="statistics-button"><a href="modules/quanlinhanvien/thongke.php">Thống kê</a></button>'?></h2>

<script>
  function confirmAction() {
    // Hiển thị hộp thoại cảnh báo và lấy kết quả
    var result = window.confirm("Bạn có chắc chắn muốn thực hiện hành động này không?");

    // Kiểm tra kết quả
    if (result) {
      // Thực hiện hành động khi người dùng chọn OK
    } else {
		event.preventDefault();
    }
  }
</script>

<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<tr>
		<th>STT</th>
		<th>Tên nhân viên</th>
		<th>Tên đăng nhập</th>
		<th>Mật khẩu</th>
		<th>SĐT</th>
		<th>Giới tính</th>
		<th>Địa chỉ</th>
		<th>Quản lí</th>
	</tr>
	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)){
		$i++;
	?>
    <tr align="center">
		<td><?php echo $i ?></td>
		<td><?php echo $row['hoten'] ?></td>
		<td><?php echo $row['tendangnhap'] ?></td>
		<td><input type="password" style="width: 95%" disabled value="<?php echo $row['matkhau'] ?>"></td>
		<td><?php echo $row['sdt'] ?></td>
		<td><?php echo $row['gioitinh'] ?></td>
		<td><?php echo $row['diachi'] ?></td>
		<td>
			<a href="modules/quanlinhanvien/xuly.php?&ID=<?php echo $row['ID']?>" onclick="confirmAction()">
                Xoá
            </a>
            <a href="?action=quanlinhanvien&query=sua&ID=<?php echo $row['ID']?>" onclick="confirmAction()">
                || Sửa
            </a>
		</td>
    </tr>
	<?php
	}
	?>
</table>