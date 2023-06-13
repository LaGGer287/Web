<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>THCS</title>
	<script type="text/javascript" src="js/bootstrap.min.cs"></script>
	<script type="text/javascript" src="js/code.jquery.com_jquery-3.7.0.slim.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header><h1>QUẢN LÝ HỌC SINH</h1></header>
	<content>
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
				<h2>ĐÂY LÀ TRANG CHỦ</h2>
	</content>
	<footer>86421 - Nguyễn Duy Chiến - CNT6ĐH
		<br>
		<?php echo($_SESSION['username']);
			echo(' vừa đăng nhập');		
			?>
	</footer>
</body>
</html>