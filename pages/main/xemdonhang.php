<?php
	$detailDonhang = "SELECT * FROM tbl_chitietdonhang A, tbl_sanpham B WHERE A.id_sanpham = B.id_sanpham AND A.ma_donhang = '$_GET[code]' ORDER BY A.id_chitietdonhang ASC";
	$result = mysqli_query($mysqli, $detailDonhang);
?>

<h2>Danh sách đơn hàng</h2>
<table border="1px solid black" width="100%" >
	<tr>
		<th>STT</th>
		<th>Mã đơn hàng</th>
		<th>Tên sản phẩm</th>
		<th>Số lượng</th>
		<th>Đơn giá</th>
		<th>Thành tiền</th>
	</tr>
	
	<?php
	$i=0;
	$tongtien = 0;
	while($row = mysqli_fetch_array($result)){
		$i++;
		$thanhtien = $row['giasp'] * $row['soluongsp'];
		$tongtien += $thanhtien;
	?>
    <tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['ma_donhang'] ?></td>
		<td><?php echo $row['tensanpham'] ?></td>
		<td><?php echo $row['soluongsp'] ?></td>
		<td><?php echo number_format($row['giasp'],0,',','.').' vnd' ?></td>
		<td><?php echo number_format($thanhtien,0,',','.').' vnd'?></td>
    </tr>
	<?php
	}
	?>
	<tr>
		<td colspan="6">
			<p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').' vnd'?></p>
		</td>
	</tr>
</table>