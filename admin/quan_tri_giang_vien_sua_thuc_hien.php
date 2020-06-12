<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

	// 2. Lấy ra lấy dữ liệu thu được từ FORM chuyển sang
	$id_giang_vien = $_POST["txtID"];
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
	// echo $tieu_de; exit();

	// 3. Viết câu lệnh SQL để thêm mới tin tức vào CSDL
		
	$sql = "
		UPDATE `tbl_giang_vien`
		SET 
		`Ten_Giang_vien`= '".$Ten."',
		`Chuc_danh`= '".$chuc_danh."',
		`Email`='".$Email."',`Bo_Mon`= '".$bo_mon."',`Phu_trach_hoc_phan`='".$phu_trach."',`Chia_se_nghien_cuu`='".$nghien_cuu."',`Chuyen_mon`='".$chuyen_mon."',`anh_giang_vien`=".$anh_minh_hoa."'

	WHERE `ID_Giang_vien` = '".$id_giang_vien."'
	
	";
	// echo $sql; exit();

	// 4. Thực hiện truy vấn để thêm mới tức trên
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc thêm mới tin tức thành công & quay trở lại trang quản lý tin tức
		// Thông báo cho người dùng biết bài viết đã được thêm mới thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã thêm mới bài viết thành công.');
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