<?php
if(isset($_GET['trang'])){
	$page = $_GET['trang'];
}
else{
	$page = 1;
}

if($page=='' || $page==1){
	$begin = 0;
}
else{
	$begin = ($page*3)-3;
}

	$get_Allsanpham = "SELECT * FROM tbl_sanpham";
	$query = mysqli_query($mysqli, $get_Allsanpham);
	$total = mysqli_num_rows($query);
	$trang = ceil($total/3);

	$lietkesp = "SELECT * FROM tbl_sanpham A, tbl_danhmuc B WHERE A.id_danhmuc = B.id_danhmuc ORDER BY id_sanpham ASC LIMIT $begin, 3";
	$result = mysqli_query($mysqli, $lietkesp);
?>

<h2>Tổng số sản phẩm: <?php echo $total.' <button class="statistics-button"><a href="modules/quanlisp/thongke.php">Thống kê</a></button>'?></h2>

<script>
  function confirmAction() {
    // Hiển thị hộp thoại cảnh báo và lấy kết quả
    var result = window.confirm("Bạn có chắc chắn muốn thực hiện hành động này không?");

    // Kiểm tra kết quả
    if (result) {
      // Thực hiện hành động khi người dùng chọn OK
    } else {
		event.preventDefault();
    }
  }
</script>

<table border="1px solid black" width="100%" style="border-collapse: collapse">
	<tr>
		<th>STT</th>
		<th>Tên sản phẩm</th>
		<th>Mã sản phẩm</th>
		<th>Danh mục</th>
		<th>Hình ảnh</th>
		<th>Giá</th>
		<th>Số lượng</th>
		<th>Tóm tắt</th>
		<th>Trạng thái</th>
		<th>Quản lí</th>
	</tr>
	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)){
		$i++;
	?>
    <tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['tensanpham'] ?></td>
		<td><?php echo $row['masp'] ?></td>
		<td><?php echo $row['tendanhmuc'] ?></td>
		<td><img src="modules/quanlisp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
		<td width="100"><?php echo number_format($row['giasp'],0,',','.')." vnd" ?></td>
		<td><?php echo $row['soluong'] ?></td>
		<td><?php echo $row['tomtat'] ?></td>
		<td><?php if($row['tinhtrang']==1){
			echo "Kích hoạt";
		}
		else{
			echo "Ẩn";
		} 
			?>
		</td>
		<td>
			<a href="modules/quanlisp/xuly.php?&id_sanpham=<?php echo $row['id_sanpham']?>" onclick="confirmAction()">
                Xoá
            </a>
            <a href="?action=quanlisanpham&query=sua&id_sanpham=<?php echo $row['id_sanpham']?>" onclick="confirmAction()">
                || Sửa
            </a>
		</td>
    </tr>
	<?php
	}
	?>
</table>

<p>Trang hiện tại: <?php echo $page?></p>
<ul class="list_trang">
	<?php for($i=1; $i <= $trang; $i++){ 
	?>
	<li <?php if($i == $page){echo 'style="background: #85BAEF;"';}else{ echo '';} ?>>
		<a href="index.php?action=quanlisanpham&query=them&trang=<?php echo $i?>"><?php echo $i?></a>
	</li>
	<?php
	}
	?>
</ul>