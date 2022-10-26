<?php
include("footer/db.php");
include_once("functions/functions.php");
?>

<div class="panel panel-defult sidebar-menu"><!--panel panel-defult sidebar-menu start-->
    <div class="panel-heading"><!--panel-heading start-->
        <h3 class= "panel-title">Product Categories</h3>
 </div><!--panel-heading end-->
 <div class="panel-body">
    <ul class="nav nav-pills nav-stacked category-menu">
<?php getPCats(); ?>
    </ul>

 </div>

</div><!--panel panel-defult sidebar-menu end-->

<div class="panel panel-defult sidebar-menu"><!--panel panel-defult sidebar-menu start-->
    <div class="panel-heading"><!--panel-heading start-->
        <h3 class= "panel-title"> Categories</h3>
 </div><!--panel-heading end-->
 <div class="panel-body">
    <ul class="nav nav-pills nav-stacked category-menu">
<?php getCat(); ?>
     

    </ul>

 </div>

</div><!--panel panel-defult sidebar-menu end-->
