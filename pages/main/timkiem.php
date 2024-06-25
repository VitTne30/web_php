<?php
if(isset($_POST['tukhoa'])){
	$tukhoa = $_POST['tukhoa'];
}
	$getSanpham = "SELECT * FROM tbl_sanpham A, tbl_danhmuc B WHERE A.id_danhmuc = B.id_danhmuc AND A.tensanpham LIKE '%".$tukhoa."%'";
	$result = mysqli_query($mysqli, $getSanpham);

?>

<h3>Từ khoá tìm kiếm: <?php echo $_POST['tukhoa']?></h3>
<ul class="product_list">
	<?php
	while($row = mysqli_fetch_array($result)){
	?>
    <li>
        <a href="index.php?quanli=sanpham&id=<?php echo $row['id_sanpham']?>">
            <img src="admincp/modules/quanlisp/uploads/<?php echo $row['hinhanh']?>">
            <p class="title_product"><?php echo $row['tensanpham']?></p>
            <p class="price_product">Giá: <?php echo number_format($row['giasp'],0,',','.')." vnd" ?></p>
        </a>
    </li>
	<?php
	}
	?>
</ul>