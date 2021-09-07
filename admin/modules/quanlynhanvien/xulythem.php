<?php
	include('../config.php');
	
	$diachi=($_POST['diachi']);
	$sodienthoai=($_POST['sodienthoai']);
	$hotenkh=($_POST['hotenkh']);
	$mskh=($_POST['mskh']);
	if(isset($_POST['them'])){
		$hotenkh=($_POST['hotenkh']);
		$mskh=($_POST['mskh']);
		$diachi=($_POST['diachi']);
		$sodienthoai=($_POST['sodienthoai']);
			//them
		$sql="insert into khachhang (mskh,hotenkh,diachi,sodienthoai) values ('$mskh','$hotenkh','$diachi','$sodienthoai')";
		mysql_query($sql) or die("Them du lieu that bai");
		header('location:../../index.php?quanly=quanlykhachhang&ac=them&mskh='.$mskh);
	}
	
	
?>