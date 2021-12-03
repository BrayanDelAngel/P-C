<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Páginas</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="../cart.php">Carrito de Compras</a></li>
                    <li><a href="../contact.php">Contáctanos</a></li>
                    <li><a href="../shop.php">Tienda</a></li>
                    <li><a href="my_account.php">Mi Cuenta</a></li>
                </ul><!-- ul Finish -->
                
                <hr>
                
                <h4>Sección de Usuario</h4>
                
                <ul><!-- ul Begin -->
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../checkout.php'>Acceder</a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?my_orders'>Mi Cuenta</a>"; 
                               
                           }
                           
                           ?>
                    
                    <li>
                    
                            <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../checkout.php'>Acceder</a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?edit_account'>Editar Cuenta</a>"; 
                               
                           }
                           
                           ?>
                    
                    </li>
                </ul><!-- ul Finish -->
                <li><a href="../terms.php">Términos & Condiciones</a></li>
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Principales categorías de productos</h4>
                
                <ul><!-- ul Begin -->
                
                    <?php 
                    
                        $get_p_cats = "select * from product_categories";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='../shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Encuéntranos</h4>
                
                <p><!-- p Start -->

                    <strong>Servicios P&C inc.</strong>
                    <br/>Creador:
                    <br/>Ramírez de la Rosa Cristian David
                    <br/>0818-0683-3157
                    <br/>crisronald3000@gmail.com
                    <br/><strong>P&C</strong>
                    
                </p><!-- p Finish -->
                
                <a href="../contact.php">Consulte Nuestra Página de Contacto</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
                <h4>Recibe las Noticias Nuevas</h4>
                
                <p class="text-muted">
                No se pierda nuestros últimos productos de actualización.
                </p>
                
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=ServiciosP&C', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="hidden" value="ServiciosP&C" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribir" class="btn btn-default">
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->
                
                <hr>
                
                <h4>Mantenerse en Contacto</h4>
                
                <p class="social">
                    <a href="../#" class="fa fa-facebook"></a>
                    <a href="../#" class="fa fa-twitter"></a>
                    <a href="../#" class="fa fa-instagram"></a>
                    <a href="../#" class="fa fa-google-plus"></a>
                    <a href="../#" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; 2021 Servicios P&C Todos los derechos reservados</p>
            
        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-right">Theme by: <a href="#">Cristian</a></p>
            
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->