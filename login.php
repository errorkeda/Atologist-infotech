<?php
//error_reporting(0);
include"User.php";
$objuser=new User();
if(isset($_POST['submit']))
{
	$name=$_POST["name"];
	$pass=$_POST["pass"];
    
     $insertvalue=$objuser->login($name,$pass);

     if($insertvalue)
     {
     	header("location:display.php");
     }else
     {
     	echo flase;
     }

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="card text-center" style="padding: 25px;">
		<h2>Admin Login</h2>
	</div><br>
	<div class="container">
		<form action="#" method="POST" enctype="Multipart/form-data">
		<div class="col-md-6">
		<div class="card" style="margin-left: 30%;">
			<div class="card-header text-center">Admin Login</div>
			<div class="card-body">
				<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" placeholder="name" class="form-control">
				</div>
				<div class="form-group">
				<label>Password</label>
				<input type="text" name="pass" placeholder="Password" class="form-control">
				</div>
				<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" class="form-control" style="float:right">
				<input type="reset" name="reset" class="btn btn-warning" class="form-control">
				</div>
			</div>
		</div>
		</div>
		</form>
	</div>

</body>
</html>