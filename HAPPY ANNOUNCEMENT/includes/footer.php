
<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Pages</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="Anonnse.php">Annances</a></li>
                    <li><a href="contact.php">Contacte</a></li>
                    <li><?php if(!isset($_SESSION['custemr_email'])){
                                
                                echo" <a  id='myBtn5' >Mon Compte</a>";
                                
                            
                                
                                
                            }else{
                                
                                echo "<a href='customer/my_account.php'>Mon Compte</a>";
    
                            }
                             ?></li>
                </ul><!-- ul Finish -->
                
                <hr>
                
                <h4>Section de l'utilisateur</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="# "id='myBtn6'>Connexion</a></li>
                    <li><a href="customer_register.php">Inscription</a></li>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Meilleures Annonces</h4>
                
                <ul><!-- ul Begin -->
                   <?php
                     $get_A_cat = "select * from annonse_categor";
                     $run_cat=mysqli_query($coon,$get_A_cat);
                     while ($row_cat=mysqli_fetch_array($run_cat)) {
                        $cat_id = $row_cat['A_cat_id'];
                        $cat_title = $row_cat['A_cat_title'];
                        echo"
                            <li>
                                <a href=Anonnse.php?cat_id=$cat_id>$cat_title</a>
                            </li>
                        ";
                         
                     }
                           
                   ?>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>trouvés</h4>
                
                <p><!-- p Start -->
                    
                   
                </p><!-- p Finish -->
                
                <a href="contact.php">Consultez notre page de contact</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-3">
                
                
                
                
                
                <h4>Rester en contact</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; 2022  HAPPY ANNOUNCEMENT KK Media All Rights Reserve</p>
            
        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-right">Theme by: <a href="#">kheireddine And Nardj</a></p>
            
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->
