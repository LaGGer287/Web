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
		$sql = "SELECT * FROM `hienthi` WHERE ten LIKE '%$timkiem%'";
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
				<h4>Danh sách các chuyên mục đang có trong hệ thống</h4>
				<form method="POST">
					<label>Tìm kiếm chuyên mục</label>
					<input type="text" name="timkiem" placeholder="Nhập chuyên mục">
					<input type="submit" name="submit" value="Tìm kiếm">
				</form>
				<br>
				<table class="table table-inverse">
					<thead>
						<tr>
							<th>Mã chuyên mục</th>
							<th>Tên chuyên mục</th>
							<th>Chủ đề</th>
							<th>Mô tả</th>
							<th>Số từ tối thiểu</th>
							<th>Cấp độ tối thiểu</th>
							<th>Bài viết</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $item):?>
						<tr>
							<td><?php echo $item['id']; ?></td>
							<td><?php echo $item['ten']; ?></td>
							<td><?php echo $item['tcd']; ?></td>
							<td><?php echo $item['mota']; ?></td>
							<td><?php echo $item['sotutoithieu']; ?></td>
							<td><?php echo $item['capdotoithieu']; ?></td>
							<td><a href="baiviet.php">Quản lý bài viết</a></td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
		</div>	
	</content>
	<div class="footer d-flex align-items-center justify-content-center fixed-bottom" style="background-color: lightblue">
		<h4>86421 Nguyễn Duy Chiến CNT61ĐH</h4>
	</div>
</body>
</html>