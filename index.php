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

<body>
<div class="top-bar">
  <button class="login">Đăng nhập</button>
  <button class="sign-up">Đăng ký</button>
</div>
  
<?php

?>
  <!-- <img src="image/portrait-young-sportive-girl-training-with-dumbbells-isolated-blue-background-neon.jpg" alt="Gym-image"> -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="image/android-chrome-192x192.png" alt=""width="60" height="60" class="d-inline-block align-text-top">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href="#">Khuyến mãi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="#">Cho bé</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="#">Đồ tập gym</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="#">Đồ bơi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="#">Các môn thể thao khác</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cho Nữ
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled fs-5">Dụng cụ bơi</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 fs-5" type="search" placeholder="Tìm kiếm" aria-label="Search">
          <button class="btn btn-outline-success fs-5" type="submit">se</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Đăng nhập   -->
  <div id="login" style="height:1000px;">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="logincheck.php" method="POST">
                            <h3 class="text-center text-info">Đăng nhập </h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Tên Đăng Nhập :</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mật Khẩu:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type='submit' class="btn btn-info btn-md" name="login" value="đăng nhập" >Đăng Nhập</button>
                                
                            
                                <a href="#" class="text-info text-end forget_password" style="text-decoration:none;">Quên mật khẩu ?</a>
                                
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tạo tài khoản  -->
    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class=" order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Họ và tên khách hàng:</label>
                      <input type="text" id="form3Example1c" class="form-control" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Email:</label>
                      <input type="email" id="form3Example3c" class="form-control" />
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Số Điện thoại:</label>
                      <input type="email" id="form3Example3c" class="form-control" />
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Địa chỉ:</label>
                      <input type="email" id="form3Example3c" class="form-control" />
                      
                    </div>
                  </div>
                
                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Mật khẩu:</label>
                      <input type="password" id="form3Example4c" class="form-control" />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Nhắc lại mật khẩu:</label>
                    <input type="password" id="form3Example4cd" class="form-control" />
                      
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                     Tôi đồng ý với tất cả  <a href="#!">Điều khoản và điều kiện.</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg btn-block">Tạo tài khoản</button>
                  </div>

                </form>

              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</body>

</html>
