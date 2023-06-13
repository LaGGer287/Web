<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');  
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ban Hang</title>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/code.jquery.com_jquery-3.7.0.slim.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header><h1>QUẢN LÝ BÁN HÀNG</h1></header>
	<content>
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Trang chủ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="danhsach.php">Danh sách đơn hàng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="taomoi.php">Tạo đơn hàng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="anh.png">Ảnh câu 1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signout.php">Đăng xuất</a>
					</li>
				</ul>
			<h2>ĐÂY LÀ TRANG CHỦ</h2>
	</content>
	<footer>86241 - NGUYỄN DUY CHIẾN - CNT61ĐH
		<br>
		<?php echo($_SESSION['username']);
			echo(' vừa đăng nhập');
			echo(' vào lúc ');			
		?>
		<?php echo date("d/m/Y H:i:s")?>		
	</footer>
</body>
</html>

