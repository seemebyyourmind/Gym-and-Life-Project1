<?php
	include('../connectdb.php');
	
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	// $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
	// $filename = $_FILES["hinhanh"]["name"];
	// $filetype = $_FILES["hinhanh"]["type"];
	// $filesize = $_FILES["hinhanh"]["size"];
	
	// Xác minh phần mở rộng tệp
	// $ext = pathinfo($filename, PATHINFO_EXTENSION);
	

	// Xác minh phần mở rộng tệp
	
	// 
	$tensp=$_POST['tensp'];
	$giasp=$_POST['giasp'];
	$giamgia=$_POST['giamgia'];
	$soluong=$_POST['soluong'];
	$daban=$_POST['daban'];
	$loaisp=$_POST['loaisp'];

	
	// $trang=$_GET['trang'];
	if(isset($_POST['them'])){
		if($_FILES["hinhanh"]['name']==''){
		$sql_them=("insert into product (name,catalog_id,price,image_link,number,number_buy,discount) value('$tensp','$loaisp','$giasp','no-image.jpg','$soluong','$daban','$giamgia')");
		mysqli_query($connect,$sql_them);
		header('location:../../index.php?quanly=sanpham&ac=lietke');
		}else{
			$hinhanh=$_FILES['hinhanh']['name'];
			$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
			// $check = getimagesize($hinhanh_tmp);
			if(getimagesize($hinhanh_tmp)!==false)  
			{move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		$sql_them=("insert into product (name,catalog_id,price,image_link,number,number_buy,discount) value('$tensp','$loaisp','$giasp','$hinhanh','$soluong','$daban','$giamgia')");
		mysqli_query($connect,$sql_them);
		header('location:../../index.php?quanly=sanpham&ac=lietke');
			}else{
		//them
		
		echo '<script language="javascript">';
		echo 'alert("File hình ảnh chưa đúng định dạng12")';
		echo '</script>';
		echo '<script language="javascript">';
		// echo 'alert("File hình ảnh chưa đúng định dạng")';
		echo 'history.back();';
		echo '</script>';
		
		// ;
	}}
}
	 
	elseif(isset($_POST['sua'])){
		if(($_FILES["hinhanh"]['name']=='')){
			$sql_sua = "update product set name='$tensp', price='$giasp',discount='$giamgia',number='$soluong',catalog_id='$loaisp',number_buy='$daban' where id='$_GET[id]'";
			mysqli_query($connect,$sql_sua);
		
			header('location:../../index.php?quanly=sanpham&ac=lietke');}
		else{
		$hinhanh=$_FILES['hinhanh']['name'];
		$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
		
			if(getimagesize($hinhanh_tmp)!==false){
			$sql_sua = "update product set name='$tensp', price='$giasp',image_link='$hinhanh',discount='$giamgia',number='$soluong',catalog_id='$loaisp',number_buy='$daban' where id='$_GET[id]'";
			mysqli_query($connect,$sql_sua);
		}
		else{ 
			echo '<script language="javascript">';
			echo 'alert("File hình ảnh chưa đúng định dạng 11")';
			echo '</script>';
			echo '<script language="javascript">';
			
			echo 'history.back();';
			echo '</script>';
			}
			
		
			header('location:../../index.php?quanly=sanpham&ac=lietke');}
	
		}
	else{
		$sql_xoa = "delete from product where id = $_GET[id]";
		mysqli_query($connect,$sql_xoa);
		header('location:../../index.php?quanly=sanpham&ac=lietke');
	}
?>
