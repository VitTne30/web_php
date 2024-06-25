<?php
	$getBaiviet = "SELECT * FROM tbl_baiviet A WHERE A.id_baiviet = '$_GET[id]' ORDER BY A.id_baiviet LIMIT 1";
	$result_bv = mysqli_query($mysqli, $getBaiviet);

?>

<div class="baiviet">
	<?php
	while($row = mysqli_fetch_array($result_bv)){
	?>
	<h3>Bài viết: <?php echo $row['tenbaiviet']?></h3>
	<img width="500px" src="admincp/modules/quanlibaiviet/uploads/<?php echo $row['hinhanh']?>">
	<p class=""><?php echo $row['tomtat']?></p>
	<p style="object-fit: cover"><?php echo $row['noidung']?></p>
	<?php
	}
	?>
</div>