
<?php
ob_start();
include('dbcon.php');
$sequery="SELECT * FROM `user`";
$store=mysqli_query($connect,$sequery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ornob Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/bloodstyle.css">
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



 
  <table class="table table-condensed" style="background-image: url(img/6.jpg);">
    <thead>
      <tr>
      	<th>Serial</th>
        <th>Name</th>
        <th>Entry Date</th>
        <th>Room Details</th>
        <th>Room Number</th>
        <th>Contact Number</th>
        <th>Adress</th>
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
        <td><?php echo $realdata['details'];?></td>
        <td><?php echo $realdata['room_no'];?></td>
        <td><?php echo  $realdata['phone'];?></td>
        <td><?php echo  $realdata['present_address'];?></td>

        <td>
           <a href="room.php?updateid=<?php echo $id ?>" class="btn btn-success" target="_blank">Enter Room Number</a>
            <a href="delete.php?delid=<?php echo $id ?>" class="btn btn-defult">Delete</a>
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