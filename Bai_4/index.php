<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quản lý CLB</title>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/code.jquery.com_jquery-3.7.0.slim.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<div class="header d-flex fixed-top align-items-center justify-content-center", style="background-color: yellow">
		<h1>QUAN LY CLB</h1>
	</div>
	<br>
	<br>
	<br>
	<content>
		<div class="container">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Trang chủ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="list.php">Danh sách CLB</a>
						</li>				
						<li class="nav-item">
							<a class="nav-link" href="cau1.png">Ảnh câu 1</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="signout.php">Đăng xuất</a>
						</li>
					</ul>
					<h2>Đây là trang chủ</h2>
		</div>
	</content>
	<div class="footer d-flex fixed-bottom align-items-center justify-content-center", style="background-color: yellow">
		<h4>86421 - NGUYỄN DUY CHIẾN - CNT61ĐH </h4>
		<?php echo($_SESSION['username']); echo(" vừa đăng nhập!") ?>
	</div>
<body>
</body>
</html>