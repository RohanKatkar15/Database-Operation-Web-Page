<?php
include'connect.php';
?>
<!DOCTYPE html>
<html>
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
<body>
<div class="container">
  <button class="btn btn-primary my-5"><a href="insert.php" class="text-light">New Record</a></button>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">SI No.</th>
      <th scope="col">GRNO</th>
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile no.</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="SELECT *from `perdata`";
  $result=mysqli_query($connect,$sql);
  if($result)
  {
    while($row=mysqli_fetch_assoc($result)){
      $sr=$row['sr'];
      $grno=$row['grno'];
      $studname=$row['studname'];
      $dob=$row['dob'];
      $address=$row['address'];
      $mobno=$row['mobno'];
      echo'<tr>
      <th scope="row">'.$sr.'</th>
      <td>'.$grno.'</td>
      <td>'.$studname.'</td>
      <td>'.$dob.'</td>
      <td>'.$address.'</td>
      <td>'.$mobno.'</td>
      <td>
      <td>
      <tr>';
    }
  }
  ?>
</table>
</div>
</body>
</html>