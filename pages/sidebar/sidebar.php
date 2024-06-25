<div class="sidebar">
	<ul class="list_sidebar">
		<h3 style="margin-left: 10px; color: rgba(162,40,42,1.00)">DANH MỤC SẢN PHẨM</h3>
		<?php
		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
		$result = mysqli_query($mysqli, $sql_danhmuc);
		
		while($row = mysqli_fetch_array($result)){
      	?>
		<li><a href="index.php?quanli=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a></li>
		<?php
		}
		?>
	</ul>
	
	<ul class="list_sidebar">
		<h3 style="margin-left: 10px; color: rgba(162,40,42,1.00)">DANH MỤC BÀI VIẾT</h3>
		<?php
		$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_danhmuc ASC";
		$result = mysqli_query($mysqli, $sql_danhmuc);
		
		while($row = mysqli_fetch_array($result)){
      	?>
		<li><a href="index.php?quanli=danhmucbaiviet&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a></li>
		<?php
		}
		?>
	</ul>
</div>