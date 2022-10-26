<?php 
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}
else{
    ?>

<?php
if(isset($_GET['farmer_delete'])){
    $delete_id=$_GET['farmer_delete'];
    $delete_user="DELETE FROM farmer where farmer_id='$delete_id'";
    $run_delete=mysqli_query($con,$delete_user);
    if($run_delete){
        echo "<script>alert('One Farmer  Has been deleted')</script>";
        echo "<script>window.open('index.php?view_farmer','_self')</script>";
    }
}
?>
<?php } ?>