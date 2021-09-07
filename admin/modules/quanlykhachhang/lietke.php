
<table width="100%" border="1">
  <tr>
    <td>STT</td>
    <td>Mã khách hàng</td>
    <td>Họ tên</td>
    <td>Địa chỉ</td>
    <td>SĐT</td>
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php
  
  $sql="select * from khachhang";

  $result= mysql_query($sql);
  if(mysql_num_rows($result)>0){
    $i=0;
    while($dong=mysql_fetch_assoc($result)){
      $i++;
      $mskh=$dong['mskh'];
      $hotenkh=$dong['hotenkh'];
      $diachi=$dong['diachi'];
      $sodienthoai=$dong['sodienthoai'];
      echo"<tr>";
      echo "<td>$i</td>";
      echo "<td>$mskh</td>";
      echo "<td>$hotenkh</td>";
      echo "<td>$diachi</td>";
      echo "<td>$sodienthoai</td>";
      
      echo "<td><a href='modules/quanlykhachhang/xulyxoa.php?id=$mskh'>Xóa</a> |<a href='modules/quanlykhachhang/xulysua.php?id=$mskh'>Sửa</a> ";
  	 
    }
  }
  ?>
</table>