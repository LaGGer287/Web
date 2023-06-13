<?php 
	include('connect.php');
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
	if(empty($_POST['timkiem'])){
		$sql = "SELECT * FROM hienthi";
			$stmt = $conn->prepare($sql);
			$query = $stmt->execute();
			$result = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$result[] = $row;
			} 
	}
	else{
		$timkiem = $_POST['timkiem'];
		$sql = "SELECT * FROM hienthi WHERE hovaten LIKE '%$timkiem%'";
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
			<form method="POST">
					<label>Tìm kiếm nhân sự</label>
					<input type="text" name="timkiem" placeholder="Nhập tên nhân sự">
					<input type="submit" name="submit" value="Tìm kiếm">
			</form>	
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
					<h2>Danh sách nhân sự</h2>
					<table class="table table-inverse">
						<thead>
							<tr>
								<th>Mã nhân sự</th>
								<th>Phòng ban</th>
								<th>Trạng thái</th>
								<th>Trình độ</th>
								<th>Họ và tên</th>
								<th>Điện thoại</th>
								<th>Email</th>
								<th>Thân nhân</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($result as $item): ?>
							<tr>
								<td><?php echo $item['id'] ;?></td>
								<td><?php echo $item['pbt'] ;?></td>
								<td><?php echo $item['trangthai'] ;?></td>
								<td><?php echo $item['ten'] ;?></td>
								<td><?php echo $item['hovaten'] ;?></td>
								<td><?php echo $item['dienthoai'] ;?></td>
								<td><?php echo $item['email'] ;?></td>
								<td><a href="thannhan.php">Xem thêm</a></td>							
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
		</div>
	</content>
	<footer>86421 - Nguyễn Duy Chiến - CNT61ĐH</footer>
</body>
</html>