<?php
	include('../config.php');
	
	
	$tennhom=($_POST['tennhom']);
	$manhom=($_POST['manhom']);
	if(isset($_POST['them'])){
		$tennhom=($_POST['tennhom']);
		$manhom=($_POST['manhom']);
			//them
		$sql="insert into nhomhanghoa (manhom,tennhom) values ('$manhom','$tennhom')";
		mysql_query($sql) or die("Them du lieu that bai");
		header('location:../../index.php?quanly=quanlyloaibanh&ac=them&manhom='.$manhom);
	}
	
	
?>