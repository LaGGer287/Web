<?php
	session_start();
	include('connect.php');
	if(!empty($_POST['submit'])){
		if(isset($_POST['username']) && isset($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM user WHERE username = '$username' AND matkhau = '$password'";
			$stmt = $conn->prepare($sql);
			$query = $stmt->execute(); 
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			if(!$row){
				echo "Đăng nhập thất bại";
			}
			else{
				$_SESSION['username'] = $username;
				header("location:index.php");
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang dang nhap</title>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/code.jquery.com_jquery-3.7.0.slim.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header><h1>QUẢN LÝ BÁN HÀNG</h1></header>
	<content>
		<div class="container">
			<form method="post">
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Tài khoản</label>
					<input type="text" class="form-control" name="username" placeholder="Nhập tài khoản">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput2">Mật khẩu</label>
					<input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
				</fieldset>
				<br>
				<fieldset class="form-group">
					<input type="submit" class="form-control" name="submit" value="Đăng nhập">
				</fieldset>
			</form>
		</div>
	</content>
	<footer>86241 - NGUYỄN DUY CHIẾN - CNT61ĐH</footer>
</body>
</html>