<div class="box">
    <center>
        <h3>Change your password</h3>
    </center>
    <form action="" method="post">
    <div class="form-group">
        <label>Enter your current password</label>
        <input type="password" name="old_password" class="form-control">
    </div>

    <div class="form-group">
        <label>Enter new password</label>
        <input type="password" name="new_password" class="form-control">
    </div>

    <div class="form-group">
        <label>Confirm new password</label>
        <input type="password" name="c_n_password" class="form-control">
    </div>

    <div class="text-center">
        <button class="btn btn-primary btn-lg" name="update" type="submit"> 
            Update now</button>
    </div>
</form>

</div>

<?php
if(isset($_POST['update'])){
    $c_email=$_SESSION['customer_email'];
    $old_password=$_POST['old_password'];
    $new_password=$_POST['new_password'];
    $c_n_password=$_POST['c_n_password'];
    $select_cust="select * from customers where customer_email='$c_email' AND customer_pass= '$old_password'";
    $run_q=mysqli_query($con,$select_cust);
    $check_old_pass=mysqli_num_rows($run_q);
    if($check_old_pass==0){
        echo "<script>alet('Your Current password is not valid..Try again')</script>";
        exit(); 
    }
    if($new_password!=$c_n_password){
        echo "<script>alet('Your new password does not match with confirm password')</script>";
        exit(); 

}
$update_q="update customers set customer_pass='$new_password' where customer_email='$c_email'";
$run_q=mysqli_query($con,$update_q);
echo "<script>alert('Your Changed')</script>";
echo "<script>window.open('my_account.php?my_order')</script>";

}
?>