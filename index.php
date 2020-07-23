<?php
ob_start();

include('dbcon.php');
$sequery="SELECT * FROM `user`";

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
  <link rel="stylesheet" type="text/css" href="style/index.css">
</head>

<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Index.php">Ornob Hotel</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="adminlogin.php">Admin</a></li>
      
    </ul>
  </div>
</nav>




<div class="container-fluid" style="background-image: url(img/6.jpg);">
  

	<div class="well">
<a href="Registration.php" class="btn btn-info" role="button" id="adm">User Registration</a>
<h1>Ornob Hotel</h1>
  </div>
<!-- image gallary -->
<div class="container">
  
  
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="img/h.jpg" target="_blank">
          <img src="img/h.jpg" style="width:100%">
          <div class="caption">
            <p>Fron Of Hotel</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="img/ac.jpg" target="_blank">
          <img src="img/ac.jpg" alt="Nature" style="width:100%">
          <div class="caption">
               <div class="navbar-header">
      <a class="navbar-brand" href="new.php">Ac Room</a>
    </div>
            <p>AC Room</p>

          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="img/non.jpg" target="_blank">
          <img src="img/non.jpg" style="width:100%">
          <div class="caption">
            <p>Non AC Room</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


<!-- List --> 

  <h3>List Of Active Guest</h3>
            
  <table class="table table-condensed">
    <thead>
      <tr>
      	<th>Serial</th>
        <th>Name</th>
        <th>Entry Date</th>
        <th>Room Number</th>
      </tr>
    </thead>
    <tbody>
 <?php $i=1;
    while($realdata=mysqli_fetch_array($store))
   {
 ?>
      <tr>
      	<?php $id=$realdata['serial'] ?>
      	<td><?php echo $i;?></td>
        <td><a href="Details.php?readid=<?php echo $id;?>"><?php echo $realdata['name'];?></a></td>
        <td><?php echo $realdata['date'];?></td>
        <td><?php echo $realdata['room_no'];?></td>
        <td>
            
          </td>
      </tr>
 <?php
   $i++;
   }
 ?>
    </tbody>
  </table>

    <h3> New list of new database table</h3>

    <table class="table table-condensed">
        <thead>
        <tr>
            <th>id</th>
            <th>am1</th>
            <th>nm2</th>

        </tr>
        </thead>
        <tbody>
        <?php $i=1;
        $sequery="SELECT * FROM `ac`";
        $store=mysqli_query($connect,$sequery);
        while($realdata=mysqli_fetch_array($store))
        {
            ?>
            <tr>
                <?php $id=$realdata['id'] ?>
                <td><?php echo $i;?></td>

                <td><?php echo $realdata['nm'];?></td>
                <td><?php echo $realdata['am'];?></td>
                <td>

                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
        </tbody>
    </table>

</div>




</body>
</html> 