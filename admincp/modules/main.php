<div class="clear"></div>

<div class="main">
	<?php
		if(isset($_GET['action']) && $_GET['query']){
			$temp = $_GET['action'];
			$query = $_GET['query'];
		}
		else{
			$temp = '';
			$query = '';
		}
		if($temp == 'quanlidanhmucsanpham' && $query =='them'){
			include("modules/quanlidanhmucsp/them.php");
			include("modules/quanlidanhmucsp/lietke.php");
		}
		elseif($temp == 'quanlidanhmucsanpham' && $query =='sua'){
			include("modules/quanlidanhmucsp/sua.php");
		}
		elseif($temp == 'quanlisanpham' && $query =='them'){
			include("modules/quanlisp/them.php");
			include("modules/quanlisp/lietke.php");
		}
		elseif($temp == 'quanlisanpham' && $query =='sua'){
			include("modules/quanlisp/sua.php");
		}
		elseif($temp == 'quanlidanhmucbaiviet' && $query =='them'){
			include("modules/quanlidanhmucbaiviet/them.php");
			include("modules/quanlidanhmucbaiviet/lietke.php");
		}
		elseif($temp == 'quanlidanhmucbaiviet' && $query =='sua'){
			include("modules/quanlidanhmucbaiviet/sua.php");
		}
		elseif($temp == 'quanlibaiviet' && $query =='them'){
			include("modules/quanlibaiviet/them.php");
			include("modules/quanlibaiviet/lietke.php");
		}
		elseif($temp == 'quanlibaiviet' && $query =='sua'){
			include("modules/quanlibaiviet/sua.php");
		}
		elseif($temp == 'quanlidonhang' && $query =='lietke'){
			include("modules/quanlidonhang/lietke.php");
		}
		elseif($temp == 'chitietdonhang' && $query =='chitietdonhang'){
			include("modules/quanlidonhang/chitietdonhang.php");
		}
		elseif($temp == 'lienhe' && $query =='capnhat'){
			include("modules/thongtinlienhe/thongtin.php");
		}
		elseif($temp == 'thongke' && $query =='thongke'){
			include("modules/thongkedoanhthu/thongke.php");
		}
		elseif($temp == 'quanlitaikhoan' && $query =='them'){
			include("modules/quanlitaikhoan/lietke.php");
		}
		elseif($temp == 'quanlinhanvien' && $query =='them'){
			include("modules/quanlinhanvien/them.php");
			include("modules/quanlinhanvien/lietke.php");
		}
		elseif($temp == 'quanlinhanvien' && $query =='sua'){
			include("modules/quanlinhanvien/sua.php");
		}
		else{
			include("modules/welcome.php");
		}
	?>
</div>