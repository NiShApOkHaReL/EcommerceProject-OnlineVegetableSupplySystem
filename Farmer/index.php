<?php
session_start();
include("db.php");
if(!isset( $_SESSION['farmer_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}
else{

?>
<?php

$farmer_session = $_SESSION['farmer_email'];
$get_farmer = "select * from farmer where farmer_email='$farmer_session'";
$run_farmer = mysqli_query($con,$get_farmer);
$row_farmer = mysqli_fetch_array($run_farmer);
$farmer_id = $row_farmer['farmer_id'];
$farm_name = $row_farmer['farm_name'];
$farmer_email = $row_farmer['farmer_email'];
$farmer_pass = $row_farmer['farmer_pass'];
$farmer_contact = $row_farmer['farmer_contact'];
$farmer_about = $row_farmer['farmer_about'];





$get_pro="SELECT * from products where farmer_id=$farmer_id";
$run_pro = mysqli_query($con, $get_pro);
$count_pro = mysqli_num_rows($run_pro);

?>


<!DOCTYPE html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
  .main{
    background-color:rgb(207,118,245);
  }
body{
  background-image: url('farmer.jpg');
  background-repeat: no-repeat;
  background-size:cover;
}
 
</style>

</head>
<body>
<div class="main">

<ul class="nav">
<li class="nav-item">
    <a class="nav-link " href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="index.php?view_p">View Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?insert_p">Insert Product</a>
  </li>

  <li class="nav-item">
   
  <a href="logout.php">Log Out
                        <i class="fa-solid fa-power-off"></i>
                    </a>
  </li>
</ul>
<?php
if(isset($_GET['insert_p'])){
        include 'insert_p.php';
      }
      
      if(isset($_GET['view_p'])){
        include 'view_p.php';
      }
      if(isset($_GET['delete_p'])){
        include 'delete_p.php';
      }
      if(isset($_GET['edit_p'])){
        include 'edit_p.php';
      }
?>

    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>


<?php } ?>