<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Thông tin Sản phẩm</h2>
                        <a href="index.php?quanly=sanpham&ac=them" class="btn btn-success pull-right">Thêm mới</a>
                    </div>
                    <?php
                
                        
                    $sql = "SELECT * FROM product";
                    if($result = mysqli_query($connect, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Tên sản phẩm</th>";
                                        echo "<th>Loại sản phẩm</th>";
                                        echo "<th>Giá </th>";
                                        echo "<th>Hình ảnh</th>";
                                        echo "<th>Số lượng</th>";
                                        echo "<th>Số lượng mua</th>";
                                        echo "<th>Giảm giá</th>";
                                        echo "<th></th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    $catalog_id=$row['catalog_id'];
                                    $query_user="SELECT name FROM catalog WHERE id='$catalog_id' ";
                                    
                                 $result_catalog= mysqli_query($connect, $query_user);
                                 $row2=mysqli_fetch_array($result_catalog);
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row2[0] . "</td>";
                                        echo "<td>" . $row['price'] . "</td>";
                                        echo "<td>" . $row['image_link'] . "</td>";
                                        echo "<td>" . $row['number'] . "</td>";
                                        echo "<td>" . $row['number_buy'] . "</td>";
                                        echo "<td>" . $row['discount'] . "</td>";
                                          echo "<td>";
                                                                             
                                        echo "<a href='module/quanlysanpham/xuly.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'> <img src=\"../image/delete.png\" width=\"30\" height=\"30\" /></a>";
                                        echo "<a href='index.php?quanly=sanpham&ac=sua&id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'> <img src=\"../image/edit.png\" width=\"30\" height=\"30\" /></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
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
            </div>        
        </div>
    </div>