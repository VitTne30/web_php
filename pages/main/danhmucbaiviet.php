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

	$getBaiviet = "SELECT * FROM tbl_baiviet A WHERE A.id_danhmuc = '$_GET[id]' ORDER BY A.id_baiviet ASC LIMIT $begin, 5";
	$result_bv = mysqli_query($mysqli, $getBaiviet);


	$getDanhmucBV = "SELECT * FROM tbl_danhmucbaiviet A WHERE A.id_danhmuc = '$_GET[id]' LIMIT 1";
	$result_danhmuBV = mysqli_query($mysqli, $getDanhmucBV);
	$row_title = mysqli_fetch_array($result_danhmuBV);
?>

<h3>Danh mục bài viết: <?php echo $row_title['tendanhmuc']?></h3>
<div class="baiviet_list">
	<?php
	while($row = mysqli_fetch_array($result_bv)){
	?>
    <div class="card">
        <a href="index.php?quanli=baiviet&id=<?php echo $row['id_baiviet']?>">
            <img src="admincp/modules/quanlibaiviet/uploads/<?php echo $row['hinhanh']?>">
            <div class="intro">
				<div class="tenbaiviet"><?php echo $row['tenbaiviet']?></div>
				<div class="tomtat_baiviet"><?php echo $row['tomtat']?></div>
			</div>
        </a>
    </div>
	<?php
	}
	?>
</div>

<p>Trang hiện tại: <?php echo $page?></p>
<?php
$get_Allbaiviet = "SELECT * FROM tbl_baiviet A WHERE A.id_danhmuc = '$_GET[id]' ORDER BY A.id_baiviet";
$query = mysqli_query($mysqli, $get_Allbaiviet);
$total = mysqli_num_rows($query);
$trang = ceil($total/5);
?>
<ul class="list_trang">
	<?php for($i=1; $i <= $trang; $i++){ 
	?>
	<li <?php if($i == $page){echo 'style="background: #85BAEF;"';}else{ echo '';} ?>>
		<a href="index.php?quanli=danhmucbaiviet&id=<?php echo $_GET['id']?>&trang=<?php echo $i?>"><?php echo $i?></a>
	</li>
	<?php
	}
	?>
</ul>