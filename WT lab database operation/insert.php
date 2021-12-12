<?php
  include('connect.php');

  if(isset($_POST['submit'])){
    $grno=$_POST['grno'];
    $studname=$_POST['studname'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $mobno=$_POST['mobno'];

    $sql="insert into `perdata` (grno, studname, dob, address, mobno)
    values('$grno','$studname','$dob','$address','$mobno')";

    $result = mysqli_query($connect, $sql);
    if($result)
    {
      echo "Data inserted successfully";
    }
    else
    {
      die(mysqli_error($connect));
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="margin-top: 100px;">
  <div class="container">
    <form method="POST" action="insert.php">
      <div class="form-group">
        <label for="grno">GRNO</label>
        <input type="text" class="form-control" name="grno" placeholder="Enter GR Number" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="name">NAME</label>
        <input type="text" class="form-control" name="studname" placeholder="Enter Name" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="text" class="form-control" name="dob" placeholder="Enter DOB" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Enter Address" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="num">Mobile Number</label>
        <input type="text" class="form-control" name="mobno" placeholder="Enter Number" autocomplete="off">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>
