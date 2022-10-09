<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"
 media="screen" href="css/style.php">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Gym and life</title>
  <link rel="icon" href="image/favicon.ico">
</head>
<a href=""></a>
<body>
<div class="top-bar">
  <a href="/project01_04/login.php" ><button class="btn btn-success ">Đăng nhập</button></a>
  <a href="/project01_04/resister.php" ><button class="btn btn-success">Đăng ký</button></a>
 
</div>
<?php
        include('connectdb.php');
        include('part/header.php');
		include('part/menu.php');
		include('part/content.php');
    // include('module/quanlysanpham/them.php');
		
?>


</body>

</html>