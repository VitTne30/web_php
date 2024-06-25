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
		if($temp == 'quanlibaiviet' && $query =='them'){
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
		else{
			include("modules/welcome.php");
		}
	?>
</div>