<?php
	include('../connectdb.php');
	
		$sql_xoa = "delete from user where id = $_GET[id]";
		mysqli_query($connect,$sql_xoa);
		header('location:../../index.php?quanly=nguoidung&ac=lietke');
	
?>
