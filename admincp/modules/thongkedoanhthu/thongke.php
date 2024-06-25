<?php
include("config/connect.php");

if(isset($_POST["From"], $_POST["to"]))
{
    $getDoanhthu = "SELECT SUM(B.giasp*A.soluongsp) AS doanhthu FROM tbl_chitietdonhang A, tbl_sanpham B, tbl_giohang C WHERE A.id_sanpham = B.id_sanpham AND A.ma_donhang = C.ma_donhang AND C.trangthai = 0 AND C.ngaydat BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
	
    $result = mysqli_query($mysqli, $getDoanhthu);
}
?>


<form method="post" action="">
	<div class="datetimepicker">
        <input type="datetime-local" name="From">
        <input type="datetime-local" name="to">

		<input type="submit" name="range" value="Lọc kết quả">
	</div>
</form>


<?php
if(!isset($result)){
?>
	<table border="1" style="border-collapse: collapse" width="400px">
	<tr>
		<th>Tổng doanh thu</th>
	</tr>
	<tr>
		<td align="center">0 vnd</td>
	</tr>
	</table>
<?php
}else{
?>

<?php
while($row = mysqli_fetch_array($result)){
?>
<table border="1" style="border-collapse: collapse" width="400px">
	<tr>
		<th>Tổng doanh thu</th>
	</tr>
	<tr>
		<td align="center"><?php echo number_format($row['doanhthu'],0,',','.').' vnd' ?></td>
	</tr>
</table>
<?php
	}}
?>