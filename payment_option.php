<?php
    
    $session_email=$_SESSION['customer_email'];
    $select_customer="select * from customers where customer_email='$session_email'";
    $run_cust=mysqli_query($con,$select_customer);
    $row_customer=mysqli_fetch_array($run_cust);
    $customer_id=$row_customer['customer_id'];

    ?>

<div class="box">
        <h1 class="text-center"></h1>
        <p class="lead text-center">
        <ul>
            <li>
               <a href="order.php?c_id=<?php echo $customer_id?>"> Esewa
                <img src="images/esewa.png" width="150px" height="100px">
                </a>
            </li>
            <li>
            <a href="order.php?c_id=<?php echo $customer_id ?>" > Khalti
                <img src="images/khalti.png" width="150px" height="120px">
                </a>
            </li>
            <li>
            <a href="order.php?c_id=<?php echo $customer_id?>">Fonepay
                <img src="images/fonepay.png" width="180px" height="150px">
                </a>
            </li>


        </ul>

        </p>

</div>