<?php

$host="localhost";
$user="root";
$pass="";
$db="ahotel";
$connect=mysqli_connect($host,$user,$pass,$db);
if(!$connect)
{
		die("not possible".mysqli_connect_error());

}


?>