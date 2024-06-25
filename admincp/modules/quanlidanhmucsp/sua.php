<?php
	$suadanhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[id_danhmuc]' LIMIT 1";
	$result = mysqli_query($mysqli, $suadanhmucsp);
?>

<p>Sửa danh mục sản phẩm</p>
<table border="1px solid black" width="50%" style="border-collapse: collapse">
	<form action="modules/quanlidanhmucsp/xuly.php?id_danhmuc=<?php echo $_GET['id_danhmuc']?>" method="post">
		<?php
			while($row = mysqli_fetch_array($result)){
		?>
		<tr>
			<td>Tên danh mục</td>
			<td><input type="text" name="tendanhmuc" value="<?php echo $row['tendanhmuc']?>"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="btnSua" value="Cập nhật danh mục sản phẩm"></td>
		</tr>
		<?php
			}
		?>
	</form>
</table>