<?php
if(isset($_GET['trang'])){
	$page = $_GET['trang'];
}
else{
	$page = 1;
}

if($page=='' || $page==1){
	$begin = 0;
}
else{
	$begin = ($page*15)-15;
}

	$lietkeDonhang = "SELECT * FROM tbl_giohang A, tbl_user B WHERE A.id_taikhoan = B.id_taikhoan ORDER BY A.id_giohang ASC LIMIT $begin, 15";
	$result = mysqli_query($mysqli, $lietkeDonhang);
?>

<h2>Tổng số đơn hàng: <?php echo mysqli_num_rows($result)?></h2>

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
		<th>Mã đơn hàng</th>
		<th>Tên tài khoản</th>
		<th>Ngày đặt</th>
		<th>Tình trạng</th>
		<th>Quản lí</th>
		<th>In</th>
	</tr>
	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)){
		$i++;
	?>
    <tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['ma_donhang'] ?></td>
		<td><?php echo $row['tentaikhoan'] ?></td>
		<td><?php echo $row['ngaydat'] ?></td>
		<td>
			<?php
			if($row['trangthai'] == 1){
				echo '<a href="modules/quanlidonhang/xuly.php?trangthai=0&code='.$row['ma_donhang'].'" onclick="confirmAction()">Xử lí đơn</a>';
			}
			else{
				echo 'Đã xử lí';
			}
			?>
		</td>
		<td>
			<a href="index.php?action=chitietdonhang&query=chitietdonhang&code=<?php echo $row['ma_donhang']?>">
                Xem đơn hàng
            </a>
		</td>
		<td>
			<?php
			if($row['trangthai'] == 1){
				echo 'Chờ xử lí';
			}
			else{
				echo '<a href="modules/quanlidonhang/indonhang.php?code='.$row['ma_donhang'].'">In đơn hàng</a>';
			}
			?>
		</td>
<!--
		<td>
			<a href="modules/quanlidonhang/indonhang.php?code=<?php echo $row['ma_donhang']?>">
                In đơn hàng
            </a>
		</td>
-->
    </tr>
	<?php
	}
	?>
</table>

<p>Trang hiện tại: <?php echo $page?></p>
<?php
$get_Alldonhang = "SELECT * FROM tbl_giohang";
$query = mysqli_query($mysqli, $get_Alldonhang);
$total = mysqli_num_rows($query);
$trang = ceil($total/15);
?>
<ul class="list_trang">
	<?php for($i=1; $i <= $trang; $i++){ 
	?>
	<li <?php if($i == $page){echo 'style="background: #85BAEF;"';}else{ echo '';} ?>>
		<a href="index.php?action=quanlidonhang&query=lietke&trang=<?php echo $i?>"><?php echo $i?></a>
	</li>
	<?php
	}
	?>
</ul>