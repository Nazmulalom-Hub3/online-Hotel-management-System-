<?php
ob_start();

include('dbcon.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration for Room Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/registyle.css">
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

  

<div class="container-fluid">
  <div class="well" style="background-image: url('img/in1.jpg');"  >
    <h1>Ornob Hotel</h1>
    <h4>Registration for Room Booking</h4>
  </div>
  <?php
  if (isset($_POST['submitdoner']))
  {
    $sname=$_POST['sname'];
    $edate=$_POST['edate'];
    $sdetails=$_POST['sdetails'];
    $sphone=$_POST['sphone'];
    $saddress=$_POST['saddress'];

    $insertquery="INSERT INTO `user`(`name`, `date`, `details`, `phone`, `present_address`) VALUES ('$sname','$edate','$sdetails','$sphone','$saddress')";
    $insertitem=mysqli_query($connect,$insertquery);
    if ($insertitem==true) {
      header('location:index.php');
    }
  }    
  ?>          
  <form class="form-horizontal" action="#" method="post" style="background-image: url('img/in1.jpg'); color: #fff;">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"> Name :</label>
      <div class="col-sm-5">
        <input name="sname" type="text" class="form-control" id="name" placeholder="Enter your Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Entry Date :</label>
      <div class="col-sm-5">          
        <input name="edate" type="Date" class="form-control" id="edate" placeholder=" Select Date" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Room Details and Type</label>
      <div class="col-sm-5">          
        <input name="sdetails" type="text" class="form-control" id="Number" placeholder="Write details include AC/Non AC" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Contact Number</label>
      <div class="col-sm-5">          
        <input name="sphone" type="text" class="form-control" id="email" placeholder="Contact number" required>
      </div>
    </div>
     
     <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Address</label>
      <div class="col-sm-5">          
        <input name="saddress" type="text" class="form-control" id="address" placeholder=" Write your address" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="institute">Fax</label>
      <div class="col-sm-5">          
        <input name="saddress" type="text" class="form-control" id="Fax" placeholder=" Write your Fax " required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="institute">Discount</label>
      <div class="col-sm-5">          
        <input name="saddress" type="text" class="form-control" id="Discunt" placeholder=" Write your Discunt " required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button  name="submitdoner" type="submit" class="btn btn-success">Submit</button>
        <button type="submit" class="btn btn-danger">Cancel</button>
      </div>
    </div>

  </form>

</div>
</body>
</html>
