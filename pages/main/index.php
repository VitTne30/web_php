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
	$begin = ($page*5)-5;
}
	$sql_sanpham = "SELECT * FROM tbl_sanpham A, tbl_danhmuc B WHERE A.id_danhmuc = B.id_danhmuc ORDER BY A.id_sanpham ASC LIMIT $begin,5";
	$result = mysqli_query($mysqli, $sql_sanpham);
?>

<h3>Sản phẩm mới nhất</h3>
<ul class="product_list">
	<?php
	while($row = mysqli_fetch_array($result)){
	?>
    <li>
        <a href="index.php?quanli=sanpham&id=<?php echo $row['id_sanpham']?>">
            <img src="admincp/modules/quanlisp/uploads/<?php echo $row['hinhanh']?>">
            <p class="title_product"><?php echo $row['tensanpham']?></p>
            <p class="price_product">Giá: <?php echo number_format($row['giasp'],0,',','.')." vnd"?></p>
        </a>
    </li>
	<?php
	}
	?>
</ul>
<div class="clear"></div>

<p>Trang hiện tại: <?php echo $page?></p>
<?php
$get_Allsanpham = "SELECT * FROM tbl_sanpham";
$query = mysqli_query($mysqli, $get_Allsanpham);
$total = mysqli_num_rows($query);
$trang = ceil($total/5);
?>
<ul class="list_trang">
	<?php for($i=1; $i <= $trang; $i++){ 
	?>
	<li <?php if($i == $page){echo 'style="background: #85BAEF;"';}else{ echo '';} ?>>
		<a href="index.php?trang=<?php echo $i?>"><?php echo $i?></a>
	</li>
	<?php
	}
	?>
</ul>