<?php 
if(!isset($_SESSION['farmer_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}
else{
    
?>
<?php
                         $farmer_email=$_SESSION['farmer_email'];
                         $get_farm="SELECT * from farmer where farmer_email='$farmer_email'";
                         $run_farm=mysqli_query($con , $get_farm);
                         $row_farm=mysqli_fetch_array($run_farm);
                         $farm_id= $row_farm['farmer_id'];
                        ?>
<?php
if(isset($_GET['delete_p'])){
    $delete_id=$_GET['delete_p'];
    $delete_pro="DELETE FROM products where product_id='$delete_id' and farmer_id='$farmer_id'";
    $run_delete=mysqli_query($con,$delete_pro);
    if($run_delete){
        echo"<script>alert('One Product Has been deleted')</script>";
        echo"<script>window.open('index.php?view_p','_self')</script>";
    }
}
?>
<?php } ?>