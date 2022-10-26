<?php
include("footer/db.php");
require("functions/functions.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetable Supplier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div id="top">
        <!-- Top bar start-->
        <div class="container">
            <!--container start-->
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm"><?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "Welcome Guest";
                    }
                    else{
                        echo "Welcome: " .$_SESSION['customer_email']."";
                    }
                ?></a>
                <a href="#">Shopping Cart Total Price:Rs <?php totalPrice(); ?>, Total Items <?php item(); ?></a>
            </div>
            <div class="col-md-6 offer">
                <ul class="menu">
                    <li><a href="customer_registration.php">Register</a></li>

                    <li><a href="customer/my_account.php">My Account</a></li>
                    <li><a href="cart.php">Go To Cart</a></li>
                    <li>  <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href = 'checkout.php'>Login</a>";
                        }
                        else{
                            echo "<a href='logout.php'>Logout</a>";
                        }
                        
                        ?></li>

                </ul>

            </div>
        </div>
        <!--container end-->
    </div>
    <!--top bar end-->


    <div class="navbar navbar-default" id="navbar">
        <!--navbar navbar-default start -->
        <div class="container">
            <div class="navbar-header">
                <!-- navbar-header start-->
                <a class="navbar-brand home" href="index.php">
                    <img src="images/logo.jpg" alt="logo" class="hidden-xs">
                    <img src="images/logo.jpg" alt="logo" class="visible-xs">

                </a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div><!-- navbar-header end-->

            <div class="navbar-collapse collapse" id="navigation">
                <!-- navbar-collapse collapse start-->
                <div class="padding-nav">
                    <!-- padding-nav started-->
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping cart</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                </div><!-- padding-nav end-->

                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span> <?php item(); ?> Items In cart</span>
                </a>

                <div class="navbar-collapse collapse right">
                    <!--navbar-collapse collapse-right start-->
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse"
                        data-target="#search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="sr-only">Toggle Search</span>
                    </button>
                </div>
                <!--navbar-collapse collapse-right end-->

                <div class="collapse clearfix" id="search">
                    <!--collapse clearfix start-->
                    <form class="navbar-form" method="get" action="result.php">
                        <div class="input-group">
                            <input type="text" name="user_query" placeholder="Search" class="form-control" required="">

                            <button type="success" value="Search" class="btn btn-primary">
                                <i class="fa-regular fa-magnifying-glass"></i>
                                <span class="input-group-btn"></span>
                            </button>

                        </div>
                    </form>
                </div>


            </div>
            <!--collapse clearfix end-->
        </div><!-- navbar-collapse collapse end-->
    </div>
    </div><!-- navbar navbar-default end-->

    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">


                <?php
      $get_silder="select * from slider LIMIT 0,1";
      $run_slider=mysqli_query($con,$get_silder);
      while($row=mysqli_fetch_array($run_slider)){
           $slider_name=$row['slider_name'];
           $slider_image=$row['slider_image'];
           echo"<div class='item active'>
           <img src='admin_area/slider_images/$slider_image'>

           </div>
           ";
      }
      ?>
                <?php
       $get_silder="select * from slider LIMIT 1,6";
       $run_slider=mysqli_query($con,$get_silder);
       while($row=mysqli_fetch_array($run_slider)){
            $slider_name=$row['slider_name'];
            $slider_image=$row['slider_image'];
            echo"<div class='item'>
            <img src='admin_area/slider_images/$slider_image'>
 
            </div>
            ";
       }
      ?>



                <!-- <div class="item active">
        <img src="images/1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/3.png" alt="New york" style="width:100%;">
      </div>-->


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>LATEST THIS WEEK </h2>
                </div>
            </div>
        </div>
    </div>

    
    <div id="content" class="container">
        <div class="row">
            <?php 
    getPro();
    ?>
        </div>
    </div>


    <!--footer start-->
    <?php  
include("Footer/footer.php");
?>
    <!--footer end-->

    <script src="https://kit.fontawesome.com/828e3616f1.js" crossorigin="anonymous"></script>
</body>

</html>