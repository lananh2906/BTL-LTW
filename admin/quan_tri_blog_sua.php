<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện sửa tin tức</title>
</head>
<body>
	<h1>CẬP NHẬT TIN TỨC</h1>
	<form method="POST" action="./quan_tri_blog_sua_thuc_hien.php" enctype="multipart/form-data">
		<?php
			// 1. KẾT NỐI ĐẾN CSDL
			$ket_noi = mysqli_connect("localhost", "root", "", "cua_hang_banh");

			// 2. Lấy ra ID của tin tức cần sửa
			$id_blog = $_GET["id"];

			// 3. Lấy dữ liệu mong muốn
			$sql = "
				SELECT *
				FROM tbl_blog
				WHERE id_blog='".$id_blog."'
			";

			// 4. Thực thi câu lệnh lấy ra dữ liệu mong muốn
			$noi_dung_blog = mysqli_query($ket_noi, $sql);

			// 5. Hiển thị dữ liệu lấy được lên màn hình
			$row = mysqli_fetch_array($noi_dung_blog);
		;?>

		<p>
			Tiêu đề:<br>
			<input type="text" name="txtTieuDe" style="width: 100%" value="<?php echo $row["tieu_de"];?>">
		</p>
		<p>
			Mô tả:<br>
			<textarea name="txtMoTa" style="width: 100%"><?php echo $row["Mo_ta"];?></textarea>
		</p>
		<p>
			Ảnh minh họa:<br>
			<input type="file" name="txtAnhMinhHoa" style="width: 100%">
		</p>
		<p>
			Nguyên liệu:<br>
			<textarea name="txtNguyenlieu" style="width: 100%"><?php echo $row["Nguyen_lieu"];?></textarea>
		</p>
		<p>
			Cách làm:<br>
			<textarea name="txtCachlam" style="width: 100%"><?php echo $row["Cach_lam"];?></textarea>
		</p>
		<button type="submit">Sửa</button>
		<input type="hidden" name="txtID" value="<?php echo $row["id_blog"];?>">
	</form>
</body>
</html>