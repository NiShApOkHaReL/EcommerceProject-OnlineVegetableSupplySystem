<?php
session_start();
include("footer/db.php");
require("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
                <a href="#">Shopping Cart Total Price:<?php totalPrice(); ?>, Total Items <?php item(); ?></a>
            </div>
            <div class="col-md-6 offer">
                <ul class="menu">
                    <li><a href="customer_registration.php">Register</a></li>

                    <li><a href="checkout.php">My Account</a></li>
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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping cart</a>
                        </li>
                        <li class="active">
                       
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
    <!-- header end-->

    <div class="container">
        <div class="col-md-6 col-sm-12 col-lg-6" >
       <img src="images/aboutimg.jpg" alt="delivery image " height="500px" width="550px">
        </div>
        <div class="col-md-6 col-sm-12 col-lg-6">
            <h2>About Online Vegetable Supply System</h2>
            <p> We deliver fresh vegetables, fruits, and groceries.
                 You can buy our products within a few minutes. Browse a product, add to cart, fill your address, and proceed with your order. We
                will deliver it as soon as possible.<br><br>

                We aim to change the way of the traditional way of shopping. You don't need to waste your time going to
                a local market, bargain with shopkeepers, and bring your bag. With us, you can select your products and
                buy online; we will deliver it to your doorstep within a few hours.<br><br>

                We aim to shorten the time between the farm and your table. We deliver the local food, which is better,
                fresher and tastier.<br><br>

                Also, we aim to cut off the middleman cost, which makes the vegetable price higher. You are a direct
                customer, and we are a producer means you will get mediators free pricing.</p>
        </div>

    </div>









    <!--footer start-->
    <?php  
include("Footer/footer.php");
?>
    <!--footer end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/828e3616f1.js" crossorigin="anonymous"></script>

</body>

</html>