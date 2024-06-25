<h3>Lịch sử mua hàng</h3>

<?php
	$id = $_SESSION['id_taikhoan'];
	$lietkeDonhang = "SELECT * FROM tbl_giohang A WHERE A.id_taikhoan = $id ORDER BY A.id_giohang ASC";
	$result = mysqli_query($mysqli, $lietkeDonhang);

	$count = mysqli_num_rows($result);
?>

<script>
  function confirmAction() {
    // Hiển thị hộp thoại cảnh báo và lấy kết quả
    var result = window.confirm("Bạn có chắc chắn muốn huỷ đơn hàng không?");

    // Kiểm tra kết quả
    if (result) {
		alert("Huỷ đơn hàng thành công!");
      // Thực hiện hành động khi người dùng chọn OK
    } else {
		event.preventDefault();
    }
  }
</script>

<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<tr>
		<th>STT</th>
		<th>Mã đơn hàng</th>
		<th>Tình trạng</th>
		<th>Chi tiết đơn hàng</th>
		<th>Quản lí</th>
	</tr>
	
	<?php
	if($count>0){
	$i=0;
	while($row = mysqli_fetch_array($result)){
		$i++;
	?>
    <tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['ma_donhang'] ?></td>
		<td>
			<?php
			if($row['trangthai'] == 1){
				echo 'Chờ xử lí';
			}
			else{
				echo 'Đang vận chuyển';
			}
			?>
		</td>
		<td>
			<a href="index.php?quanli=xemdonhang&code=<?php echo $row['ma_donhang']?>">
                Xem đơn hàng
            </a>
		</td>
		<?php
			if($row['trangthai'] == 1){
		?>	
		<td align="center">
			<a href="pages/main/huydon.php?code=<?php echo $row['ma_donhang']?>" onclick="confirmAction()">
                Huỷ đơn
            </a>
		</td>
		<?php
			}
			else{	
		?>
		<td align="center">
			Chờ nhận hàng
		</td>
		<?php
			}
		?>
    </tr>
	<?php
	}}else{
	?>
	<tr>
        <td colspan="5" align="center">
			<p>Bạn chưa có đơn hàng nào</p>
		</td>
	</tr>
	<?php
	}
	?>
</table>