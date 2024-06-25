<?php
	include("admincp/config/connect.php");
	require('carbon/autoload.php');
	use Carbon\Carbon;
    use Carbon\CarbonInterval;
    
	$now = Carbon::now('Asia/Ho_Chi_Minh');

	
	if(isset($_GET['partnerCode'])){

		$id_taikhoan = $_SESSION['id_taikhoan'];
		$ma_donhang = rand(0,9999);
		$partnerCode = $_GET['partnerCode'];
		$orderId = $_GET['orderId'];
		$amount = $_GET['amount'];
		$orderInfo = $_GET['orderInfo'];
		$orderType = $_GET['orderType'];
		$transId = $_GET['transId'];
		$payType = $_GET['payType'];
		$cart_payment = 'momo';
		//lay id thong tin van chuyen
		$sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_vanchuyen WHERE id_taikhoan='$id_taikhoan' LIMIT 1");
		$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
		$id_vanchuyen = $row_get_vanchuyen['id'];
		//insert database momo
		
		$insert_momo = "INSERT INTO tbl_momo(partner_code,order_id,amount,order_info,order_type,trans_id,pay_type,code_cart) VALUE('".$partnerCode."','".$orderId."','".$amount."','".$orderInfo."','".$orderType."','".$transId."','".$payType."','".$ma_donhang."')";
		$cart_query = mysqli_query($mysqli,$insert_momo);
		
		$insertGiohang = "INSERT INTO tbl_giohang(id_taikhoan, ma_donhang, ngaydat, trangthai, payment, id_vanchuyen) VALUES('".$id_taikhoan."','".$ma_donhang."', '".$now."',1, '".$cart_payment."', '".$id_vanchuyen."')";
		
        $query = mysqli_query($mysqli,$insertGiohang);
        //insert gio h�ng
        //them don h�ng chi tiet
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id_sanpham'];
            $soluong = $value['soluong'];
            $insert_order_details = "INSERT INTO tbl_chitietdonhang(ma_donhang, id_sanpham, soluongsp) VALUES('".$ma_donhang."','".$id_sanpham."','".$soluong."')";
            mysqli_query($mysqli,$insert_order_details);
			
			$updateSanpham = "UPDATE tbl_sanpham SET soluong = soluong - '".$soluong."' WHERE id_sanpham = '".$id_sanpham."'";
			mysqli_query($mysqli, $updateSanpham);
        }
		unset($_SESSION['cart']);
	}
?>

<p>Cảm ơn bạn đã mua hàng! Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất 🌟</p>