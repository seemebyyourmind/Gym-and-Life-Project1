<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:../index1.php');
	}
?>
<div class="header">
    	<h3>ADMIN PAGE</h3>
    </div>
     <form class="logout" action="" method="post" enctype="multipart/form-data">
            <input  class="  btn btn-success "type="submit" name="logout" value="Đăng xuất" />
			
     </form>