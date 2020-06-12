<?php 
	// 1. Chuỗi kết nối đến CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "k20httta_db");

	// 2. Lấy ra được ID của tin tức cần xóa
	$id_giang_vien=$_GET["id"];
	// echo $id_tin_tuc; exit();

	// 2. Viết câu lệnh SQL để xóa tin tức có id thu được như trên
	$sql = "
		DELETE
		FROM tbl_giang_vien
		WHERE ID_Giang_vien='".$id_giang_vien."'
	";

	// 4. Thực hiện truy vấn để xóa tin tức trên
	mysqli_query($ket_noi, $sql);

	// 5. Thông báo việc xóa tin tức thành công & quay trở lại trang quản lý tin tức
		// Thông báo cho người dùng biết bài viết đã được xóa thành công
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã xóa bài viết thành công.');
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