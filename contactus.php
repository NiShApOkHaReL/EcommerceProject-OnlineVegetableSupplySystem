<?php
session_start();
include("Footer/db.php");
require_once("functions/functions.php");
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
                <a href="#" class="btn btn-success btn-sm"><?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "Welcome Guest";
                    }
                    else{
                        echo "Welcome: " .$_SESSION['customer_email']."";
                    }
                ?></a>
                <a href="#">Shopping Cart Total Price: Rs <?php totalPrice(); ?>, Total Items  <?php item(); ?> </a> 
            </div>
            <div class="col-md-6 offer">
                <ul class="menu">
                    <li><a href="customer_registration.php">Register</a></li>

                    <li><a href="my_account.php">My Account</a></li>
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
                        <li >
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
                        <li class="active">
                        <a href="contactus.php" >Contact Us</a>  
                        </li>
                </div><!-- padding-nav end-->

                <a href="cart.php" class="btn btn-primary navbar-btn right">
                <i class="fa-solid fa-cart-shopping"></i>
                    <span>  <?php item(); ?> Items In cart</span>
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
                    <li>Contact Us</li>
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
                    <h2>Contact Us</h2>
                    <p class="text-muted">If you have any questions,please feel free to contact us.</p>

                </center>

            </div>
            <form action="contactus.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="submit" required="" class="form-control">
                 </div>

                 <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message" ></textarea>
                 </div>

                 
                 <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">
                        <i class="fa fa-user-md"></i>Send Message 
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
$senderName=$_POST['name'];
$senderEmail=$_POST['email'];
$senderSubject=$_POST['subject'];
$senderMessage=$_POST['message'];
$receiverEmail="anishasilwal66@gmail.com";
mail($receiverEmail,$senderName,$senderSubject,$senderMessage); 
//Customer mail
$email=$_POST['email'];
$subject="Welcome to our website";
$msg="I shall get you soon, thanks for sending email";
$from="nishapokharel@gmail.com";
echo "<h2 align='center'>your mail sent </h2>";
}
?>