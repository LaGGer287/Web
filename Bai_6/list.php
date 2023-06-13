<?php
	include('connect.php');
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
	if(empty($_POST['submit'])){
		$sql = "SELECT * FROM `hienthi`";
		$stmt = $conn->prepare($sql);
		$query = $stmt->execute();
		$result = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$result[] = $row;
		}
	}
	else{
		$timkiem = $_POST['timkiem'];
		$sql = "SELECT * FROM `hienthi` WHERE hovaten LIKE '%$timkiem%'";
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
				<h2>Danh sách nhân viên</h2>
				<form method="POST">
					<label>Tìm kiếm nhân viên</label>
					<input type="text" name="timkiem" placeholder="Nhập tên nhân viên">
					<input type="submit" name="submit" value="Tìm kiếm">
				</form>
				<table class="table table-inverse">
					<thead>
						<tr>
							<th>Mã nhân viên</th>
							<th>Khoa</th>
							<th>Họ và tên</th>
							<th>Điện thoại</th>
							<th>Năm ký hợp đồng</th>
							<th>Hành động</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $items):?>
						<tr>
							<td><?php echo $items['id']; ?></td>
							<td><?php echo $items['ten']; ?></td>
							<td><?php echo $items['hovaten']; ?></td>
							<td><?php echo $items['dienthoai']; ?></td>
							<td><?php echo $items['namkyhopdong']; ?></td>
							<td><a href="them.php">Xem thêm</a></td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
		</div>
	</content>
	<div class="footer d-flex align-items-center justify-content-center fixed-bottom" style="background-color: lightblue">
		<h4>86421 - Nguyễn Duy Chiến - CNT61ĐH</h4>
	</div>

</body>
</html>