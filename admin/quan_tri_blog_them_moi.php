<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới tin tức</title>
</head>
<body>
	<h1>THÊM MỚI TIN TỨC</h1>
	<form method="POST" action="./quan_tri_blog_them_moi_thuc_hien.php" enctype="multipart/form-data">
		<p>
			Tiêu đề:<br>
			<input type="text" name="txtTieuDe" style="width: 100%">
		</p>
		<p>
			Mô tả:<br>
			<textarea name="txtMoTa" style="width: 100%"></textarea>
		</p>
		<p>
			Ảnh minh họa:<br>
			<input type="file" name="txtAnhMinhHoa" style="width: 100%">
		</p>
		<p>
			Nguyên liệu:<br>
			<textarea name="txtNguyenlieu" style="width: 100%"></textarea>
		</p>
		<p>
			Cách làm:<br>
			<textarea name="txtCachlam" style="width: 100%"></textarea>
		</p>
		<button type="submit">Thêm mới</button>
	</form>
</body>
</html>