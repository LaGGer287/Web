<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quản lý nhân sự</title>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/code.jquery.com_jquery-3.7.0.slim.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
</head>
<body>
	<header><h1>Quản lý nhân sự</h1></header>
	<content>
		<div class="container">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Trang chủ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="list.php">Danh sách nhân sự</a>
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
	<footer>
		<?php
			echo ($_SESSION['username']);
			echo(" vừa đăng nhập")
		?>
		<br>
		86421 - Nguyễn Duy Chiến - CNT61ĐH

	</footer>
</body>
</html>