<?php
	include('../connectdb.php');
	$tensp=$_POST['tensp'];
	
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	$giasp=$_POST['giasp'];
	$giamgia=$_POST['giamgia'];
	$soluong=$_POST['soluong'];
	$daban=$_POST['daban'];
	$loaisp=$_POST['loaisp'];
	
	// $trang=$_GET['trang'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them=("insert into product (name,catalog_id,price,image_link,number,number_buy,discount) value('$tensp','$loaisp','$giasp','$hinhanh','$soluong','$daban','$giamgia')");
		mysqli_query($connect,$sql_them);
		header('location:../../index.php?quanly=sanpham&ac=lietke');
	}
	elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
	  $sql_sua = "update product set name='$tensp',image_link='$hinhanh',price='$giasp',discount='$giamgia',number='$soluong',catalog_id='$loaisp',number_buy='$daban' where id='$_GET[id]'";
		}else{
			$sql_sua = "update product set name='$tensp',price='$giasp',discount='$giamgia',number='$soluong',catalog_id='$loaisp',number_buy='$daban' where id='$_GET[id]'";
		}
		mysqli_query($connect,$sql_sua);
		
		header('location:../../index.php?quanly=sanpham&ac=lietke');
	}else{
		$sql_xoa = "delete from product where id = $_GET[id]";
		mysqli_query($connect,$sql_xoa);
		header('location:../../index.php?quanly=sanpham&ac=lietke');
	}
?>
