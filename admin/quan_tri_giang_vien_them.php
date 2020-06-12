<!DOCTYPE html>
<html>
<head>
	<title>Thêm Giảng Viên </title>
</head>
<body>
	<h1 style="text-align: center; padding-bottom: 20px;">Thêm mới</h1>
	<form method="POST" action="./quan_tri_giang_vien_them_thuc_hien.php" enctype="multipart/form-data">
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
		<button type="submit">Thêm mới</button>
	</form>
</body>
</html>