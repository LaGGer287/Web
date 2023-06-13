<?php 
	include('connect.php');
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');
	}
	if(empty($_POST['submit'])){
		$sql = "SELECT `id`, `namthanhlap`, `ten`, `muctieu`, `TenCT` FROM `hienthi`";
		$stmt = $conn->prepare($sql);
		$query = $stmt->execute();
		$result = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$result[] = $row;
		}
	}
	else{
		$timkiem = $_POST['timkiem'];
		$sql = "SELECT `id`, `namthanhlap`, `ten`, `muctieu`, `TenCT` FROM `hienthi` WHERE `ten` LIKE '%$timkiem%'";
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
			<form method="POST">
				<LABEL>Tìm kiếm</LABEL>
				<input type="text" name="timkiem" placeholder="Nhập tên CLB">
				<input type="submit" name="submit" value="Tìm kiếm">
			</form>
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
					<h3>Danh sách các CLB</h3>
					<table class="table table-inverse">
						<thead>
							<tr>
								<th>Mã CLB</th>
								<th>Năm thành lập</th>
								<th>Tên CLB</th>
								<th>Mục tiêu</th>
								<th>Chủ tịch CLB</th>
								<th>Quản lý hoạt động</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($result as $item):?>
							<tr>
								<td><?php echo $item['id'] ;?></td>
								<td><?php echo $item['namthanhlap'] ;?></td>
								<td><?php echo $item['ten'] ;?></td>
								<td><?php echo $item['muctieu'] ;?></td>
								<td><?php echo $item['TenCT'] ;?></td>
								<td><a href="hoatdong.php">Xem thêm</a></td>
							</tr>
							<?php endforeach ?>
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