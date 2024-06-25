<?php
echo "Thông tin đơn hàng";
?>

<script>
  function confirmAction() {
    // Hiển thị hộp thoại cảnh báo và lấy kết quả
    var result = window.confirm("Bạn có chắc chắn muốn thực hiện thanh toán không?");

    // Kiểm tra kết quả
    if (result) {
		alert("Đặt đơn hàng thành công!");
      // Thực hiện hành động khi người dùng chọn OK
    } else {
		event.preventDefault();
    }
  }
</script>

<div class="container">
	<div class="arrow-steps clearfix">
			<div class="step done"> <span> <a href="index.php?quanli=giohang" >Giỏ hàng</a></span> </div>
			<div class="step done"> <span><a href="index.php?quanli=vanchuyen" >Vận chuyển</a></span> </div>
			<div class="step current"> <span><a href="index.php?quanli=thongtinthanhtoan" >Thanh toán</a><span> </div>
	</div>
		  <form action="pages/main/thanhtoan.php" method="POST">
			  <div class="row">
  
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
                  }else{
                      $name = '';
                      $phone = '';
                      $address = '';
                      $note = '';
                  }
                  ?>
				  
				  <div class="col-md-8">
					  <ul>
						  <li>Họ và tên vận chuyển : <b><?php echo $ten ?></b></li>
                          <li>Số điện thoại : <b><?php echo $sdt ?></b></li>
                          <li>Địa chỉ : <b><?php echo $diachinhanhang ?></b></li>
                          <li>Ghi chú : <b><?php echo $note ?></b></li>
					  </ul>
					  <h4>Đơn hàng của bạn</h4>
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
                              $tongtien = 0;
							  if(isset($_SESSION['cart'])){
                              $i = 0;
                              foreach($_SESSION['cart'] as $cart_item){
                                  $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                                  $tongtien+=$thanhtien;
                                  $i++;
						  ?>
						  <tr>
							  <td><?php echo $i; ?></td>
                              <td><?php echo $cart_item['masp']; ?></td>
                              <td><?php echo $cart_item['tensanpham']; ?></td>
                              <td><img src="admincp/modules/quanlisp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
                              <td>
                                  <?php echo $cart_item['soluong']; ?>
                              </td>
                              <td><?php echo number_format($cart_item['giasp'],0,',','.').' vnd' ?></td>
                              <td><?php echo number_format($thanhtien,0,',','.').' vnd' ?></td>
						  </tr>
						  <?php
							}
						  ?>
						  <?php	
						  }else{ 
						  ?>
						  <tr>
							  <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>		   
						  </tr>
						  <?php
						  } 
						  ?>
					  </table>
				  </div>
				  <style type="text/css">
					  .col-md-4.hinhthucthanhtoan .form-check {
						  margin: 11px;
					  }
				  </style>

				  <div class="hinhthucthanhtoan">
					  <h4>Phương thức thanh toán</h4>
					  <div class="form-check">
						  <input class="form-check-input" name="payment" id="exampleRadios1" type="radio" value="tienmat" checked>
						  <label class="form-check-label" for="exampleRadios1">
							  Thanh toán khi nhận hàng
						  </label>
					  </div>
					  <div class="form-check">
						  <input class="form-check-input" name="payment" id="exampleRadios2" type="radio" value="chuyenkhoan">
						  <label class="form-check-label" for="exampleRadios2">
							  Chuyển khoản
						  </label>
                      </div>
					  <?php
					  echo "Tổng số tiền phải thanh toán: ".number_format($tongtien,0,',','.').' vnd'."";
					  ?>
					  <?php
					  if(isset($_SESSION['cart'])){
					  ?>
					  <input style="display: block" type="submit" value="Thanh toán ngay" class="btn btn-success" onclick="confirmAction()">
					  <?php
					  } else{
					  ?>
					  <button type="button" class="gray-button"> Chưa thể thanh toán </button>
					  <?php
					  }
					  ?>
					  </form>
				  	  <?php
					  if(isset($_SESSION['cart'])){
					  ?>
                      <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulithanhtoanmomo_atm.php">
                          <input type="hidden" value="<?php echo $tongtien ?>" name="tongtien_vnd">        
                          <input type="submit" name="momo" value="Thanh toán MOMO ATM" class="btn btn-danger">
                      </form>
				  
				  	  <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="pages/main/xulithanhtoanmomo.php">
                          <input type="hidden" value="<?php echo $tongtien ?>" name="tongtien_vnd">              	
                          <input type="submit" name="momo" value="Thanh toán MOMO QRcode" class="btn btn-danger">
                      </form>
				  	  <?php
					  }
				  	  ?>
			  	</div>
			  </div>
		</div>