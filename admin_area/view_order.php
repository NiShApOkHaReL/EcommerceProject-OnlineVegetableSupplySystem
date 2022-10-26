<?php 
if(!isset($_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}
else{
    ?>
    <br>
        <br><br><br><br>
    <div class="row">
        <div class= "col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dasboard"></i> Dashboard / View Orders
                </li>
            <ol>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i>View Orders
                </h3>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th> Order No: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product Title: </th>
                                <th> Product Qty: </th>
                                <th> Farm: </th>
                                <th> Date: </th>
                                <th> Total Amount: </th>
                                <th> Order Status: </th>
                                <th> Delete Order: </th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=0;
                            $get_orders="SELECT * from customer_order";
                            $run_orders=mysqli_query($con,$get_orders);
                            while($row_orders=mysqli_fetch_array($run_orders)){
                                $order_id=$row_orders['order_id'];
                                $c_id=$row_orders['customer_id'];
                                $invoice_no=$row_orders['invoice_no'];
                                $product_id=$row_orders['product_id'];                              
                                $qty=$row_orders['qty'];
                                $p_id =$row_orders['product_id'];
                                $farm=$row_orders['farm'];
                                $order_date=$row_orders['order_date'];
                                $due_amount=$row_orders['due_amount'];
                                $order_status=$row_orders['order_status'];
                                $get_products="SELECT * from products where product_id='$product_id'";
                                $run_products=mysqli_query($con,$get_products);
                                $row_products=mysqli_fetch_array($run_products);
                                $product_title=$row_products['product_tltle'];

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
                        
                                ?>

                              

                            <tr>
                                <td><?php echo $i ?></td>
                                
                                    
                                <td>
                                    <?php
                                $get_customer="select * from customers where customer_id='$c_id'";
                                $run_customer=mysqli_query($con,$get_customer);
                                $row_customer=mysqli_fetch_array($run_customer);
                                $customer_email=$row_customer['customer_email'];
                            echo $customer_email;

                            ?>
                            </td>
                            <td bgcolor="yellow" ><?php echo $invoice_no; ?></td>
                                <td><?php echo $product_title; ?></td>
                                <td><?php echo $qty; ?></td>
                                <td><?php echo $farm_name; ?></td>
                                <td><?php echo $order_date; ?></td>
                                <td><?php echo $due_amount; ?></td>
                                <td>
                                    <?php
                                    if($order_status=='pending'){
                                        echo $order_status='pending';
                                    }
                                    else{
                                        echo $order_satus='Complete';

                                    }
        ?>
        </td>
        <td>
            <a href="index.php?order_delete=<?php echo $order_id; ?>">
        
<i class="fa fa-trash-o"></i>Delete        
        </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





<?php }?>














