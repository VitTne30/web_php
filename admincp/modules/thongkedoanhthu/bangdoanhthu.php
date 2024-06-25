<?php
include("../../config/connect.php");

if(isset($_POST["From"], $_POST["to"]))
{
    $getDoanhthu = "SELECT SUM(B.giasp) AS doanhthu FROM tbl_chitietdonhang A, tbl_sanpham B, tbl_giohang C WHERE A.id_sanpham = B.id_sanpham AND C.ngaydat BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
	
    $result = mysqli_query($mysqli, $getDoanhthu);
}
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
	}
?>