<?php
session_start();
if (!isset($_SESSION['customer_email'])){
    echo"<script>window.open('../checkout.php','_self')</script>";
}else{
include("footer/db.php");
include_once("functions/functions.php");

if (isset($_GET['order_id'])){
    $order_id=$_GET['order_id'];
}
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

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
                        echo "Welcome: " .$_SESSION['customer_email']."";
                    }
                ?>
                </a>
                <a href="#">Shopping Cart Total Price: Rs <?php totalPrice(); ?>, Total Items <?php item(); ?></a> 
            </div>
            <div class="col-md-6 offer">
                <ul class="menu">
                    <li><a href="../customer_registration.php">Register</a></li>

                    <li><a href="customer/my_account.php">My Account</a></li>
                    <li><a href="../cart.php">Go To Cart</a></li>
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
                        <a href="../index.php" >Home</a>  
                        </li>
                        <li >
                        <a href="../shop.php" >Shop</a>  
                        </li>
                        <li class="active">
                        <a href="customer/my_account.php" >My Account</a>  
                        </li>
                        <li>
                        <a href="../cart.php" >Shopping cart</a>  
                        </li>
                        <li>
                        <a href="../about.php" >About Us</a>  
                        </li>
                        <li>
                        <a href="../services.php" >Services</a>  
                        </li>
                        <li>
                        <a href="../contactus.php" >Contact Us</a>  
                        </li>
                </div><!-- padding-nav end-->

                <a href="cart.php" class="btn btn-primary navbar-btn right">
                <i class="fa-solid fa-cart-shopping"></i>
                    <span> <?php item(); ?>  Items In cart</span>
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
                    <li>
                        My Account
                    </li>
                </ul>
            </div><!--col-md-12 start-->
            <div class="col-md-3"><!--col-md-3 start-->
                <?php
                include("Footer/sidebar.php");
                ?>
            </div><!--col-md-3 end--> 

<div class="col-md-9">
            <div class="box">
                <h1 align="center">Please confirm your payment.</h1>
                <form action="confirm.php?update_id=<?php echo $order_id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Invoice Number</label>
                        <input type="text" class="form-control" name="invoice_number" required="" >
                    </div>

                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" name="amount" required="" >
                    </div>

                    <div class="form-group">
                        <label>Select payment mode</label>
                        <select class="form-control" name="payment_mode">
                            <option>Bank Transfer</option>
                            <option>Esewa</option>
                            <option>Khalti</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Transection Number</label>
                        <input type="text" class="form-control" name="trfr_number" required="" >
                    </div>

                    <div class="form-group">
                        <label>Payment Date</label>
                        <input type="date" class="form-control" name="date" required="" >
                    </div>

<div class="text-center" >
<button type="submit" class="btn btn-primary btn-lg" name="confirm_payment" >Confirm Payment</button>
</div>
                </form>
                <?php
                if (isset($_POST['confirm_payment'])){
                    $update_id=$_GET['update_id'];
                    $invoice_number=$_POST['invoice_number'];
                    $amount=$_POST['amount'];
                    $trfr_number=$_POST['trfr_number'];
                    $date=$_POST['date'];
                    $complete="Complete";
                    $insert="INSERT INTO payments (invoice_id,amount,payment_mode,ref_no,payment_date)
                    values('$invoice_number','$amount','$payment_mode','$trfr_number','$date')";
                    $run_insert=mysqli_query($con, $insert);
                    $update_q="update customer_order set order_status ='$complete' where order_id='$update_id'";
                    $run_insert=mysqli_query($con, $update_q);

                    $update_p="update pending_order set order_status ='$complete' where order_id='$update_id'";
                    $run_insert=mysqli_query($con,$update_p);

echo"<script> alert('Your order has been received'); </script>";
echo"<script> window.open('my_account.php?order','_self'); </script>";

                }
                ?>

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
<?php } ?>