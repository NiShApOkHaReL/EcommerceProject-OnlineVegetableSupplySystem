<?php 
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}
else{
    
?>
<?php
if(isset($_GET['delete_cat'])){
    $delete_id=$_GET['delete_cat'];
    $delete_cat="DELETE FROM categories where cat_id='$delete_id'";
    $run_delete=mysqli_query($con,$delete_cat);
    if($run_delete){
        echo"<script>alert('One category Has been deleted')</script>";
        echo"<script>window.open('index.php?view_category','_self')</script>";
    }
}
?>
<?php } ?>