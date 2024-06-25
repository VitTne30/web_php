<?php
	$suasp = "SELECT * FROM tbl_nhanvien WHERE ID = '$_GET[ID]' LIMIT 1";
	$result = mysqli_query($mysqli, $suasp);
?>

<p>Cập nhật thông tin nhân viên</p>
<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<?php
	while($row = mysqli_fetch_array($result)){
	?>
	<form action="modules/quanlinhanvien/xuly.php?ID=<?php echo $_GET['ID']?>" method="post" enctype="multipart/form-data">
    <tr>
		<td>Tên nhân viên</td>
		<td><input type="text" name="hoten" value="<?php echo $row['hoten']?>"></td>
    </tr>
	<tr>
		<td>Tên đăng nhập</td>
		<td><input type="text" name="tendangnhap" value="<?php echo $row['tendangnhap']?>"></td>
    </tr>
	<tr>
		<td>Giới tính</td>
		<td>
			<?php if($row['gioitinh'] == 'Nam'){?>
			<label>
            	<input type="radio" name="gioitinh" value="Nam" checked>
            	Nam
            </label>
			<label>
                <input type="radio" name="gioitinh" value="Nữ">
                Nữ
            </label>
			<label>
                <input type="radio" name="gioitinh" value="Khác">
                Khác
            </label>
			<?php
											   }
			elseif($row['gioitinh'] == 'Nữ'){
			?>
			<label>
            	<input type="radio" name="gioitinh" value="Nam">
            	Nam
            </label>
            <label>
                <input type="radio" name="gioitinh" value="Nữ" checked>
                Nữ
            </label>
			<label>
                <input type="radio" name="gioitinh" value="Khác">
                Khác
            </label>
			<?php
			} 
			else{
			?>
			<label>
            	<input type="radio" name="gioitinh" value="Nam">
            	Nam
            </label>
            <label>
                <input type="radio" name="gioitinh" value="Nữ">
                Nữ
            </label>
            <label>
                <input type="radio" name="gioitinh" value="Khác" checked>
                Khác
            </label>
			<?php
			}
			?>
		</td>
    </tr>
	<tr>
		<td>SĐT</td>
		<td><input type="text" name="sdt" value="<?php echo $row['sdt']?>"></td>
    </tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" name="diachi" value="<?php echo $row['diachi']?>"></td>
    </tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="text" name="matkhau" value="<?php echo $row['matkhau']?>"></td>
    </tr>
	<tr>
    	<td colspan="2"><input type="submit" name="btnSua" value="Cập nhật"></td>
	</tr>
	</form>
	<?php
	}
	?>
</table>