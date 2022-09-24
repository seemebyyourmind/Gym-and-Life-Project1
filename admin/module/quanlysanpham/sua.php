<?php
	$sql = "select * from product where id='$_GET[id]' ";
	$row=mysqli_query($connect,$sql);
	$dong=mysqli_fetch_array($row);
 ?>
<div class="button_themsp">
<a href="index.php?quanly=sanpham&ac=lietke">Liệt kê sp</a> 
</div>
<form action="module/quanlysanpham/xuly.php?id=<?php echo $dong['id'] ?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1"> 

  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Sửa thông tin sản phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên sản phẫm</td>
    <td width="87"><input type="text" name="tensp" value="<?php echo $dong['name'] ?>"></td>
  </tr>
  <tr>
    <td>Giá sản phẩm</td>
    <td><input type="text" name="giasp" value="<?php echo $dong['price'] ?>"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh" /><img src="modules/quanlysanpham/uploads/<?php echo $dong['image_link'] ?>" width="80" height="80"></td>
  </tr>
  <tr>
    <td>Số lượng </td>
    <td><input type="text" name="soluong" value="<?php echo $dong['number'] ?>"></td>
  </tr>
  <tr>
    <td>Đã bán</td>
    <td><input type="text" name="daban" value="<?php echo $dong['number_buy'] ?>"></td>
  </tr>
  <tr>
    <td>Giảm giá</td>
    <td><textarea name="giamgia" cols="40" rows="10"><?php echo $dong['discount'] ?></textarea></td>
  </tr>
 
  <tr>
  <?php
  $sql_loaisp = "select * from catalog";
  $row_loaisp=mysqli_query($connect,$sql_loaisp);
  ?>
    <td>Loại sản phẩm</td>
    <td><select name="loaisp">
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
    </select></td>
  </tr>
  
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa sản phẩm">
    </div></td>
  </tr>
</table>
</form>
