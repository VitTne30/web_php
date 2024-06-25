<?php
	$lienhe = "SELECT * FROM tbl_lienhe WHERE id = 1";
	$result = mysqli_query($mysqli, $lienhe);
?>

<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<form action="modules/thongtinlienhe/xuly.php?id=1" method="post" enctype="multipart/form-data">
		<?php
			while($row = mysqli_fetch_array($result)){
		?>
        <tr>
            <td>Thông tin liên hệ</td>
            <td><textarea rows="10" name="noidung" style="resize: none"><?php echo $row['thongtinlienhe']?></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="capnhatthongtin" value="Cập nhật"></td>
        </tr>
		<?php
			}
		?>
	</form>
</table>