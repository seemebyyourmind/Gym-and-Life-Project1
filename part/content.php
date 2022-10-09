<div class="content">
    	<div class="box_contains">
        	<?php
				if(isset($_GET['loaisp'])){
					$loaisp=$_GET['loaisp'];
				if($loaisp==''){}
                elseif($loaisp=='quannu'){
                include('part/quannu.php');
                }
                elseif($loaisp=='aonu'){
                    include('part/aonu.php');
                }
                elseif($loaisp=='quannam'){
                    include('part/quannam.php');
                }
                elseif($loaisp=='aonam'){
                    include('part/aonam.php');
                }
                elseif($loaisp=='doboi'){
                    include('part/doboi.php');
                }
                elseif($loaisp=='chobe'){
                    include('chobe.php');
                }
                elseif($loaisp=='dungcu'){
                    include('dungcutapluyen.php');
                }
                elseif($loaisp==''){

                }
					
						
					
					// }
					// else{
					// 	include('module/quanlysanpham/lietke.php');
					}
			?>
        
        </div>
    </div>
    <div class="clear"></div>