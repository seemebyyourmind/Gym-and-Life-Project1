<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Thông tin Người dùng</h2>
                        <!-- <a href="index.php?quanly=taikhoan&ac=them" class="btn btn-success pull-right">Thêm mới</a> -->
                    </div>
                    <?php
                
                        
                    $sql = "SELECT * FROM user";
                    if($result = mysqli_query($connect, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>Họ và tên</th>";
                                        echo "<th>Email</th>";
                                       
                                        echo "<th>Địa chỉ</th>";
                                        echo "<th>Số điện thoại</th>";
                                        echo "<th></th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>";
                                            
                                        
                                        echo "<a href='module/quanlytaikhoan/xuly.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'> <img src=\"../image/delete.png\" width=\"30\" height=\"30\" /></a>";
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