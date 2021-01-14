<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện cập nhật tin tức</title>
</head>
<body>
	<?php
		// 1. KẾT NỐI ĐẾN CSDL
		$ket_noi = mysqli_connect("localhost", "root", "", "cua_hang_banh");

		// 2. Lấy ra dữ liệu thu được từ FORM trước chuyển sang
		$id_blog = $_POST["txtID"];
		$tieu_de = $_POST["txtTieuDe"];
		$Mo_ta = $_POST["txtMoTa"];
		$Nguyen_lieu = $_POST["txtNguyenlieu"];
		$Cach_lam = $_POST["txtCachlam"];

		// Xử lý ảnh minh họa
		$anh_minh_hoa = "../img/".basename($_FILES["txtAnhMinhHoa"]["name"]);
		$file_anh_tam =  $_FILES["txtAnhMinhHoa"]["tmp_name"];
		$result = move_uploaded_file($file_anh_tam, $anh_minh_hoa);
		if(!$result) {
			$anh_minh_hoa = NULL;
		}

		// 3. Viết câu lệnh SQL để thêm mới tin tức vào bảng tbl_blog
		if($anh_minh_hoa == NULL) {
			$sql = "
			UPDATE `tbl_blog` 
			SET 
				`tieu_de` = '".$tieu_de."',
				`Mo_ta` = '".$Mo_ta."', 
				`Nguyen_lieu` = '".$Nguyen_lieu."' 
				`Cach_lam` = '".$Cach_lam."' 
			WHERE `tbl_blog`.`id_blog` = '".$id_blog."' 
			";
		} else {
			$sql = "
			UPDATE `tbl_blog` 
			SET 
				`tieu_de` = '".$tieu_de."',
				`Mo_ta` = '".$Mo_ta."', 
				`Nguyen_lieu` = '".$Nguyen_lieu."' 
				`Cach_lam` = '".$Cach_lam."' 
				`hinh_anh` = '".$anh_minh_hoa."'  
			WHERE `tbl_blog`.`id_blog` = '".$id_blog."'
			";
		}

		// echo $sql; exit();

		// 4. Thực hiện truy vấn để thêm mới tin tức
		mysqli_query($ket_noi, $sql);

		// 5. Thông báo việc thêm mới tin tức thành công & đẩy người dùng quay về trang quan trị tin tức
		echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn đã cập nhật bài viết thành công!');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='../admin/quan_tri_blog.php'
			</script>
		";
	;?>
</body>
</html>