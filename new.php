1
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
    <h4>Hotel description</h4>
      <p/>Our hotel name is Ornob hotel.This is a five star hotel that has two type of room Ac room and non Ac room.This is suitable for all user. </p>
  </div>
  <?php
  if (isset($_POST['submitdoner']))
  {
      $rmt=$_POST['rmt'];
      $bel=$_POST['bel'];



      $insertquery="INSERT INTO `ac`( `nm`, `am`) VALUES ('$rmt','$bel')";
      $insertitem=mysqli_query($connect,$insertquery);
      if ($insertitem==true) {
          header('location:new.php');
      }
  }
  ?>
  <form class="form-horizontal" action="#" method="post" style="background-image: url('img/in1.jpg'); color: #fff;">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name"> Room Type :</label>
      <div class="col-sm-5">
        <input name="rmt" type="text" class="form-control" id="name" placeholder="choice your " required>
      </div>
    </div>


     <div class="form-group">
      <label class="control-label col-sm-2" for="institute">With Belkuni</label>
      <div class="col-sm-5">
        <input name="bel" type="text" class="form-control" id="address" placeholder=" if belkuni enter yes" required>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button  name="submitdoner" type="submit" class="btn btn-success">Submit</button>
        <button type="submit" class="btn btn-danger">Cancel</button>
      </div>
    </div>

  </form>

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
