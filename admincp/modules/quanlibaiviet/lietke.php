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

	$lietkesp = "SELECT * FROM tbl_baiviet A, tbl_danhmucbaiviet B WHERE A.id_danhmuc = B.id_danhmuc ORDER BY id_baiviet ASC LIMIT $begin, 3";
	$result = mysqli_query($mysqli, $lietkesp);
?>

<h2>Tổng số bài viết: <?php echo mysqli_num_rows($result)?></h2>

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
		<th>Tên bài viết</th>
		<th>Danh mục</th>
		<th>Hình ảnh</th>
		<th>Tóm tắt</th>
		<th>Quản lí</th>
	</tr>
	
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)){
		$i++;
	?>
    <tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['tenbaiviet'] ?></td>
		<td><?php echo $row['tendanhmuc'] ?></td>
		<td><img src="modules/quanlibaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
		<td><?php echo $row['tomtat'] ?></td>
		</td>
		<td>
			<a href="modules/quanlibaiviet/xuly.php?&id_baiviet=<?php echo $row['id_baiviet']?>" onclick="confirmAction()">
                Xoá
            </a>
            <a href="?action=quanlibaiviet&query=sua&id_baiviet=<?php echo $row['id_baiviet']?>" onclick="confirmAction()">
                || Sửa
            </a>
		</td>
    </tr>
	<?php
	}
	?>
</table>

<p>Trang hiện tại: <?php echo $page?></p>
<?php
$get_Allsanpham = "SELECT * FROM tbl_baiviet";
$query = mysqli_query($mysqli, $get_Allsanpham);
$total = mysqli_num_rows($query);
$trang = ceil($total/5);
?>
<ul class="list_trang">
	<?php for($i=1; $i <= $trang; $i++){ 
	?>
	<li <?php if($i == $page){echo 'style="background: #85BAEF;"';}else{ echo '';} ?>>
		<a href="index.php?action=quanlibaiviet&query=them&trang=<?php echo $i?>"><?php echo $i?></a>
	</li>
	<?php
	}
	?>
</ul>