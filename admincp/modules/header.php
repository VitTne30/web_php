<?php
if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
	unset($_SESSION['dangnhapAdmin']);
	header("Location: login.php");
}
?>

<p style="margin-left : 5px">
    <a href="index.php?dangxuat=1"> 
        Đăng xuất 
		tài khoản: 
        <?php 
        if(isset($_SESSION['dangnhapAdmin'])){
            echo $_SESSION['dangnhapAdmin'];
        }
        ?>
    </a>
</p>
