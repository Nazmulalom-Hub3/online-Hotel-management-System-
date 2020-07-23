<?php
ob_start();
include('dbcon.php');
$singledata=$_GET['delid'];
$sequery="delete from user where serial=$singledata";
$store=mysqli_query($connect,$sequery);
if ($store==true) {
	header('location:admin.php');
	echo "Record deleted successfully";
}
?>