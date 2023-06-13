<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>QUẢN LÝ BỆNH VIỆN</title>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/code.jquery.com_jquery-3.7.0.slim.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header d-flex align-items-center justify-content-center fixed-top" style="background-color: lightblue">
		<h1>Quản lý bệnh viện</h1>
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
						<a class="nav-link" href="list.php">Danh sách</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cau1.png">Ảnh câu 1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signout.php">Đăng xuất</a>
					</li>
				</ul>
				<h3>Đây là trang chủ</h3>
		</div>
	</content>
	<div class="footer d-flex align-items-center justify-content-center fixed-bottom" style="background-color: lightblue">
		<h4>86421 - Nguyễn Duy Chiến - CNT61ĐH</h4>
	</div>

</body>
</html>