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

echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Đăng nhập lại</a>";
exit;
}

//Kiểm tra tên đăng nhập có tồn tại không
$query_admin = "SELECT username, password FROM admin WHERE username='$username' and password='$password'";
$result_admin = mysqli_query($connect, $query_admin);
$query_user="SELECT phone, password FROM user WHERE phone='$username' and password='$password'";
$result_user= mysqli_query($connect, $query_user);



if(mysqli_num_rows($result_admin)>0){
    //echo "đăng nhập thành công với tài khoản admin ";
    
    //lấy thông tin tên admin và id vào session
    $query_admin = "SELECT username, password FROM admin WHERE username='$username' and password='$password'";
    $result_admin = mysqli_query($connect, $query_admin);
    $row=mysqli_fetch_array($result_admin,MYSQLI_NUM);
    $_SESSION['admin_name'] = $row[0];
    $_SESSION['admin_id'] = $row[1];
    //echo $_SESSION['admin_name'];
    //echo $_SESSION['admin_id'];
    header("Location: /project1/html/admin.php");
   }elseif (mysqli_num_rows($result_user)>0) {
    //echo "đăng nhập thành công với tài khoản quản lý nhân viên ";
    
    //lấy thông tin cán bộ y tế bào session
    $query_user="SELECT phone, password FROM user WHERE phone='$username' and password='$password'";
    $result_user= mysqli_query($connect, $query_user);
    $row=mysqli_fetch_array($result_user,MYSQLI_NUM);
    $_SESSION['user_name'] = $row[0];
    
    //echo $_SESSION['stuff_name'];
 
    header("Location: /project1/html/medicalstaff.php");
   }
    else{
        echo"tên đăng nhập và mật khẩu sai. Vui lòng đăng nhập lại. <a href='javascript: history.go(-1)'>Đăng nhập lại</a>";
     
        
    }
        mysqli_close($connect);
}
?>
