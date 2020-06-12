<html>
	<head>
		<meta charset="utf-8">
		<title>ĐỘI NGŨ GIẢNG VIÊN | K20HTTTA</title>
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>

	<body>
		<h1 style="color: red;">ĐỘI NGŨ GIẢNG VIÊN </h1>

		<p style="text-align: right;" id="dieuhuong"><a href=".\index.php">Trang chủ</a> | 
			<a href=".\admin\quan_tri_giang_vien.php">Quản trị</a> </p>

		<div style="float: left; width: 700px;">
			<?php 
				// 1. Chuỗi kết nối đến CSDL
				$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

				// 2. Viết câu lệnh SQL để lấy ra dữ liệu mong muốn
				$sql = "
					SELECT *
					FROM tbl_giang_vien
					ORDER BY ID_Giang_vien DESC
				";

				// 3. Thực hiện truy vấn để lấy ra các dữ liệu mong muốn
				$thong_tin_giang_vien = mysqli_query($ket_noi, $sql);

				// 4. Hiển thị dữ liệu mong muốn
				while ($row = mysqli_fetch_array($thong_tin_giang_vien)) {
			;?>
			<h3><a href="giang_vien_chi_tiet.php?id=<?php echo $row["ID_Giang_vien"];?>"><font color="red"><?php echo $row["Ten_Giang_vien"];?></font></a></h3>
			<table>
				<tr>
					<td><img src="./img/<?php 
						if ($row["anh_giang_vien"]<>"") {
							echo $row["anh_giang_vien"];
						} else {
							echo "no_image.png";
						}
					;?>" width="180px" height="auto"></td>
					<td style="vertical-align: top;"><p class="motanoidung"><i><?php echo $row["Chuc_danh"];?></i></p></td>
				</tr>
			</table>
			<hr>
			<?php
				}
			;?>
		</div>
		<div style="float: left; width: 300px;">
			TIN TỨC ĐƯỢC NHIỀU NGƯỜI ĐỌC

			<ul>
				<li>CĐV Man Utd: 'Hãy trao Quả Bóng Vàng cho Ighalo'</li>
				<li>CĐV Liverpool nguyền rủa thủ môn Adrian 39 </li>
				<li>HLV Australia lo sau khi Việt Nam ghi bàn</li>
				<li>Ronaldinho ký tặng bạn tù</li>
			</ul>
		</div>


	</body>
</html>