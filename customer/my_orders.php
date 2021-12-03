<center><!--  center Begin  -->
    
    <h1> Mis Órdenes </h1>
    
    <p class="lead"> Tus pedidos en un solo lugar</p>
    
    <p class="text-muted">
        
    Si tiene alguna pregunta, no dude en <a href="../contact.php">Contactárnos</a>. Nuestro trabajo de servicio al cliente <strong>24/7</strong>
        
    </p>
    
</center><!--  center Finish  -->


<hr>


<div class="table-responsive"><!--  table-responsive Begin  -->
    
    <table class="table table-bordered table-hover"><!--  table table-bordered table-hover Begin  -->
        
        <thead><!--  thead Begin  -->
            
            <tr><!--  tr Begin  -->
                
                <th> No: </th>
                <th> Cantidad debida: </th>
                <th> Factura no: </th>
                <th> Cant.: </th>
                <th> Tamaño: </th>
                <th> Fecha de orden:</th>
                <th> Pagado / No pagado: </th>
                <th> Estado: </th>
                
            </tr><!--  tr Finish  -->
            
        </thead><!--  thead Finish  -->
        
        <tbody><!--  tbody Begin  -->
           
           <?php 
            
            $customer_session = $_SESSION['customer_email'];
            
            $get_customer = "select * from customers where customer_email='$customer_session'";
            
            $run_customer = mysqli_query($con,$get_customer);
            
            $row_customer = mysqli_fetch_array($run_customer);
            
            $customer_id = $row_customer['customer_id'];
            
            $get_orders = "select * from customer_orders where customer_id='$customer_id'";
            
            $run_orders = mysqli_query($con,$get_orders);
            
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_orders['order_id'];
                
                $due_amount = $row_orders['due_amount'];
                
                $invoice_no = $row_orders['invoice_no'];
                
                $qty = $row_orders['qty'];
                
                $size = $row_orders['size'];
                
                $order_date = substr($row_orders['order_date'],0,11);
                
                $order_status = $row_orders['order_status'];
                
                $i++;
                
                if($order_status=='Pendiente'){
                    
                    $order_status = 'No Pagado';
                    
                }else{
                    
                    $order_status = 'Pagado';
                    
                }
            
            ?>
            
            <tr><!--  tr Begin  -->
                
                <th> <?php echo $i; ?> </th>
                <td> $<?php echo $due_amount; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $qty; ?> </td>
                <td> <?php echo $size; ?> </td>
                <td> <?php echo $order_date; ?> </td>
                <td> <?php echo $order_status; ?> </td>
                
                <td>
                    
                    <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm"> Confirmar Pago </a>
                    
                </td>
                
            </tr><!--  tr Finish  -->
            
            <?php } ?>
            
        </tbody><!--  tbody Finish  -->
        
    </table><!--  table table-bordered table-hover Finish  -->
    
</div><!--  table-responsive Finish  -->