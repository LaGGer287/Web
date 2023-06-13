<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');  
	}
	include('connect.php');
	if(empty($_POST['submit'])){
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
	<title>Ban Hang</title>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/code.jquery.com_jquery-3.7.0.slim.js"></script> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header><h1>QUẢN LÝ BÁN HÀNG</h1></header>
	<content>
		<br>
		<form method="post">
			<label>TÌM KIẾM</label>
			<input type="text" name="timkiem" placeholder="Nhập tên khách hàng">
			<input type="submit" name="submit" value="TÌM KIẾM">
		</form>
		<br>
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Trang chủ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="danhsach.php">Danh sách đơn hàng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="taomoi.php">Tạo đơn hàng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="anh.png">Ảnh câu 1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signout.php">Đăng xuất</a>
					</li>
				</ul>
		<h2> Danh sách đơn hàng</h2>
		<table class="table table-inverse">
			<thead>
				<tr>
					<th>Mã đơn hàng</th>
					<th>Khách hàng</th>
					<th>Hàng hoá</th>
					<th>Số lượng</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result as $item):?>
				<tr>
					<td><?php echo $item['id'];?></td>
					<td><?php echo $item['hovaten'];?></td>
					<td><?php echo $item['ten'];?></td>
					<td><?php echo $item['soluong'];?></td>
					<td><a href="taomoi.php">Thêm</a></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</content>
	<footer>86241 - NGUYỄN DUY CHIẾN - CNT61ĐH</footer>
</body>
</html>