<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham A, tbl_danhmuc B WHERE A.id_danhmuc = B.id_danhmuc AND A.id_sanpham = '$_GET[id]' LIMIT 1";
	$result = mysqli_query($mysqli, $sql_chitiet);
	
	while($row = mysqli_fetch_array($result)){
?>

<div class="detail">
	<div class="hinhanh_sanpham">
		<img width="100%" src="admincp/modules/quanlisp/uploads/<?php echo $row['hinhanh']?>">
	</div>

	<form action="pages/main/themgiohang.php?id_sanpham=<?php echo $row['id_sanpham']?>" method="post">
		<div class="chitiet_sanpham">
			<h3 style="margin: 0"><?php echo $row['tensanpham']?></h3>
			<p style="font-weight: 600">Danh mục sản phẩm: <?php echo $row['tendanhmuc']?></p>
			<p>Mã sản phẩm: <?php echo $row['masp']?></p>
			<p>Giá: <?php echo number_format($row['giasp'],0,',','.')." vnd"?></p>
			<p>Số lượng còn trong kho: <?php echo $row['soluong']?> sản phẩm</p>
			<p><?php echo $row['tomtat']?></p>
			<?php
			if($row['soluong'] == 0){
			?>
			<input class="gray-button" name="themGiohang" type="button" value="Sản phẩm hiện đang hết hàng">
			<?php
			} else{
			?>
			<p>
				<input class="themGiohang" name="themGiohang" type="submit" value="Thêm giỏ hàng">
			</p>
			<?php
			}
			?>
		</div>
	</form>
</div>
<?php
}
?>