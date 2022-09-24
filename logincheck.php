<?php
 
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập

if (isset($_POST['login']))
{
//Kết nối tới database
include('connectdb.php');
  
//Lấy dữ liệu nhập vào
$username = $_POST['username'];
$password = $_POST['password'];
  
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (!$username || !$password) {

    echo '<script language="javascript">';
    echo 'alert("Bạn chưa nhập đủ thông tin")';
    echo '</script>';
    require 'login.php';
exit;
}
$password1=md5($password);
//Kiểm tra tên đăng nhập có tồn tại không
$query_admin = "SELECT username, password FROM admin WHERE username='$username' and password='$password1'";
$result_admin = mysqli_query($connect, $query_admin);
$query_user="SELECT phone, password FROM user WHERE phone='$username' and password='$password1'";
$result_user= mysqli_query($connect, $query_user);



if(mysqli_num_rows($result_admin)>0){
  
    
    $query_admin = "SELECT username, password FROM admin WHERE username='$username' and password='$password1'";
    $result_admin = mysqli_query($connect, $query_admin);
    $row=mysqli_fetch_array($result_admin,MYSQLI_NUM);
    $_SESSION['admin_name'] = $row[0];
    
    //echo $_SESSION['admin_name'];
    //echo $_SESSION['admin_id'];
     header("Location:/project01_04/admin/index.php");
   }elseif (mysqli_num_rows($result_user)>0) {
    
    
   
    $query_user="SELECT phone, password FROM user WHERE phone='$username' and password='$password1'";
    $result_user= mysqli_query($connect, $query_user);
    $row=mysqli_fetch_array($result_user,MYSQLI_NUM);
    $_SESSION['user_name'] = $row[0];
    
  
 
    header("Location: /project01_04/main_user.php");
   }
    else{
        echo '<script language="javascript">';
        echo 'alert("Sai thông tin đăng nhập")';
        echo '</script>';
        require 'login.php';
        
    }
        mysqli_close($connect);
}
?>
