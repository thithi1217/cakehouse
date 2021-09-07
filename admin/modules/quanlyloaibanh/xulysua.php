<?php
	include('../config.php');

	if(isset($_POST['sua'])){
		$manhom=($_GET['id']);
		$tennhom=($_POST['tennhom']);
		// sua
		$sql="update nhomhanghoa set tennhom='$tennhom',manhom='$manhom' where manhom='$manhom'";
		mysql_query($sql); 
		
		header('location:../../index.php?quanly=quanlyloaibanh&ac=sua&manhom='.$manhom);
		
	}
?>