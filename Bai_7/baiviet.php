<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
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
				<h4>Thêm tin tức</h4>
					<form>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Thứ tự</label>
							<input type="text" class="form-control" name="tt" placeholder="Nhập thứ tự">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Mã tin tức(ID)</label>
							<input type="text" class="form-control" name="idtt" placeholder="Nhập mã tin tức">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Tiêu đề</label>
							<input type="text" class="form-control" name="td" placeholder="Nhập tiêu đề">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Mô tả ngắn</label>
							<input type="text" class="form-control" name="mtn" placeholder="Nhập mô tả ngắn">
						</fieldset>
						<br>
						<fieldset class="form-group">
							<input type="submit" class="form-control" name="submit" value="Lưu">
						</fieldset>					
					</form>
					<br>
				<h4>Danh sách các tin tức gần đây</h4>
					<table class="table table-inverse">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Mã TT(ID)</th>
								<th>Tiêu đề</th>
								<th>Mô tả ngắn</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
						</tbody>
					</table>
		</div>	
	</content>
	<div class="footer d-flex align-items-center justify-content-center fixed-bottom" style="background-color: lightblue">
		<h4>86421 Nguyễn Duy Chiến CNT61ĐH</h4>
	</div>
</body>
</html>