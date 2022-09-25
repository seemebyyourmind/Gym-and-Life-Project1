<div class="button_themsp">

<!-- <a href="index.php?quanly=sanpham&ac=lietke">Liệt kê sp</a>  -->
</div>
<form action="module/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<div border="1">
  <div class="container input-group mb-3">
    <span class="input-group-text" colspan="2" style="text-align:center;font-size:25px;">Thêm  sản phẩm</span>
  </div>
  <div class=" input-group mb-3">
    <span class="col-2 input-group-text">Tên sản phẫm</span>
    <input  class="form-control" type="text" name="tensp">
  </div>
  <div class="input-group mb-3">
    <span class=" col-2 input-group-text">Hình ảnh</span>
    <input class="form-control" type="file" name="hinhanh" />
  </div>
  <div class="input-group mb-3">
    <span class="col-2 input-group-text">Giá sản phẩm</span>
    <input class="form-control" type="text" name="giasp">
  </div>
   <div class="input-group mb-3">
    <span class="col-2 input-group-text">Giảm giá</span>
    <input class="form-control" type="text" name="giamgia">
  </div>
  <div class="input-group mb-3">
    <span class="col-2 input-group-text">Số lượng</span>
  <input class="form-control" type="text" name="soluong">
  </div>
  <div class="input-group mb-3">
    <span class="col-2 input-group-text">Đã bán</span>
   <input class="form-control" value="0" name="daban">
  </div>
  <!-- <div>
    <span>Số lượng</span>
    <span><input type="text" name="soluong"></span>
  </div> -->
  <div class="input-group mb-3 lg-6">
  <?php

  $sql_loaisp = "select id,name from catalog";
  $row_loaisp=mysqli_query($connect,$sql_loaisp);
  ?>
    <span class="col-2 input-group-text">Loại sản phẩm</span>
    <select class="form-select" name="loaisp">
    
    <?php
	while($dong_loaisp=mysqli_fetch_array($row_loaisp)){
	?>
    	<option  value="<?php echo $dong_loaisp['id'] ?>"><?php echo $dong_loaisp['name'] ?></option>
        <?php
	}
		?>
    </select>
  </div>
  
  <div>
    <div >
    <button class="btn btn-primary" type="submit" name="them" value="Thêm sản phẩm">Thêm sản phẩm</button>
      <!-- <button class="btn btn-primary" type="submit" name="them" value="Thêm sản phẩm"> -->
    </div>
  </div>
</div>
</form>

