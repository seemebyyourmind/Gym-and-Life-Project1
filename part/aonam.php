<div class="row row-cols-1 row-cols-md-3 g-4">
    
<?php
           
                        
                $sql = "SELECT * FROM product WHERE catalog_id='5'";
                if($result = mysqli_query($connect, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        
                         while($row = mysqli_fetch_array($result)){
                            
                            
                                echo "<div class=\"col\">";
                                echo " <div class=\"card h-100\">";
                                echo"<img src=\"admin/module/quanlysanpham/uploads/". $row['image_link']."\" alt=\"\" style=\"width:60px;height:60px;\">"  ;
                                echo "<div class=\"card-body\">";
                               echo"<h5 class=\"card-title\">".$row['name']."</h5>" ;
                               echo"<p class=\"card-text\">Số lượng: ".$row['number']."chiếc</p>";
                               echo"<p class=\"card-text\">Đã bán: ".$row['number_buy']. " chiếc</p>";
                                
                                echo"<h3 class=\"card-text\">".$row['price']." Đồng</h3>";
                                echo"<h4 class=\"card-text\">Giảm giá ".$row['discount']."%</h4>";
                                echo"</div>";

                                echo"<div class=\"card-footer\">";

                                echo"<button class=\"btn btn-primary\" type=\"submit\">Button</button>";

                                echo"</div>";
                                echo"</div>";
                                echo"  </div>";



                               
                            }
                         
                        // Giải phóng bộ nhớ
                        mysqli_free_result($result);
                    } else{
                    }
                } else{
                    echo "ERROR: Không thể thực thi $sql. " . mysqli_error($connect);
                }

                // Đóng kết nối
                
                ?>

</div>




                        
                        
                    
                   