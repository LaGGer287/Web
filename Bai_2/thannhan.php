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
					<h3>Thêm thân nhân cho nhân sự</h3>
					<form>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Số thứ tự</label>
							<input type="text" class="form-control" name="tt" placeholder="Nhập số thứ tự">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput2">Mối quan hệ</label>
							<input type="text" class="form-control" name="quanhe" placeholder="Nhập mối quan hệ">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput2">Tên thân nhân</label>
							<input type="text" class="form-control" name="ten" placeholder="Nhập tên thân nhân">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput2">Điện thoại</label>
							<input type="text" class="form-control" name="dienthoai" placeholder="Nhập số điện thoại">
						</fieldset>
						<br>
						<fieldset class="form-group">
							<input type="submit" class="form-control" name="submit" value="Lưu">
						</fieldset>
					</form>
					<br>
					<h2>Danh sách thân nhân</h2>
					<table class="table table-inverse">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Quan hệ</th>
								<th>Tên</th>
								<th>Điện thoại</th>
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
	<footer>86421 - Nguyễn Duy Chiến - CNT61ĐH</footer>
</body>
</html>