<?php
session_start();
if(!isset($_SESSION['dangnhapAdmin'])){
	header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
</head>
<body>
	<h3 class="title_admin"><a href="index.php" style="text-decoration: none">Welcome to Admin Site</a></h3>
	<div class="wrapper">
		<?php
			include("config/connect.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
    	?>	
	</div>
	
	<script src="../ckeditor/ckeditor.js"></script>
	
	<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //CKEDITOR.replace( 'post_content' );
		CKEDITOR.replace( 'tomtat' );
		CKEDITOR.replace( 'noidung' );
	</script>
</body>
</html>