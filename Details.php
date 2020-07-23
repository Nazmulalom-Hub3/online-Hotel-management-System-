 <?php
include('dbcon.php');
$singledata=$_GET['readid'];
$sequery="SELECT * FROM `user` where `serial`=$singledata ";
$store=mysqli_query($connect,$sequery);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Index.php">Ornob Hotel</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="index.php">Home</a></li>
      <li><a href="adminlogin.php">Admin</a></li>
      
    </ul>
  </div>
</nav>
  

<div class="container-fluid" style="background-image: url(img/in1.jpg);">
	<?php $realdata=mysqli_fetch_array($store)?>
  <div class="panel panel-primary" >
  	<div class="panel-heading" style="background-image: url(img/in1.jpg);"><h1><?php echo $realdata['name']?>  Addresss</h1></div>
  	<div class="panel-body" style="background-image: url(img/6.jpg);">
  		<b>Name----: </b><?php echo $realdata['name'];?><br>
  		<b>Entry Date-----: </b><?php echo $realdata['date'];?><br>
      <b>Room Number------: </b><?php echo  $realdata['room_no'];?><br>
  		<b>Room Details------: </b><?php echo  $realdata['details'];?><br>
  		<b>Contact Number------: </b><?php echo  $realdata['phone'];?><br>
  		<b>Adress------: </b><?php echo  $realdata['present_address'];?><br>

  	</div>

  </div>
  
</div>

</body>
</html> 