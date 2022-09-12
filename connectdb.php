<?php //
$host="localhost";
$user="root";
$password="";
$db="project01_04";

$connect = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());

}
?>