<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row">
    <!-- row no: 1 begin -->
    <div class="col-lg-12">
        <!-- col-lg-12 begin -->
        <h1 class="page-header">Voir Meilleures Annonces </h1>

        

    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->
<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> Voir Meilleures Annonces
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Meilleures Annonces ID </th>
                                <th> Meilleures Annonces Title </th>
                                <th> Meilleures Annonces description </th>
                                <th> modifie Meilleures Annonces </th>
                                <th> supprimer Meilleures Annonces </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_A_cats = "select * from annonse_categor";
          
                                $run_A_cats = mysqli_query($coon,$get_A_cats);
          
                                while($row_A_cats=mysqli_fetch_array($run_A_cats)){
                                    
                                    $A_cat_id = $row_A_cats['A_cat_id'];
                                    
                                    $A_cat_title = $row_A_cats['A_cat_title'];
                                    
                                    $A_cat_desc = $row_A_cats['A_cat_des'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $A_cat_title; ?> </td>
                                <td width="300"> <?php echo $A_cat_desc; ?> </td>
                                <td> 
                                    <a href="index.php?edit_A_cat= <?php echo $A_cat_id; ?> ">
                                        <i class="fa fa-pencil"></i> modifie
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_A_cat= <?php echo $A_cat_id; ?> ">
                                        <i class="fa fa-trash"></i> supprimer
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>