
<table width="100%" border="1">
  <tr>
    <td>STT</td>
    <td>Mã nhóm</td>
    <td>Tên loại bánh</td>
    
    <td colspan="2">Quản Lý</td>
  </tr>
  <?php
  
  $sql="select * from nhomhanghoa";

  $result= mysql_query($sql);
  if(mysql_num_rows($result)>0){
    $i=0;
    while($dong=mysql_fetch_assoc($result)){
      $i++;
      $manhom=$dong['manhom'];
      $tennhom=$dong['tennhom'];
      echo"<tr>";
      echo "<td>$i</td>";
      echo "<td>$manhom</td>";
      echo "<td>$tennhom</td>";
      echo "<td><a href='modules/quanlyloaibanh/xulyxoa.php?id=$manhom'>Xóa</a> |<a href='modules/quanlyloaibanh/xulysua.php?id=$manhom'>Sửa</a> ";
  	 
    }
  }
  ?>
</table>