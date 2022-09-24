<?php
 
session_start();

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập

if (isset($_POST['resister']))
{
//Kết nối tới database
include('connectdb.php');
  
//Lấy dữ liệu nhập vào
$name   = addslashes($_POST['name']);
$email  = addslashes($_POST['email']);
$phone  = addslashes($_POST['phone']);
$address  = addslashes($_POST['address']);
$password = addslashes($_POST['password']);
$password1 = addslashes($_POST['password1']);


//Kiểm tra đã nhập đủ thông tin chưa
if (!$name || !$password|| !$email|| !$phone|| !$address|| !$password1) {

    echo '<script language="javascript">';
    echo 'alert("Bạn chưa nhập đủ thông tin.Vui lòng nhập lại!")';
    echo '</script>';
    require 'resister.php';
exit;
}
if($password!=$password1){
    echo '<script language="javascript">';
    echo 'alert("Mật khẩu chưa trùng khớp")';
    echo '</script>';
    require 'resister.php';
exit;
}

$password=md5($password);
//Kiểm tra email và số điện thoại có trùng không 
$query_email = "SELECT email FROM user WHERE email='$email' ";
$result_email = mysqli_query($connect, $query_email);
$query_phone="SELECT phone FROM user WHERE phone='$phone'";
$result_phone= mysqli_query($connect, $query_phone);


if(mysqli_num_rows($result_email)>0){
    echo '<script language="javascript">';
    echo 'alert("Email đã được sử dụng")';
    echo '</script>';
    require 'resister.php';
exit;
}

if(mysqli_num_rows($result_phone)>0){
    echo '<script language="javascript">';
    echo 'alert("Số điện thoại đã được sử dụng!")';
    echo '</script>';
    require 'resister.php';
exit;}

// đăng ký thông tin vào database
$query_resister = "INSERT INTO user (name,email,password,address,phone) VALUE ('{$name}','{$email}','{$password}','{$address}','{$phone}')";
$result_resister = mysqli_query($connect, $query_resister);
if($result_resister){
    echo '<script language="javascript">';
    echo 'alert("Đăng ký thành công mời đăng nhập")';
    echo '</script>';
    // header("Location:/project01_04/login.php");
    require 'login.php';
 mysqli_close($connect);

}}
?>
