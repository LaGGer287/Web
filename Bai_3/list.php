<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
	include('connect.php');
	if(empty($_POST['submit'])){
		$sql = "SELECT * FROM hocsinh";
		$stmt = $conn->prepare($sql);
		$query = $stmt->execute();
		$result = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$result[] = $row;
		}
	}
	else{
		$timkiem = $_POST['timkiem'];
		$sql = "SELECT * FROM hocsinh WHERE hovaten LIKE '%$timkiem%'";
		$stmt = $conn->prepare($sql);
		$query = $stmt->execute();
		$result = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$result[] = $row;
		}
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
		<form method="POST">
			<label>Tìm kiếm</label>
			<input type="text" name="timkiem" placeholder="Nhập tên học sinh">
			<input type="submit" name="submit" value="Tìm kiếm">
		</form>
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
				<h2>DANH SÁCH HỌC SINH</h2>
				<table class="table table-inverse">
					<thead>
						<tr>
							<th>Mã học sinh</th>
							<th>Trạng thái</th>
							<th>Lớp</th>
							<th>Họ và tên</th>
							<th>Ngày sinh</th>
							<th>Mô tả</th>
							<th>Nhận xét</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $item):?>
						<tr>
							<td><?php echo $item['id'];?></td>
							<td><?php echo $item['trangthai'];?></td>
							<td><?php echo $item['lop_id'];?></td>
							<td><?php echo $item['hovaten'];?></td>
							<td><?php echo $item['ngaysinh'];?></td>
							<td><?php echo $item['mota'];?></td>
							<td><a href="nhanxet.php">Xem nhận xét</a></td>
						</tr>
						<?php endforeach ?>						
					</tbody>
				</table>
	</content>
	<footer>86421 - Nguyễn Duy Chiến - CNT6ĐH</footer>
</body>
</html>