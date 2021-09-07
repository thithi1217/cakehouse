<?php
	include('../config.php');
	
	
	
	if (isset($_GET['id'])) {
		$manhom=($_GET['id']);
	
	//xoa
		$sql = "delete from nhomhanghoa where manhom='$manhom'" ;
		mysql_query($sql) or die('Xóa thất bại!');
	header('location:../../index.php?quanly=quanlyloaibanh&ac=them&manhom='.$manhom);
}
?>