<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:signin.php');  
	}
	include('connect.php');
	$sql = "SELECT khachhang.id AS khid ,hanghoa.id AS hhid,hovaten,ten FROM khachhang,hanghoa WHERE khachhang.id = hanghoa.id;";
	$stmt = $conn->prepare($sql);
	$query = $stmt->execute();
	$result = array();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$result[] = $row;
	}

	if(!empty($_POST['submit'])){
		if(isset($_POST['iddonhang']) && isset($_POST['idchitietdonhang']) && isset($_POST['idkhachhang']) && isset($_POST['hanghoa']) && isset($_POST['soluong'])){
			$iddh = $_POST['iddonhang'];
			$idctdh = $_POST['idchitietdonhang'];
			$idkhachhang = $_POST['idkhachhang'];
			$hanghoa = $_POST['hanghoa'];
			$soluong = $_POST['soluong'];
			$sql = "INSERT INTO donhang(id,khachhang_id) VALUES('$iddh','$idkhachhang'); INSERT INTO chitietdonhang(id,donhang_id,hanghoa_id,soluong) 
			VALUES('$idctdh','$iddh','$hanghoa','$soluong') ";
			$stmt = $conn->prepare($sql);
			$query = $stmt->execute();
			if($query){
				header('location:danhsach.php');
			}
			else{
				echo 'Lỗi';
			}
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

				<form method="post">
					<fieldset class="form-group">
						<label for="formGroupExampleInput">ID đơn hàng</label>
						<input type="text" class="form-control" name="iddonhang" placeholder="Nhập ID đơn hàng">
					</fieldset>
					<br>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">ID Chi tiết đơn hàng</label>
						<input type="text" class="form-control" name="idchitietdonhang" placeholder="Nhập ID chi tiết đơn hàng">
					</fieldset>
					<br>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">Khách hàng</label>
						<select class="form-control" name="idkhachhang" placeholder="Chọn khách hàng">
							<?php foreach ($result as $key => $item): ?>
							<option value="<?php echo $item['khid'];?>"><?php echo $item['hovaten'];?></option>
						<?php endforeach ?>
						</select>
					</fieldset>
					<br>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">Hàng hoá</label>
						<select class="form-control" name="hanghoa" placeholder="Chọn hàng hoá">
							<?php foreach ($result as $key => $item): ?>
							<option value="<?php echo $item['hhid'];?>"><?php echo $item['ten'];?></option>
						<?php endforeach ?>
						</select>
					</fieldset>
					<br>
					<fieldset class="form-group">
						<label for="formGroupExampleInput2">Số lượng</label>
						<input type="text" class="form-control" name="soluong" placeholder="Nhập số lượng">
					</fieldset>
					<br>
					<fieldset class="form-group">
						<input type="submit" class="form-control" name="submit" value="Lưu">
					</fieldset>
				</form>

	</content>
	<footer>86241 - NGUYỄN DUY CHIẾN - CNT61ĐH</footer>
</body>
</html>