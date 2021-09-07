
<table width="100%" border="1">
  <tr>
    <td>STT</td>
    <td>Mã nhân viên</td>
    <td>Họ tên</td>
    <td>Chức vụ</td>
    <td>Địa chỉ</td>
    <td>SĐT</td>
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php
  
  $sql="select * from nhanvien";

  $result= mysql_query($sql);
  if(mysql_num_rows($result)>0){
    $i=0;
    while($dong=mysql_fetch_assoc($result)){
      $i++;
      $msnv=$dong['msnv'];
      $hotennv=$dong['hotennv'];
      $chucvu=$dong['chucvu'];
      $diachi=$dong['diachi'];
      $sodienthoai=$dong['sodienthoai'];
      echo"<tr>";
      echo "<td>$i</td>";
      echo "<td>$mskh</td>";
      echo "<td>$hotenkh</td>";
      echo "<td>$chucvu</td>";
      echo "<td>$diachi</td>";
      echo "<td>$sodienthoai</td>";
      
      echo "<td><a href='modules/quanlynhanvien/xulyxoa.php?id=$msnv'>Xóa</a> |<a href='modules/quanlynhanvien/xulysua.php?id=$msnv'>Sửa</a> ";
  	 
    }
  }
  ?>
</table>