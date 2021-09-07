<?php
include('../config.php');
	$sql="select * from nhomhanghoa where manhom=$_GET['id']";
	$run=mysql_query($sql);
	$dong=mysql_fetch_assoc($run);
?>
<form action="modules/quanlyloaibanh/xulysua.php?manhom=<?php echo $manhom ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa loại bánh</div></td>
  </tr>
  <tr>
    <td>Mã loại bánh</td>
    <td><input type="text" name="manhom" value="<?php echo $dong['manhom'] ?>"></td>
  </tr>
  <tr>
    <td>Tên loại bánh</td>
    <td><input type="text" name="tennhom" value="<?php echo $dong['tennhom'] ?>"></td>
  </tr>
  
  
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="sua" id="sua" value="Sửa">
      </div>
    </td>
  </tr>
</table>
</form> 