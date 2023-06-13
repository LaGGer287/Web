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
		</div>
		<h4>Thêm ca điều trị</h4>
		<form method="POST">
			<fieldset class="form-group">
				<label for="formGroupExampleInput">STT</label>
				<input type="text" class="form-control" name="tt" placeholder="Nhập thứ tự">
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Mã Ca(ID)</label>
				<input type="text" class="form-control" name="maca" placeholder="Nhập mã ca">
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Tên bệnh nhân</label>
				<input type="text" class="form-control" name="tbn" placeholder="Nhập tên bệnh nhân">
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Tên loại bênh</label>
				<input type="text" class="form-control" name="tlb" placeholder="Nhập tên loại bệnh">
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Ngày bắt đầu</label>
				<input type="text" class="form-control" name="nbd" placeholder="Nhập ngày bắt đầu">
			</fieldset>
			<br>
			<fieldset class="form-group">
				<input type="submit" class="form-control" name="submit" value="Lưu" >
			</fieldset>
		</form>
		<br>
		<h4>Danh sách ca điều trị phụ trách</h4>
		<table class="table table-inverse">
			<thead>
				<tr>
					<th>TT</th>
					<th>Mã Ca(ID)</th>
					<th>Tên bệnh nhân</th>
					<th>Tên loại bệnh</th>
					<th>Ngày bắt đầu</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
					<td>1</td>
				</tr>
			</tbody>
		</table>
	</content>
	<div class="footer d-flex align-items-center justify-content-center fixed-bottom" style="background-color: lightblue">
		<h4>86421 - Nguyễn Duy Chiến - CNT61ĐH</h4>
	</div>

</body>
</html>