<div class="content">
    <?php
	if(isset($_GET['quanly'])){
		$tam=$_GET['quanly'];
	}else{
		$tam='';
	}if($tam=='quanlyloaibanh'){
		include('modules/quanlyloaibanh/main.php');
	}if($tam=='chitietthucuong'){
		include('modules/chitietthucuong/main.php');
	
	}if($tam=='quanlynhanvien'){
		include('modules/quanlynhanvien/main.php');
	}
	if($tam=='quanlykhachhang'){
		include('modules/quanlykhachhang/main.php');
	}
	
	?>
    </div>
<div class="clear"></div>