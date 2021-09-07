<?php
 $servername='localhost';
 $username='root';
 $password='';
 $database='quanlybanhang';
 $conn= mysql_connect($servername,$username,$password) or die ('KO kết nối được');
 mysql_select_db($database,$conn);
?>