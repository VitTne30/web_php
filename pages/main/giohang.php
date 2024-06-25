<?php
if(isset($_SESSION['dangnhap'])){
	echo "Xin chào: ".$_SESSION['dangnhap'];
}
?>
<!--<p>Gio hang</p>-->

<script>
  function confirmAction() {
    // Hiển thị hộp thoại cảnh báo và lấy kết quả
    var result = window.confirm("Bạn có chắc chắn muốn xoá toàn bộ giỏ hàng không?");

    // Kiểm tra kết quả
    if (result) {
//		alert("Đặt đơn hàng thành công!");
      // Thực hiện hành động khi người dùng chọn OK
    } else {
		event.preventDefault();
    }
  }
</script>

<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
	  <div class="step current"> <span> <a href="index.php?quanli=giohang" >Giỏ hàng</a></span> </div>
	  <?php
	  if(isset($_SESSION['dangnhap'])){
	  ?>
      <div class="step"> <span><a href="index.php?quanli=vanchuyen" >Vận chuyển</a></span> </div>
	  <div class="step"> <span><a href="index.php?quanli=thongtinthanhtoan" >Thanh toán</a><span> </div>
		  <?php
          }else{
          ?>
		  <div class="step"> <span><a href="index.php?quanli=giohang" >Vận chuyển</a></span> </div>
		  <div class="step"> <span><a href="index.php?quanli=giohang" >Thanh toán</a><span> </div>
          <?php
          }
		  ?>
<!--
    <div class="step"> <span><a href="index.php?quanli=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanli=thongtinthanhtoan" >Thanh toán</a><span> </div>
-->
  </div>
 
</div>

<table style="width: 100%; text-align: center; border-collapse: collapse" border="1">
    <tr>
		<th>STT</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá sản phẩm</th>
		<th>Thành tiền</th>
		<th>Quản lí</th>
    </tr>
	<?php
	if(isset($_SESSION['cart'])){
		$i=0;
		$bill=0;
		foreach($_SESSION['cart'] as $item){
			$total= $item['soluong']*$item['giasp'];
			$bill+=$total;
			$i++;
	?>
	<tr align="center">
        <td><?php echo $i?></td>
        <td><?php echo $item['masp']?></td>
		<td><?php echo $item['tensanpham']?></td>
        <td><img src="admincp/modules/quanlisp/uploads/<?php echo $item['hinhanh']?>" width="150px"></td>
        <td>
			<a href="pages/main/themgiohang.php?tru=<?php echo $item['id_sanpham']?>" style="text-decoration: none"><i class="fa-solid fa-minus"></i></a>
			<?php echo $item['soluong']?>
			<a href="pages/main/themgiohang.php?cong=<?php echo $item['id_sanpham']?>" style="text-decoration: none"><i class="fa-solid fa-plus"></i></a>
		</td>
		<td><?php echo number_format($item['giasp'],0,',','.')." vnd"?></td>
		<td><?php echo number_format($total,0,',','.')." vnd"?></td>
		<td>
			<a href="pages/main/themgiohang.php?xoa=<?php echo $item['id_sanpham']?>">Xoá</a>
		</td>
	</tr>
	<?php
		}
	?>
	<tr>
        <td colspan="7">
			<p>Tổng tiền: <?php echo number_format($bill,0,',','.')." vnd"?></p>
		</td>
		<td colspan="7" align="center">
			<a href="pages/main/themgiohang.php?xoatatca=1" onclick="confirmAction()">Xoá tất cả</a>
		</td>
		<div style="clear: both"></div>
	</tr>
	<?php
		if(isset($_SESSION['dangnhap'])){
	?>
	<tr>
		<td colspan="8" align="center">	
			<p><a href="index.php?quanli=vanchuyen">Hình thức vận chuyển</a></p>
		</td>
	</tr>
	<?php
		}else{
		?>
	<tr>
		<td colspan="8" align="center">	
			<p><a href="index.php?quanli=dangnhap">Yêu cầu đăng nhập tài khoản để đặt hàng</a></p>
		</td>
	</tr>
		<?php
		}
		?>
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