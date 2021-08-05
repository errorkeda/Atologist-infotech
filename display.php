<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>Upload File in Database</h4>
</div><br><br> 

<div class="container">
  <h2>View Records
    <a href="insert.php" class="btn btn-primary" style="float:right;">Add New Record</a>
  </h2>
    <table class="table table-hover">
      <thead class="bg-dark" style="color:white">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>password</th>
          <th>Type</th>
          <th>User Type</th>
          <th>Profile Image</th>
          <th>Created Date</th>
          <th></th>
        </tr>
      </thead>
    <tbody>
      <?php 
     // error_reporting(0);
      // Include database file
      include 'user.php';

      $customerObj = new User();
      $customers = $customerObj->DisplayData(); 

      print_r($customers);
      exit();

      foreach ($customers as $customer) {
       
      ?>
        <tr>
          <td><?php echo $customer['S.no']; ?></td>
          <td><?php echo $customer['username']; ?></td>
          <td><?php echo $customer['password']; ?></td>
          <td><img src="<?php echo $customer["image"] ?>" width="180px"></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>