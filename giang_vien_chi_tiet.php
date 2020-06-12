<!DOCTYPE html>
<html>
<head>
	<title>Thông Tin Giảng Viên| K20HTTTB</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
	<h1 style="color: red;">Thông Tin Giảng Viên</h1>

	<p style="text-align: right;" id="dieuhuong"><a href=".\index.php">Trang chủ</a> | 
		<a href=".\quan_tri_giang_vien.php">Quản trị</a> </p>

	<?php
		// 0. Lấy dữ liệu mã ID tin tức để thực hiện câu lệnh truy vấn
		$id_Giang_vien= $_GET["id"];

		// 1. Chuỗi kết nối đến CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

		// 2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
		$sql = "
			SELECT *
			FROM tbl_giang_vien
			WHERE ID_Giang_vien='".$id_Giang_vien."'
		";
		// Hướng dẫn check câu lệnh truy vấn viết đúng hay sai
		// var_dump($sql); exit();

		// 3. Thực hiện truy vấn để lấy ra các dữ liệu mong muốn
		$thong_tin_giang_vien = mysqli_query($ket_noi, $sql);

		// 4. Hiển thị dữ liệu mong muốn
		while ($row = mysqli_fetch_array($thong_tin_giang_vien)) {
	;?>
	<h3><?php echo $row["Ten_Giang_vien"];?></h3>
	<p><?php echo $row["Chuc_danh"];?></p>
	<p><?php echo $row["Email"];?></p>
	<p style="text-align: center;"><img src="./img/<?php 
		if ($row["anh_giang_vien"]<>"") {
			echo $row["anh_giang_vien"];
		} else {
			echo "no_image.png";
		}
	;?>" width="650px" height="auto"></p>
	<p><?php echo $row["Phu_trach_hoc_phan"];?></p>
		<p><?php echo $row["Chia_se_nghien_cuu"];?></p>
		<p><?php echo $row["Chuyen_mon"];?></p>
	<?php
		}
	;?>
</body>
</html>