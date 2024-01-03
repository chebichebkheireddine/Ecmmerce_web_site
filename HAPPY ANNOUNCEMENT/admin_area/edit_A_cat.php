<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_A_cat'])){
        
        $edit_A_cat_id = $_GET['edit_A_cat'];
        
        $edit_A_cat_query = "select * from annonse_categor where A_cat_id ='$edit_A_cat_id'";
        
        $run_edit = mysqli_query($coon,$edit_A_cat_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $A_cat_id = $row_edit['A_cat_id'];
        
        $A_cat_title = $row_edit['A_cat_title'];
        
        $A_cat_desc = $row_edit['A_cat_des'];
        
    }

?>
<div class="row">
    <!-- row no: 1 begin -->
    <div class="col-lg-12">
        <!-- col-lg-12 begin -->
        <h1 class="page-header">Ajouter Meilleures Annonces </h1>

        

    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->



<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> modifie Meilleures Annonces
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        Annonces Category Title 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $A_cat_title; ?> " name="A_cat_title" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        Annonces Category Description 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <textarea type='text' name="A_cat_des" class="form-control"><?php echo $A_cat_desc; ?></textarea>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Update" name="update" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['update'])){
              
              $A_cat_title = $_POST['A_cat_title'];
              
              $A_cat_desc = $_POST['A_cat_des'];
              
              $update_A_cat = "update annonse_categor set A_cat_title='$A_cat_title',A_cat_des='$A_cat_desc' where A_cat_id='$A_cat_id'";
              
              $run_A_cat = mysqli_query($coon,$update_A_cat);
              
              if($run_A_cat){
                  
                  echo "<script>alert('ubdata this ssi')</script>";
                  
                  echo "<script>window.open('index.php?view_A_cats','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 