<?php
	$lienhe = "SELECT * FROM tbl_lienhe WHERE id = 1";
	$result = mysqli_query($mysqli, $lienhe);
?>

<?php
while($row = mysqli_fetch_array($result)){
?>
<p><?php echo $row['thongtinlienhe']?></p>
<?php
}
?>