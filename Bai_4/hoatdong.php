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
					<h3>Thêm các hoạt động</h3>
					<form method="POST">
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Số thứ tự</label>
							<input type="text" class="form-control" name="stt" placeholder="Nhập STT">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Từ ngày</label>
							<input type="text" class="form-control" name="tungay" placeholder="Nhập ngày bắt đầu">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Đến ngày</label>
							<input type="text" class="form-control" name="denngay" placeholder="Nhập ngày kết thúc">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Mục tiêu</label>
							<input type="text" class="form-control" name="muctieu" placeholder="Nhập mục tiêu">
						</fieldset>	
						<br>
						<fieldset class="form-group">
							<input type="submit" class="form-control" name="submit" value="Lưu">
						</fieldset>
					</form>
					<h3>Danh sách các hoạt động</h3>
					<table class="table table-inverse">
						<thead>
							<tr>
								<th>STT</th>
								<th>Từ ngày</th>
								<th>Đến ngày</th>
								<th>Mục tiêu</th>
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
	<div class="footer d-flex fixed-bottom align-items-center justify-content-center", style="background-color: yellow">
		<h4>86421 - NGUYỄN DUY CHIẾN - CNT61ĐH </h4>
	</div>
<body>
</body>
</html>