<?php
echo "Thông tin vận chuyển";
?>

<div class="container">
  <!-- Responsive Arrow Progress Bar -->
	<div class="arrow-steps clearfix">
	  <div class="step done"> <span> <a href="index.php?quanli=giohang" >Giỏ hàng</a></span> </div>
	  <div class="step current"> <span><a href="index.php?quanli=vanchuyen" >Vận chuyển</a></span> </div>
      <div class="step"> <span><a href="index.php?quanli=thongtinthanhtoan" >Thanh toán</a><span> </div>
	</div>
		  
 <?php
 	if(isset($_POST['themvanchuyen'])) {
 		$ten = $_POST['ten'];
 		$sdt = $_POST['sdt'];
 		$diachinhanhang = $_POST['diachinhanhang'];
 		$note = $_POST['note'];
 		$id_taikhoan = $_SESSION['id_taikhoan'];
 		$sql_them_vanchuyen = mysqli_query($mysqli,"INSERT INTO tbl_vanchuyen(ten,sdt,diachinhanhang,note,id_taikhoan) VALUES('$ten','$sdt','$diachinhanhang','$note','$id_taikhoan')");
 		if($sql_them_vanchuyen){
 			echo '<script>alert("Thêm thông tin vận chuyển thành công")</script>';

 		}
 	}elseif(isset($_POST['capnhatvanchuyen'])){
 		$ten = $_POST['ten'];
 		$sdt = $_POST['sdt'];
 		$diachinhanhang = $_POST['diachinhanhang'];
 		$note = $_POST['note'];
 		$id_taikhoan = $_SESSION['id_taikhoan'];
 		$sql_update_vanchuyen = mysqli_query($mysqli,"UPDATE tbl_vanchuyen SET ten='$ten',sdt='$sdt',diachinhanhang='$diachinhanhang',note='$note'
		WHERE id_taikhoan='$id_taikhoan'");
		
 		if($sql_update_vanchuyen){
 			echo '<script>alert("Cập nhật thông tin vận chuyển thành công")</script>';

 		}
 	}
 ?>
 <div>
 	<?php
 	$id_taikhoan = $_SESSION['id_taikhoan'];
 	$sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_vanchuyen WHERE id_taikhoan='$id_taikhoan' LIMIT 1");
 	$count = mysqli_num_rows($sql_get_vanchuyen);
 	if($count>0){
 		$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
 		$ten = $row_get_vanchuyen['ten'];
 		$sdt = $row_get_vanchuyen['sdt'];
 		$diachinhanhang = $row_get_vanchuyen['diachinhanhang'];
 		$note = $row_get_vanchuyen['note'];
	}
	 else{
 		$ten = '';
 		$sdt = '';
 		$diachinhanhang = '';
 		$note = '';
 	}
 	?>
	 <form action="" autocomplete="off" method="POST">
	  <div class="form-group">
	    <label for="email">Họ và tên</label>
	    <input type="text" name="ten" class="form-control" value="<?php echo $ten ?>" placeholder="..." >
	  </div>
		<div class="form-group">
	    <label for="email">Số điện thoại</label>
	    <input type="text" name="sdt" class="form-control" value="<?php echo $sdt ?>"  placeholder="...">
	  </div>
	  <div class="form-group">
	    <label for="email">Địa chỉ</label>
	    <input type="text" name="diachinhanhang" class="form-control" value="<?php echo $diachinhanhang ?>"  placeholder="...">
	  </div>
	  <div class="form-group">
	    <label for="email">Ghi chú</label>
	    <input type="text" name="note" class="form-control" value="<?php echo $note ?>"  placeholder="..." >
	  </div>
	  <?php
	  if($ten=='' && $sdt=='') {
	  ?>
	  <button type="submit" name="themvanchuyen" class="btn btn-primary">Thêm vận chuyển</button>
	  <?php
	  } elseif($ten!='' && $sdt!=''){
	  ?>
	  <button type="submit" name="capnhatvanchuyen" class="btn btn-primary">Cập nhật vận chuyển</button>
	  <?php
	  } 
	  ?>
	</form>

	<!--------Giỏ hàng------------------>
	<table style="width:100%;text-align: center;border-collapse: collapse;" border="1">
  <tr>
    <th>STT</th>
    <th>Mã sp</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
  
   
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admincp/modules/quanlisp/uploads/<?php echo $cart_item['hinhanh']?>" width="150px"></td>
    <td>
    	<?php echo $cart_item['soluong']; ?>
    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').' vnd'; ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').' vnd' ?></td>
	  
  </tr>
  <?php
  	}
  ?>
   <tr>
        <td colspan="7">
			<p>Tổng tiền: <?php echo number_format($tongtien,0,',','.')." vnd"?></p>
		</td>
		<div style="clear: both"></div>
	</tr>
	
	<tr>
		<td colspan="8" align="center">	
			<p><a href="index.php?quanli=thongtinthanhtoan">Thông tin thanh toán</a></p>
		</td>
	</tr>
	<?php
	}else{
	?>
	<tr>
        <td colspan="8">
			<p>Hiện tại giỏ hàng trống</p>
		</td>
	</tr>
	<?php
	}
	?>
 
</table>
</div>
</div>