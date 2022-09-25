<?php
	$sql = "select * from product where id='$_GET[id]' ";
	$row=mysqli_query($connect,$sql);
	$dong=mysqli_fetch_array($row);
 ?>
<div class="button_themsp">
<a  class="btn btn-primary" href="index.php?quanly=sanpham&ac=lietke">Liệt kê sp</a> 

</div>
<form action="module/quanlysanpham/xuly.php?id=<?php echo $dong['id'] ?>" method="post" enctype="multipart/form-data">

<div> 

  <div class="container input-group mb-3">
    <span class="col-3 input-group-text">Sửa thông tin sản phẩm</span>
  </div>
  <div class=" input-group mb-3">
    <span class="col-2 input-group-text">Tên sản phẫm</span>
   <input class="form-control" type="text" name="tensp" value="<?php echo $dong['name'] ?>">
  </div>
  <div class=" input-group mb-3">
    <span class="col-2 input-group-text">Giá sản phẩm</span>
    <input class="form-control" type="text" name="giasp" value="<?php echo $dong['price'] ?>">
  </div>
  <div class=" input-group mb-3">
    <span class="col-2 input-group-text">Hình ảnh</span>
  <input class="form-control" type="file" name="hinhanh" /><img src="modules/quanlysanpham/uploads/<?php echo $dong['image_link'] ?>" width="80" height="80">
  </div>
  <div class=" input-group mb-3">
    <span class="col-2 input-group-text">Số lượng </span>
    <input class="form-control" type="text" name="soluong" value="<?php echo $dong['number'] ?>">
  </div>
  <div class=" input-group mb-3">
    <span class="col-2 input-group-text">Đã bán</span>
    <input class="form-control" type="text" name="daban" value="<?php echo $dong['number_buy'] ?>"></span>
</div>
  <div class=" input-group mb-3">
    <span class="col-2 input-group-text">Giảm giá</span>
    <input class="form-control" name="giamgia" value="<?php echo $dong['discount'] ?>">
  </div>
 
  <div class=" input-group mb-3">
  <?php
  $sql_loaisp = "select * from catalog";
  $row_loaisp=mysqli_query($connect,$sql_loaisp);
  ?>
    <span class="col-2 input-group-text">Loại sản phẩm</span>
    <select class="form-select" name="loaisp">
     <?php
	while($dong_loaisp=mysqli_fetch_array($row_loaisp)){
		if($dong['catalog_id']==$dong_loaisp['id']){
	?>
    	<option selected="selected" value="<?php echo $dong_loaisp['id'] ?>"><?php echo $dong_loaisp['name'] ?></option>
        <?php
	}else{
		?>
       <option value="<?php echo $dong_loaisp['id'] ?>"><?php echo $dong_loaisp['name'] ?></option>
        <?php
	}
	}
		?>
    </select>
  </div>
  
  <div>
  <div align="center">
     
    <button class="btn btn-primary" type="submit" name="them" value="Sửa sản phẩm">Sửa sản phẩm</button>
    </div>
  </div>
</div>
</form>
