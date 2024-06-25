<div id="main">
	<?php
	include("sidebar/sidebar.php");
	?>
	
	<div class="maincontent">
		<?php
            if(isset($_GET['quanli'])){
                $temp = $_GET['quanli'];
            }
            else{
                $temp = '';
            }
		
            if($temp == 'danhmucsanpham'){
                include("main/danhmuc.php");
            }
            else if($temp == 'danhmucbaiviet'){
                include("main/danhmucbaiviet.php");
            }
            else if($temp == 'baiviet'){
                include("main/baiviet.php");
            }
            else if($temp == 'giohang'){
                include("main/giohang.php");
            }
            else if($temp == 'tincongnghe'){
                include("main/tincongnghe.php");
            }
            else if($temp == 'lienhe'){
                include("main/lienhe.php");
            }
            else if($temp == 'sanpham'){
                include("main/sanpham.php");
            }
            else if($temp == 'dangnhap'){
                include("main/dangnhap.php");
            }
            else if($temp == 'dangki'){
                include("main/dangki.php");
            }
            else if($temp == 'timkiem'){
                include("main/timkiem.php");
            }
            else if($temp == 'doimatkhau'){
                include("main/doimatkhau.php");
            }
			else if($temp == 'quenmatkhau'){
                include("main/quenmatkhau.php");
            }
            else if($temp == 'camon'){
                include("main/camon.php");
            }
			else if($temp == 'vanchuyen'){
                include("main/vanchuyen.php");
            }
			else if($temp == 'thongtinthanhtoan'){
                include("main/thongtinthanhtoan.php");
            }
			else if($temp == 'lichsumuahang'){
                include("main/lichsumuahang.php");
            }
			else if($temp == 'xemdonhang'){
                include("main/xemdonhang.php");
            }
            else{
                include("main/index.php");
            }
        ?>
	</div>
</div>