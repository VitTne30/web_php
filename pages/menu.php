<script>
  function toDoConfirm() {
    // Hiển thị hộp thoại cảnh báo và lấy kết quả
    var result = window.confirm("Bạn có chắc chắn muốn đăng xuất?");

    // Kiểm tra kết quả
    if (result) {
		alert("Đăng xuất thành công!");
      // Thực hiện hành động khi người dùng chọn OK
    } else {
		event.preventDefault();
    }
  }
</script>

<?php
	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
	$result = mysqli_query($mysqli, $sql_danhmuc);
?>

<?php
if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
	unset($_SESSION['dangnhap']);
}
?>

<div class="menu">
	<ul class="list_menu">
		<li><a href="index.php">Trang chủ</a></li>
<!--
		<li>
			<div class="dropdown">
				<button class="btn">
					Danh mục
				</button>
				<div class="dropdown-menu grid">
					<?php
                    while($row = mysqli_fetch_array($result)){
                    ?>
					<div class="links">
                        <a href="index.php?quanli=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a>
					</div>
                   	<?php
                    }
                    ?>
				</div>
			</div>
		</li>
-->
<!--		<li><a href="index.php?quanli=danhmuc">Danh mục</a></li>-->
		<li><a href="index.php?quanli=giohang">Giỏ hàng</a></li>
		<li><a href="index.php?quanli=tincongnghe">Tin công nghệ</a></li>
		<li><a href="index.php?quanli=lienhe">Liên hệ</a></li>
		<?php
		if(isset($_SESSION['dangnhap'])){
		?>
		<li><a href="index.php?dangxuat=1" onclick="toDoConfirm()">Đăng xuất</a></li>
		<li><a href="index.php?quanli=doimatkhau">Đổi mật khẩu</a></li>
		<li><a href="index.php?quanli=lichsumuahang">Đơn hàng của bạn</a></li>
		<?php
		}else{
		?>
		<li><a href="index.php?quanli=dangnhap">Đăng nhập</a></li>
		<?php
		}
		?>
	</ul>
	<p style="margin: 0; padding: 6px">
		<form action="index.php?quanli=timkiem" method="post">
			<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
			<input type="submit" name="timkiem" value="Tìm kiếm">
		</form>
	</p>
</div>