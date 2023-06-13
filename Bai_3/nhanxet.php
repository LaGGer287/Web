<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
	include('connect.php');
	$sql = "SELECT id,namhoc,nhanxetchung,uudiem,cachkhacphuc FROM tongketnam WHERE id=1";
		$stmt = $conn->prepare($sql);
		$query = $stmt->execute();
		$result = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$result[] = $row;
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
				<h2>TỔNG KẾT NĂM CỦA HỌC SINH</h2>
				<h3>Thêm nhận xét</h3>
				<form method="POST">
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Thứ tự</label>
						<input type="text" class="form-control" name="sott" placeholder="Nhập số thứ tự">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">Năm học</label>
						<input type="text" class="form-control" name="namhoc" placeholder="Nhập năm học">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">Nhận xét chung</label>
						<input type="text" class="form-control" name="nhanxetchung" placeholder="Nhập nhận xét chung">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">Ưu điểm</label>
						<input type="text" class="form-control" name="uudiem" placeholder="Nhập ưu điểm">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">Khuyết điểm</label>
						<input type="text" class="form-control" name="khuyetdiem" placeholder="Nhập khuyết điểm">
					</fieldset>
					<br>
					<fieldset class="form-group">
						<input type="submit" class="form-control" name="submit" value="Lưu">
					</fieldset>
				</form>

				<h3>Nhận xét của học sinh</h3>
				<table class="table table-inverse">
					<thead>
						<tr>
							<th>Số TT</th>
							<th>Năm học</th>
							<th>Nhận xét chung</th>
							<th>Ưu điểm</th>
							<th>Khuyết điểm</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $item):?>
						<tr>
							<td><?php echo $item['id']; ?></td>
							<td><?php echo $item['namhoc']; ?></td>
							<td><?php echo $item['nhanxetchung']; ?></td>
							<td><?php echo $item['uudiem']; ?></td>
							<td><?php echo $item['cachkhacphuc']; ?></td>
						</tr>
						<?php endforeach ?>					
					</tbody>
				</table>
	</content>
	<footer>86421 - Nguyễn Duy Chiến - CNT6ĐH</footer>
</body>
</html>