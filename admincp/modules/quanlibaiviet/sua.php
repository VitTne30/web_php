<?php
	$suaBV = "SELECT * FROM tbl_baiviet WHERE id_baiviet = '$_GET[id_baiviet]' LIMIT 1";
	$result = mysqli_query($mysqli, $suaBV);
?>

<p>Sửa thông tin bài viết</p>
<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<?php
	while($row = mysqli_fetch_array($result)){
	?>
	<form action="modules/quanlibaiviet/xuly.php?id_baiviet=<?php echo $_GET['id_baiviet']?>" method="post" enctype="multipart/form-data">
    <tr>
		<td>Tên bài viết</td>
		<td><input type="text" name="tenbaiviet" value="<?php echo $row['tenbaiviet']?>"></td>
    </tr>
	<tr>
		<td>Danh mục sản phẩm</td>
		<td>
			<select name="danhmuc">
				<?php
				$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_danhmuc DESC";
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
		<td>Hình ảnh</td>
		<td>
			<input type="file" name="hinhanh">
			<img src="modules/quanlibaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
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
    	<td colspan="2"><input type="submit" name="btnSua" value="Cập nhật"></td>
	</tr>
	</form>
	<?php
	}
	?>
</table>