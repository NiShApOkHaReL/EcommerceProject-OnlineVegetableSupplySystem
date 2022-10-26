<?php
session_start();
include("Footer/db.php");
require("functions/functions.php");
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
    <div id="top" ><!-- Top bar start-->
        <div class="container"><!--container start-->
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">
                <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "Welcome Guest";
                    }
                    else{
                        echo "Welcome: " .$_SESSION['customer_email'] ."";
                    }
                ?>
                </a>
                <a href="#">Shopping Cart Total Price: Rs <?php totalPrice(); ?>, Total Items <?php item(); ?></a> 
            </div>
            <div class="col-md-6 offer">
                <ul class="menu">
                    <li><a href="customer_registration.php">Register</a></li>

                    <li><a href="customer/my_account.php">My Account</a></li>
                    <li><a href="cart.php">Go To Cart</a></li>
                    <li>
                        <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href = 'checkout.php'>Login</a>";
                        }
                        else{
                            echo "<a href='logout.php'>Logout</a>";
                        }
                        
                        ?>


                    </li>

                </ul>

             </div>
        </div><!--container end-->
    </div><!--top bar end-->
    
    
    <div class="navbar navbar-default" id="navbar"><!--navbar navbar-default start -->
        <div class="container">    
            <div class="navbar-header"><!-- navbar-header start-->
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
            
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start--> 
                <div class="padding-nav"><!-- padding-nav started-->
                    <ul class="nav navbar-nav navbar-left">
                        <li  class="active" >
                        <a href="index.php" >Home</a>  
                        </li>
                        <li >
                        <a href="shop.php" >Shop</a>  
                        </li>
                        <li>
                        <a href="customer/my_account.php" >My Account</a>  
                        </li>
                        <li>
                        <a href="cart.php" >Shopping cart</a>  
                        </li>
                        <li>
                        <a href="about.php" >About Us</a>  
                        </li>
                        <li>
                        <a href="services.php" >Services</a>  
                        </li>
                        <li>
                        <a href="contactus.php" >Contact Us</a>  
                        </li>
                </div><!-- padding-nav end-->

                <a href="cart.php" class="btn btn-primary navbar-btn right">
                <i class="fa-solid fa-cart-shopping"></i>
                    <span> <?php item(); ?> Items In cart</span>
                </a>

                <div class="navbar-collapse collapse right"><!--navbar-collapse collapse-right start--> 
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span class="sr-only">Toggle Search</span>
                    </button>
                </div><!--navbar-collapse collapse-right end-->

                    <div class="collapse clearfix" id="search"> <!--collapse clearfix start-->
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
                    
                
                </div> <!--collapse clearfix end-->
            </div><!-- navbar-collapse collapse end-->
        </div>    
    </div><!-- navbar navbar-default end-->


    <div id="content">
        <div class="container"><!--Container start-->
            <div class="col-md-12"><!--col-md-12 start-->
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Registration</li>
                </ul>
            </div><!--col-md-12 start-->
            <div class="col-md-3"><!--col-md-3 start-->
                <?php
                include("Footer/sidebar.php");
                ?>
            </div><!--col-md-3 end--> 

     <div class="col-md-9">
        <div class="box">
            <div class="box-header">
                <center>
                    <h2>Customer Registration</h2>
                    

                </center>

            </div>
            <form action="customer_registration.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label> Customer name</label>
                    <input type="text" name="c_name" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label> Customer email</label>
                    <input type="text" name="c_email" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label> Customer password</label>
                    <input type="password" name="c_password" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label>Country</label>
                    <input type="text" name="c_country" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label> City</label>
                    <input type="text" name="c_city" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label> Contact number</label>
                    <input type="text" name="c_contact" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="c_address" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="c_image" required="" class="form-control">
                 </div>





                     <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">
                        <i class="fa fa-user-md"></i>Register
                    </button>
                 </div>
 </form>
        </div>

     </div>       


           
        
        
        
        
        </div><!--Container end-->
    </div><!--Content end-->

 <!--footer start-->
<?php  
include("Footer/footer.php");
?>
<!--footer end--> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/828e3616f1.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_password=$_POST['c_password'];
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_contact'];
    $c_address=$_POST['c_address'];
    $c_image=$_FILES['c_image']['name'];
    $c_tmp_image=$_FILES['c_image']['tmp_name'];
    $c_ip=getUserIP();

    move_uploaded_file($c_tmp_image,"customer/customer_images/$c_image");
    $insert_customer="INSERT INTO customers(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values('$c_name','$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

    $run_customer=mysqli_query($con,$insert_customer);

    $sel_cart="select * from cart where ip_add='$c_ip' ";

    $run_cart=mysqli_query($con,$sel_cart);

    $check_cart=mysqli_num_rows($run_cart);

    if($check_cart>0){
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('You have been registered successfully')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";

    }else
    {
        $_SESSION['customer_email']=$c_email;
        echo "<script>window.open('checkout.php','_self')</script>";
}
}
?>