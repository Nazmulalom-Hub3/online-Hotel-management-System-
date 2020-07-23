<?php
ob_start();
include('dbcon.php');
$updateid=$_GET['updateid'];
$sequery="select * from user where serial=$updateid";
$store=mysqli_query($connect,$sequery);
$storeddata=mysqli_fetch_array($store);
$dbroom=$storeddata['room_no'];


?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Room No Add</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/registyle.css">
</head>
<body>


<div class="container-fluid">
  <div class="well" style="background-image: url('img/Blood1.jpg');">
    <h2>Edit Donar Information</h2>
  </div>
  <?php
  if (isset($_POST['updater']))
  {
    $sroom=$_POST['sroom'];
   
    $updatequery="UPDATE `user` SET `room_no`='$sroom' WHERE serial=$updateid ";
    
    $updateitem=mysqli_query($connect,$updatequery);
    if ($updateitem==true) {
      header('location:admin.php');
    }
    else
    {
      die("Not Possible Coz".mysqli_error($connect));
    }
  }    
  ?>          
  <form class="form-horizontal" action="#" method="post" style="background-image: url('img/Blood1.jpg'); color: #fff;">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"> Room Number :</label>
      <div class="col-sm-5">
        <input name="sroom" type="text" class="form-control" id="name" value="<?php echo $dbroom ?>">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button  name="updater" type="submit" class="btn btn-success">Update</button>
        <button type="reset" class="btn btn-danger">Cancle</button>

      </div>
    </div>

  </form>

</div>
</body>
</html>
