
<div class="card">

<center>
    <h1>
        My Order
</h1>
<p> If you have any question, please feel free to <a href="../contactus.php"> contact us.</a>
</p>
</center>
<hr>
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sr.No</th>
                <th>Due Amount</th>
                <th>Invoice Number</th>
                <th>Quantity(kg)</th>
                <th>Farm</th>
                <th>Order Date</th>
                <th>Paid/Unpaid</th>
               
</tr>
</thead>
<tbody>
    <?php
   
    $customer_session=$_SESSION['customer_email'];
    $get_customer="select * from customers where customer_email='$customer_session'";
    $run_cust=mysqli_query($con, $get_customer);
    $row_cust=mysqli_fetch_array($run_cust);
    $customer_id=$row_cust['customer_id'];
    $get_order="select * from customer_order where customer_id='$customer_id'";
    $run_order=mysqli_query($con,$get_order);
    $i=0;
    while($row_order=mysqli_fetch_array($run_order)){
        $order_id=$row_order['order_id'];
        $order_due_amount=$row_order['due_amount'];
        $order_invoice=$row_order['invoice_no'];
        $order_qty=$row_order['qty'];
        $order_farm=$row_order['farm'];
        $p_id =$row_order['product_id'];
        $order_date=substr($row_order['order_date'],0,11);
        $order_status=$row_order['order_status'];
        $i++;
        $get_product = "select * from products where product_id ='$p_id'";


        $run_pro = mysqli_query($con , $get_product);
        while($row = mysqli_fetch_array($run_pro)){
            $farm_id=$row['farmer_id'];
        }
        $get_farm="SELECT * from farmer where farmer_id='$farm_id'";
        $run_farm=mysqli_query($con , $get_farm);
        $row_farm=mysqli_fetch_array($run_farm);
        $farm_name= $row_farm['farm_name'];

        if($order_status=='pending'){
            $order_status="Unpaid";
        }else{
            $order_status="Paid";
        }
  
    ?>
    <tr>
        <td><?php echo $i ;?></td>
        <td>Rs.<?php echo $order_due_amount ?></td>
        <td><?php echo $order_invoice ?></td>
        <td><?php echo $order_qty?></td>
        <td><?php echo $farm_name ?></td>
        <td><?php echo $order_date ?></td>
        <td><?php echo $order_status?></td>

        


    </tr>
<?php } ?>
   
</tbody>  
    </table>
    <center><a href="confirm.php" target="_blank" class="btn btn-primary btn-sm">Confirm if paid</a></center>

</div>

</div>