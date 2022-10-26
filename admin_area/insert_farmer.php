<?php
if(!isset($_SESSION['admin_email']))
{
    echo "<script>window.open('login.php','_self')</script>";
}
else{
    ?>
        <br><br><br><br> <br>
    <div class="row">
    <div class= "col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dasboard"></i> Dashboard / Insert Farmer
            </li>
        </ol>
    </div>
</div>
<div class="row">
  <div class="col-lg-12">
  
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
            <i class="fa fa-money fa-fw"></i>
          Insert Farmer
        </h3>
      </div>
      <div class="panel-body">
          <form class="form-horizontal" method="post" action=""enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-md-3 control-label">Farmer Id:</label>
            <div class="col-md-6">
            <input type="number" name="farmer_id" class="form-control" required="" >
          </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Farm Name:</label>
            <div class="col-md-6">
            <input type="text" name="farm_name" class="form-control" required="" >
          </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Farmer Email:</label>
            <div class="col-md-6">
            <input type="text" name="farmer_email" class="form-control" required="" >
          </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Farmer Password:</label>
            <div class="col-md-6">
            <input type="password" name="farmer_pass" class="form-control" required="" >
          </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-3 control-label">Farmer Contact:</label>
            <div class="col-md-6">
            <input type="text" name="farmer_contact" class="form-control" required="" >
          </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">About:</label>
            <div class="col-md-6">
            <textarea name="about" class="form-control" rows="3" ></textarea>
          </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-6">
            <input type="submit" name="submit" values="Insert Farmer"  class="btn btn-primary form-control" >
          </div>
          </div>
          
</form>
</div>
</div>
</div>
</div>
<?php

if(isset($_POST['submit'])){
    $farmer_id=$_POST['farmer_id'];
    $farm_name=$_POST['farm_name'];
    $farmer_email=$_POST['farmer_email'];
    $farmer_pass=$_POST['farmer_pass'];
    
    $farmer_contact=$_POST['farmer_contact'];
    $farmer_about=$_POST['about'];
   

    $insert_farmer="INSERT into farmer(farmer_id,farm_name,farmer_email,farmer_pass,farmer_contact,farmer_about)
    values('$farmer_id','$farm_name','$farmer_email','$farmer_pass','$farmer_contact','$farmer_about')";

    $run_farmer=mysqli_query($con,$insert_farmer);

    if($run_farmer){
        echo "<script>alert('One Farm Has Been Inserted Successfully')</script>";
        echo "<script>window.open('index.php?view_farmer','_self')</script>";
    }


}

?>

<?php } ?>