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
				echo "Đăng nhập thất bại!";
			}
			else{
				$_SESSION['username'] = $username;
				header('location:index.php');
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quản lý tin tức</title>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/code.jquery.com_jquery-3.7.0.slim.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header d-flex align-items-center justify-content-center fixed-top" style="background-color: lightblue">
		<h1>Quản lý tin tức</h1>
	</div>
	<br>
	<br>
	<br>
	<content>
		<div class="container">
			<form method="POST">
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
					<input type="submit" class="form-control" name="submit" value="Đăng Nhập">
				</fieldset>
			</form>
		</div>	
	</content>
	<div class="footer d-flex align-items-center justify-content-center fixed-bottom" style="background-color: lightblue">
		<h4>86421 Nguyễn Duy Chiến CNT61ĐH</h4>
	</div>
</body>
</html>