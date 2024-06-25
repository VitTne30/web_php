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

	$getBaiviet = "SELECT * FROM tbl_baiviet LIMIT $begin, 3";
	$result = mysqli_query($mysqli, $getBaiviet);

?>

<h3>Tổng hợp bài viết</h3>
<div class="baiviet_list">
	<?php
	while($row = mysqli_fetch_array($result)){
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

<div class="clear"></div>

<p>Trang hiện tại: <?php echo $page?></p>
<?php
$get_Allsanpham = "SELECT * FROM tbl_baiviet";
$query = mysqli_query($mysqli, $get_Allsanpham);
$total = mysqli_num_rows($query);
$trang = ceil($total/3);
?>
<ul class="list_trang">
	<?php for($i=1; $i <= $trang; $i++){ 
	?>
	<li <?php if($i == $page){echo 'style="background: #85BAEF;"';}else{ echo '';} ?>>
		<a href="index.php?quanli=tincongnghe&trang=<?php echo $i?>"><?php echo $i?></a>
	</li>
	<?php
	}
	?>
</ul>