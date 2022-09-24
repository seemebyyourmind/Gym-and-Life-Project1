<div class="button_themsp">

<!-- <a href="index.php?quanly=sanpham&ac=lietke">Liệt kê sp</a>  -->
</div>
<form action="module/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1">
  <tr>
    <td colspan="2" style="text-align:center;font-size:25px;">Thêm  sản phẩm</td>
  </tr>
  <tr>
    <td width="97">Tên sản phẫm</td>
    <td width="87"><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh" /></td>
  </tr>
  <tr>
    <td>Giá sản phẩm</td>
    <td><input type="text" name="giasp"></td>
  </tr>
  
  <tr>
    <td>Giảm giá</td>
    <td><input type="text" name="giamgia"></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr>
  <tr>
    <td>Đã bán</td>
    <td><input  value="0" name="daban"></td>
  </tr>
  <!-- <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"></td>
  </tr> -->
  <tr>
  <?php

  $sql_loaisp = "select id,name from catalog";
  $row_loaisp=mysqli_query($connect,$sql_loaisp);
  ?>
    <td>Loại sản phẩm</td>
    <td><select name="loaisp">
    <?php
	while($dong_loaisp=mysqli_fetch_array($row_loaisp)){
	?>
    	<option value="<?php echo $dong_loaisp['id'] ?>"><?php echo $dong_loaisp['name'] ?></option>
        <?php
	}
		?>
    </select></td>
  </tr>
  
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm sản phẩm">
    </div></td>
  </tr>
</table>
</form>
