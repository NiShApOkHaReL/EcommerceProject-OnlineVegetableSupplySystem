<?php

include("footer/db.php");
require_once("functions/functions.php");

session_start();
$connect= mysqli_connect("localhost","root","","ecom");
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
                <a href="#">Shopping Cart Total Price: Rs<?php totalPrice(); ?>, Total Items <?php item(); ?></a>
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
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
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


    <div id="content">
        <div class="container">
            <!--Container start-->
            <div class="col-md-12">
                <!--col-md-12 start-->
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
            <!--col-md-12 start-->
            <div class="col-md-3">
                <!--col-md-3 start-->
                <?php
                include("Footer/sidebar.php");
                ?>
            </div>
            <!--col-md-3 end-->
            <div class="col-md-9">
                <!--col-md-9 start-->
                <?php
           if(!isset($_GET['p_cat'])){
            if(!isset($_GET['cat_id'])){
                echo "<div class='box'>
                <h1>Shop </h1>  </div>";

            }

           }
           
           ?>
                <div class="row">
                    <!--row Start-->
                    <?php
            if(!isset($_GET['p_cat'])){
                if(!isset($_GET['cat_id'])){
                    $per_page = 6;
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];

                    }
                    else{
                        $page = 1;
                    }

                    $start_from = ($page-1 ) * $per_page ;
                    $get_product = "select * from products order by 1 DESC LIMIT $start_from , $per_page";
                    $run_pro = mysqli_query($con , $get_product);
                    while ($row = mysqli_fetch_array($run_pro)){
                        $pro_id = $row['product_id'];
                        $pro_title = $row['product_tltle'];
                        $pro_price = $row['product_price'];
                        $pro_img1 = $row['product_img1'];

                        echo "
                        <div class='col-md-4 col-sm-6 center responsive'><!--col-md-4 col-sm-6 center responsive start-->
                        <div class = 'Product'>
                            <a href='details.php?pro_id=$pro_id'>
                            <img src='admin_area/product_image/$pro_img1' class='img-responsive'>
                            </a>
                            <div class='text'>
                            <h3>
                             <a href='details.php?pro_id =$pro_id'>$pro_title</a>
                            </h3>
                            <p class='price'>Rs $pro_price(per kg)</p>
                            <p class='buttons'>
                                <a href='details.php?pro_id=$pro_id' class='btn btn-defult'>View Details</a>
                                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to cart</a>
</p>
                        </div>
                        </div>
                        </div>

                            
                        ";
                     
                    }               

                
            
            ?>






                </div>
                <!--row end-->



                <center>
                    <ul class="pagination">
                        <?php
                        $query = "select * from products";
                        $result = mysqli_query($con , $query);
                        $total_record = mysqli_num_rows($result);
                        $total_pages = ceil($total_record / $per_page);
                        echo " 
                        <li><a href = 'shop.php?page=1'>".'First Page'. "</a> </li>                     
                        ";
                        for($i=1 ;$i<=$total_pages; $i++){
                            echo "<li><a href ='shop.php?page=" .$i."'>".$i." </a></li> ";
                        };

                        echo " 
                        <li><a href = 'shop.php?page=$total_pages'>".'Last Page'. "</a> </li>                     
                        ";
                       

                    
                    
                    
                    } 
                } 
                ?>



                    </ul>
                </center>
              
                    <?php
                    getPcatPro();
                    getCatPro();
                    ?>


                





            </div>
            <!--col-md-9 Start-->

        </div>
        <!--Container end-->
    </div>
    <!--Content end-->



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