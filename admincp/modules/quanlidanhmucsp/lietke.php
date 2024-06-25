<?php
	$lietkedanhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
	$result = mysqli_query($mysqli, $lietkedanhmucsp);
?>

<h2>Tổng số danh mục sản phẩm: <?php echo mysqli_num_rows($result)?></h2>

<script>
  function confirmAction() {
    // Hiển thị hộp thoại cảnh báo và lấy kết quả
    var result = window.confirm("Bạn có chắc chắn đăng xuất không?");

    // Kiểm tra kết quả
    if (result) {
		alert("Đăng xuất thành công!");
      // Thực hiện hành động khi người dùng chọn OK
    } else {
		event.preventDefault();
    }
  }
</script>

<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<tr>
		<th>STT</th>
		<th>Tên danh mục</th>
		<th>Quản lí</th>
	</tr>
	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)){
		$i++;
	?>
    <tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['tendanhmuc'] ?></td>
		<td>
			<a href="modules/quanlidanhmucsp/xuly.php?&id_danhmuc=<?php echo $row['id_danhmuc']?>" onclick="confirmAction()">
                Xoá
            </a>
            <a href="?action=quanlidanhmucsanpham&query=sua&id_danhmuc=<?php echo $row['id_danhmuc']?>" onclick="confirmAction()">
                || Sửa
            </a>
		</td>
    </tr>
	<?php
	}
	?>
</table>