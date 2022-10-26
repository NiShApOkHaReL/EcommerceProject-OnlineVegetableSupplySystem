<?php 
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}
else{
    ?>
    <br>
        <br><br><br><br>
    <div class="row">
        <div class= "col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dasboard"></i> Dashboard / View Farmer
                </li>
            <ol>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i>View Farmer
                </h3>
            </div>
            <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Farmer Id: </th>
                    <th>Farmer Name:</th>
                    <th>Farmer Email:</th>
                    <th>Farmer Password:</th>
                    <th>Farmer Contact:</th>
                    <th>Farmer About:</th>     
                    <th>Delete Farmer:</th>             
</tr>
</thead>
</tbody>
<?php

$get_farmer="SELECT * from farmer";
$run_farmer=mysqli_query($con,$get_farmer);
while($row_farmer=mysqli_fetch_array($run_farmer)){
$farmer_id=$row_farmer['farmer_id'];

$farmer_name=$row_farmer['farm_name'];

$farmer_email=$row_farmer['farmer_email'];

$farmer_pass=$row_farmer['farmer_pass'];
$farmer_contact=$row_farmer['farmer_contact'];
$farmer_about=$row_farmer['farmer_about'];


?>
<tr>
<td><?php echo $farmer_id; ?></td>

<td><?php echo $farmer_name; ?></td>
<td><?php echo $farmer_email; ?></td>
<td><?php echo $farmer_pass; ?></td>
<td><?php echo $farmer_contact; ?></td>
<td><?php echo $farmer_about; ?></td>

<td><a href="index.php?farmer_delete=<?php echo $farmer_id; ?>">
<i class="fa fa-trash-o"></i>Delete
</a>
</td>

</tr>

<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<?php } ?>




