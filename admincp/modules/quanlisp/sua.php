<?php
	$suasp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[id_sanpham]' LIMIT 1";
	$result = mysqli_query($mysqli, $suasp);
?>

<p>Sửa thông tin sản phẩm</p>
<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<?php
	while($row = mysqli_fetch_array($result)){
	?>
	<form action="modules/quanlisp/xuly.php?id_sanpham=<?php echo $_GET['id_sanpham']?>" method="post" enctype="multipart/form-data">
    <tr>
		<td>Tên sản phẩm</td>
		<td><input type="text" name="tensanpham" value="<?php echo $row['tensanpham']?>"></td>
    </tr>
	<tr>
		<td>Mã sản phẩm</td>
		<td><input type="text" name="masp" value="<?php echo $row['masp']?>"></td>
    </tr>
	<tr>
		<td>Giá sản phẩm</td>
		<td><input type="text" name="giasp" value="<?php echo $row['giasp']?>"></td>
    </tr>
	<tr>
		<td>Danh mục sản phẩm</td>
		<td>
			<select name="danhmuc">
				<?php
				$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
				$result = mysqli_query($mysqli, $sql_danhmuc);
				while($row_danhmuc = mysqli_fetch_array($result)){
					if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']){
				?>
				<option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
				<?php
					}else{
				?>
				<option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
				<?php
					}
				}
				?>
			</select>
		</td>
    </tr>
	<tr>
		<td>Số lượng</td>
		<td><input type="text" name="soluong" value="<?php echo $row['soluong']?>"></td>
    </tr>
	<tr>
		<td>Hình ảnh</td>
		<td>
			<input type="file" name="hinhanh">
			<img src="modules/quanlisp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
		</td>
    </tr>
	<tr>
		<td>Tóm tắt</td>
		<td><textarea rows="10" name="tomtat" style="resize: none"><?php echo $row['tomtat']?></textarea></td>
    </tr>
	<tr>
		<td>Nội dung</td>
		<td><textarea rows="10" name="noidung" style="resize: none"><?php echo $row['noidung']?></textarea></td>
    </tr>
	<tr>
		<td>Tình trạng</td>
		<td>
			<select name="tinhtrang">
				<?php
				if($row['tinhtrang'] == 1){
				?>
				<option value="1" selected>Kích hoạt</option>
				<option value="0">Ẩn</option>
				<?php
				}else{
				?>
				<option value="1">Kích hoạt</option>
				<option value="0" selected>Ẩn</option>
				<?php
				}
				?>
			</select>
		</td>
    </tr>
	<tr>
    	<td colspan="2"><input type="submit" name="btnSua" value="Cập nhật"></td>
	</tr>
	</form>
	<?php
	}
	?>
</table>