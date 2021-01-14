<style type="text/css">
		table, tr, td {
			border: 1px solid;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
<div style="clear: both;">
<p>NỘI DUNG TRANG TIN TỨC</p>
<p><a href="../admin/quan_tri_blog_them_moi.php"><img src="./img/add.jpg" style="width: 32px; height: auto;"></a></p>
			<table>
				<tr>
					<td>STT</td>
					<td>Ảnh minh họa</td>
					<td>Tiêu đề</td>
					<td>Tác giả</td>
					<td>Ngày đăng</td>
					<td>Lượt xem</td>
					<td>Mô tả</td>
					<td>Nguyên liệu</td>
					<td>Cách làm</td>
				</tr>
<?php
				//1.kết nối đến csdl
				$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

				//2.lấy dl mong muốn
				$sql="SELECT * from tbl_blog order by id_blog desc";

				//3.thực thi câu lệnh lấy ra dl mong muốn
				$noi_dung=mysqli_query($ket_noi,$sql);

				//4.hiển thị dl lấy được lên màn hình
				$i=0;
				while ($row=mysqli_fetch_array($noi_dung)) { $i++;
			;?>
				<tr>
					<td><?php echo $i ;?></td>
					<td><img src="./img/<?php echo $row["hinh_anh"] ;?>" style="width: 200px; height: auto;"></td>
					<td><?php echo $row["tieu_de"] ;?></td>
					<td><?php echo $row["tac_gia"] ;?></td>
					<td><?php echo $row["ngay_dang"] ;?></td>
					<td><?php echo $row["luot_xem"] ;?></td>
					<td><?php echo $row["Mo_ta"] ;?></td>
					<td><?php echo $row["Nguyen_lieu"] ;?></td>
					<td><?php echo $row["Cach_lam"] ;?></td>
					<td><a href="../admin/quan_tri_blog_sua.php?id=<?php echo $row["id_blog"];?>"><img src="./img/edit.png" style="width: 32px; height: auto;"></a> <a href="../admin/quan_tri_blog_xoa.php?id=<?php echo $row["id_blog"];?>"><img src="./img/delete.png" style="width: 32px; height: auto;"></a></td>
				</tr>
<?php 
}
;?>
			</table>
</div>
