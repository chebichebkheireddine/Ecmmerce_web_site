<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <!-- row no: 1 begin -->
    <div class="col-lg-12">
        <!-- col-lg-12 begin -->
        <h1 class="page-header">Voir Annances </h1>

        

    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Voir Annances
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Annonse ID: </th>
                                <th> Annonse Title: </th>
                                <th> Annonse Image: </th>
                                <th> Annonse prix: </th>
                                
                                <th> Annonse Mots clés: </th>
                                <th> Annonse Date: </th>
                                <th> Annonse Supprimer: </th>
                                <th> Annonse Modifier: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_Annonse1 = "select * from annonse";
                                
                                $run_Annonse1 = mysqli_query($coon,$get_Annonse1);
          
                                while($row_Annonse1=mysqli_fetch_array($run_Annonse1)){
                                    
                                    $Annonse1_id = $row_Annonse1['Annonse_id'];
                                    
                                    $Annonse1_title = $row_Annonse1['Annonse_title'];
                                    
                                    $Annonse1_img1 = $row_Annonse1['Annonse_img_1'];
                                    
                                    $Annonse1_price = $row_Annonse1['Annonse_price'];
                                    
                                    $Annonse1_keywords = $row_Annonse1['Annonse_keywords'];
                                    
                                    $Annonse1_date = $row_Annonse1['date'];
                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $Annonse1_title; ?> </td>
                                <td> <img src="Annons_images/<?php echo $Annonse1_img1; ?>" width="60" height="60"></td>
                                <td>  <?php echo $Annonse1_price; ?>Da </td>
                                <td> <?php echo $Annonse1_keywords; ?> </td>
                                <td> <?php echo $Annonse1_date ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_Annonse=<?php echo $Annonse1_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_Annonse=<?php echo $Annonse1_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>