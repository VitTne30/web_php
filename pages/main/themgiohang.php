<?php
session_start();
include('../../admincp/config/connect.php');

if(isset($_GET['cong'])){
	$id = $_GET['cong'];
	foreach($_SESSION['cart'] as $item){
		if($item['id_sanpham'] != $id){
            $sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$item['soluong'], 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
			$_SESSION['cart'] = $sanpham;
		}
		else{
			$sqlSL = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
			$resultSL = mysqli_query($mysqli, $sqlSL);
	
			$rowSL = mysqli_fetch_array($resultSL);
			if($item['soluong'] < 10){
				$tangsoluong = $item['soluong'] + 1;
				if ($tangsoluong <= $rowSL['soluong']) {
				
				$sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$tangsoluong, 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
				}
				else{
					$sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$item['soluong'], 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
				}
			}
			else{
				$sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$item['soluong'], 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
			}
			$_SESSION['cart'] = $sanpham;
		}
	}
	header("Location: ../../index.php?quanli=giohang");
}

if(isset($_GET['tru'])){
	$id = $_GET['tru'];
	foreach($_SESSION['cart'] as $item){
		if($item['id_sanpham'] != $id){
            $sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$item['soluong'], 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
			$_SESSION['cart'] = $sanpham;
		}
		else{
			$giamsoluong = $item['soluong'] - 1;
			if($item['soluong'] > 1){
				$sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$giamsoluong, 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
			}
			else{
				$sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$item['soluong'], 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
			}
			$_SESSION['cart'] = $sanpham;
		}
	}
	header("Location: ../../index.php?quanli=giohang");
}


if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
	$id=$_GET['xoa'];
	foreach($_SESSION['cart'] as $item){
		if($item['id_sanpham'] != $id){
					$sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$item['soluong'], 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
		}
	$_SESSION['cart'] = $sanpham;
	header("Location: ../../index.php?quanli=giohang");
	}
}


if(isset($_GET['xoatatca']) && $_GET['xoatatca']){
	unset($_SESSION['cart']);
	header("Location: ../../index.php?quanli=giohang");
}

if(isset($_POST['themGiohang'])){
//	session_destroy();
	$id = $_GET['id_sanpham'];
	$soluong = 1;
	$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
	$result = mysqli_query($mysqli, $sql);
	
	$row = mysqli_fetch_array($result);
	if($row){
		$sanphammoi[] = array('tensanpham'=>$row['tensanpham'], 'id_sanpham' => $id, 'soluong'=>$soluong, 'giasp'=>$row['giasp'], 'hinhanh'=>$row['hinhanh'], 'masp'=>$row['masp']);
		if(isset($_SESSION['cart'])){
			$found = false;
			foreach($_SESSION['cart'] as $item){
				if($item['id_sanpham'] == $id){
					$sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$soluong+1, 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
					$found = true;
				}
				else{
					$sanpham[] = array('tensanpham'=>$item['tensanpham'], 'id_sanpham' => $item['id_sanpham'], 'soluong'=>$item['soluong'], 'giasp'=>$item['giasp'], 'hinhanh'=>$item['hinhanh'], 'masp'=>$item['masp']);
				}
			}
			if($found == false){
				$_SESSION['cart'] = array_merge($sanpham, $sanphammoi);
			}
			else{
				$_SESSION['cart'] = $sanpham;
			}
		}
		else{
			$_SESSION['cart'] = $sanphammoi;
		}
	}
	header("Location: ../../index.php?quanli=giohang");
}
?>