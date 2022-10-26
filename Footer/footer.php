<?php
include("footer/db.php");
include_once("functions/functions.php");
?>
<html>
    <head>
    
</head>
<body>
    
<div id="footer"><!--footer section start-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 Start-->
                <h4> Pages</h4>
                <ul>
                    <li><a href="cart.php"> Shopping Cart</a></li>
                    <li><a href="contactus.php">Contact Us<a></li>
                    <li><a href="shop.php">Shop<a></li>
                    <li><a href="checkout.php">My Account<a></li>
                </ul>
                <hr>
                <h4>User Section</h4>
                <ul>
                    <li><a href="checkout.php">Login<a></li>
                    <li><a href="customer_registration.php">Register<a></li>
                </ul>

                <hr class="hidder-md hidden-lg hidden-sm">

            </div><!--col-md-3 col-sm-6 End-->
            <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 Start-->
            <h4>Top Product Categories </h4>
            <ul>
                <?php
                $get_p_cats = "select * from product_categories";
                $run_p_cats = mysqli_query($con ,$get_p_cats);
                while($row_p_cat = mysqli_fetch_array($run_p_cats)){
                    $p_cat_id = $row_p_cat['p_cat_id'];
                    $p_cat_title = $row_p_cat['p_cat_title'];
                    echo "<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a></li>";
                }
                ?>
            </ul>

            <hr class="hidder-md hidden-lg ">
            
     </div><!--col-md-3 col-sm-6 End-->

     <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 Start-->

    <h4>Where to find us</h4>
    <p>
        <strong>Tarkari.com</strong>
        <br>Bhartpur
        <br>Chitwan
        <br>Nepal
        <br>onlinetarkari79@gmail.com
        <br>+977 9821277932
</p>
<a href="contactus.php">Goto contact us page</a>
<hr class="hidden-md hidden-lg">
</div><!--col-md-3 col-sm-6 End-->

<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 Start-->
<h4>Get the news</h4>
<p class="text-muted">
    subscribe here for getting news of OnlineTarkari
</p>
<form action=" method="post">
<div class="input-group">
    <input type="text" name="email" class="form-control">
    <span class="input-group-btn">
        <input type="submit" class="btn btn-default" value="subscribe">
</span>
</div>

</form>
<hr>
<h4>Stay In Touch</h4>
<p class="social">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-instragram"></i></a>
    
    <a href="#"><i class="fa fa-envelope"></i></a>

</div><!--col-md-3 col-sm-6 End--> 




        </div>
    </div>
</div><!--footer section End-->

<div id="Copyright"><!--Copyright section Start-->
<div class="container">
    <div class="col-md-6">
        <p class="pull-left">
            &copy;2022 Online tarikari.All right reserved.AAGN
</p>
</div>

<div class="col-md-6">
    <p class="pull-right">
        Tamplate By:<a href="www.OnlineTarkari.com">OnlineTarkari.com 
</a>
</p>
</div>

</div>
</div><!--Copyright section End-->
</body>
</html>

