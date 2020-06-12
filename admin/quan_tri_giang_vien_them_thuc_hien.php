<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

	// 2. Lấy ra lấy dữ liệu thu được từ FORM chuyển sang
	$Ten = $_POST["txtTengiangvien"];
	$chuc_danh = $_POST["txtChucDanh"];
	$bo_mon = $_POST["txtbomon"];
	$Email = $_POST["txtEmail"];
		$phu_trach = $_POST["txtphutrach"];
			$nghien_cuu = $_POST["txtnghiencuu"];
				$chuyen_mon = $_POST["txtchuyenmon"];
	//lấy ra thông tin ảnh minh họa
	$anh_minh_hoa = "../img/".basename($_Files["txtAnhgiangvien"]["name"]);
	$file_anh_tam = $_Files['txtAnhgiangvien']["tmp_name"];
	$result = move_uploaded_file($file_anh_tam, $anh_minh_hoa);

	if(!$result)
	{
		$anh_minh_hoa = NULL;
	}
					// echo $tieu_de; exit();

	// 3. Viết câu lệnh SQL để thêm mới tin tức vào CSDL
	$sql = "
	INSERT INTO `tbl_giang_vien`(`ID_Giang_vien`, `Ten_Giang_vien`, `Chuc_danh`, `Email`, `Bo_Mon`, `Phu_trach_hoc_phan`,`Chia_se_nghien_cuu`,`Chuyen_mon`,`anh_giang_vien`
	) VALUES 
	(NULL, '".$Ten."','".$chuc_danh."','".$Email."','".$bo_mon."','".$phu_trach."','".$nghien_cuu."','".$chuyen_mon."','".$anh_minh_hoa."')
	
	";
	// echo $sql; exit();

	// 4. Thực hiện truy vấn để thêm mới tức trên
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc thêm mới tin tức thành công & quay trở lại trang quản lý tin tức
		// Thông báo cho người dùng biết bài viết đã được thêm mới thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã thêm mới giảng viên thành công.');
			</script>
		";

		// Chuyển người dùng vào trang quản trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.location.href = './quan_tri_giang_vien.php'
			</script>
		";
;?>