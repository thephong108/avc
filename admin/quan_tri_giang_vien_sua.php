<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới tin tức</title>
</head>
<body>

	<h1 style="text-align: center; padding-bottom: 20px;">THÊM MỚI TIN TÚC</h1>
	<form method="POST" action="./quan_tri_giang_vien_sua_thuc_hien.php">
			<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

	// 2. Lấy ra được ID của tin tức cần xóa
	$id_giang_vien=$_GET["id"];
	// echo $id_tin_tuc; exit();

	// 2. Viết câu lệnh SQL để xóa tin tức có id thu được như trên
	$sql = "
		SELECT *
		FROM tbl_giang_vien
		WHERE `ID_Giang_vien` ='".$id_giang_vien."'
	";

	// 4. Thực hiện truy vấn để xóa tin tức trên
	$giang_vien = mysqli_query($ket_noi, $sql);

	$row = mysql_fetch_array($giang_vien);

;?>
			<p>
			Tên Giảng Viên:<br>
			<input type="text" name="txtTengiangvien" style="width: 100%;">
		</p>
		<p>
			Chức Danh:<br>
			<textarea name="txtChucDanh" style="width: 100%;"></textarea>
		</p>
		<p>
			Ảnh Giảng Viên:<br>
			<input type="file" name="txtAnhgiangvien" style="width: 100%;">
		</p>
		<p>
			Email:<br>
			<textarea name="txtEmail" style="width: 100%;"></textarea>
		</p>
			<p>
			Bộ môn:<br>
			<textarea name="txtbomon" style="width: 100%;"></textarea>
		</p>
			<p>
			Phụ trách học phần:<br>
			<textarea name="txtphutrach" style="width: 100%;"></textarea>
		</p>
			</p>
			<p>
			Chia sẻ nghiên cứu:<br>
			<textarea name="txtnghiencuu" style="width: 100%;"></textarea>
		</p>
			<p>
			Chuyên môn:<br>
			<textarea name="txtchuyenmon" style="width: 100%;"></textarea>
		</p>
		
		<button type="submit">Cập nhật</button>
	</form>
</body>
</html>