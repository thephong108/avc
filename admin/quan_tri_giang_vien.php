<!DOCTYPE html>
<html>
<head>
	<title>Quản Trị Giảng Viên</title>
</head>
<body>
	<h1 style="text-align: center; color: red; font=font-weight: bold; padding-bottom: 30px;">Quản Trị Giảng Viên</h1>
	<p style="text-align: right; font-weight: bold;"><a href="./quan_tri_giang_vien_them.php">Thêm mới</a></p>
	<table>
		<tr>
			<td style="font-weight: bold; text-align: center;">STT</td>
			<td style="font-weight: bold; text-align: center;">Ảnh minh họa</td>
			<td style="font-weight: bold; text-align: center;">Tên</td>
			<td style="font-weight: bold; text-align: center;" colspan="2">Thao tác</td>
		</tr>
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
			$i=0;
			while ($row = mysqli_fetch_array($thong_tin_giang_vien)) {
			$i++;
		;?>
		<tr>
			<td><?=$i;?></td>
			<td><img src="../img/<?php 
						if ($row["anh_giang_vien"]<>"") {
							echo $row["anh_giang_vien"];
						} else {
							echo "no_image.png";
						}
					;?>" width="180px" height="auto">
			</td>
			<td><?php echo $row["Ten_Giang_vien"];?></td>
			<td><a href="./quan_tri_giang_vien_sua.php?id=<?php echo $row["ID_Giang_vien"];?>">Sửa</a></td>
			<td><a href="./quan_tri_giang_vien_xoa.php?id=<?php echo $row["ID_Giang_vien"];?>">Xóa</a></td>
		</tr>
		<?php
			}
		;?>
	</table>
</body>
</html>