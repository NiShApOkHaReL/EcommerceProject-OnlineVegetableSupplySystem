<?php
  session_start();
  include("db.php");  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="login.css">

</head>
<body>

<div class="container"><!-- Container start-->
<form class="form-login" action="" method="post"><!-- Form login starts-->
<h2 class="form-login-heading"> Farmer Login </h2>
<input type="text" class="form-control" name="farmer_email" placeholder="Email Address" required>

<input type="password" class="form-control" name="farmer_pass" placeholder="Password" required>

<button class="btn btn-lg btn-primary btn-block" type="submit" name="farmer_login">Log In </button>



</h4>

</form>

</div>



    





</body>
</html>
<?php
if(isset($_POST['farmer_login'])){
  $farmer_email= mysqli_real_escape_string($con,$_POST['farmer_email']);
  $farmer_pass= mysqli_real_escape_string($con,$_POST['farmer_pass']);
  $get_farmer="SELECT * from farmer where farmer_email='$farmer_email'AND farmer_pass='$farmer_pass'";
  $run_farmer=mysqli_query($con,$get_farmer);
  $count= mysqli_num_rows($run_farmer);
  if($count == 1){
    $_SESSION['farmer_email']= $farmer_email;
    echo "<script> alert('You are logged') </script>";
    echo "<script> window.open('index.php','_self') </script>";

  }
  else{
    echo "<script>alert('Email/Password Wrong')</script>";
  }

}
 ?>