<div class="left">
	<?php
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else
	{
		$tam='';
	}if($tam=='them'){
		include('modules/quanlyloaibanh/them.php');
	
	}if($tam=='sua'){
		include('modules/quanlyloaibanh/sua.php');
		}
	?>	
    </div>
<div class="right">
<?php 
	include('modules/quanlyloaibanh/lietke.php');
?>
</div>