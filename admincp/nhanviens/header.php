<?php
if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
	unset($_SESSION['dangnhapNhanvien']);
	header("Location: loginNhanvien.php");
}
?>

<p style="margin-left : 5px">
    <a href="nhanviensite.php?dangxuat=1"> 
        Đăng xuất 
		tài khoản: 
        <?php 
        if(isset($_SESSION['dangnhapNhanvien'])){
            echo $_SESSION['dangnhapNhanvien'];
        }
        ?>
    </a>
</p>
