<?php
	include('../config.php');
	
	
	
	if (isset($_GET['id'])) {
		$mskh=($_GET['id']);
	
	//xoa
		$sql = "delete from khachhang where mskh='$mskh'" ;
		mysql_query($sql) or die('Xóa thất bại!');
	header('location:../../index.php?quanly=quanlykhachhang&ac=them&mskh='.$mskh);
}
?>