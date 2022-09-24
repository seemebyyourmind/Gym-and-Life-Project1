<div class="content">
    	<div class="box_contains">
        	<?php
				if(isset($_GET['quanly'])&&$_GET['ac']){
					$tam=$_GET['quanly'];
					$tam1=$_GET['ac'];
					}else{
						$tam='';
					}if(($tam == 'nguoidung')&&($tam1 == 'lietke')){
						include('module/quanlytaikhoan/lietke.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'lietke')){
						
						include('module/quanlysanpham/lietke.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'them')){
						
						include('module/quanlysanpham/them.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'lietke')){
						
						include('module/quanlysanpham/lietke.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'sua')){
						
						include('module/quanlysanpham/sua.php');
					}
					elseif(($tam == 'hieusp')&&($tam1 == 'them')){
						
					
					// }
					// else{
					// 	include('module/quanlysanpham/lietke.php');
					}
			?>
        
        </div>
    </div>
    <div class="clear"></div>