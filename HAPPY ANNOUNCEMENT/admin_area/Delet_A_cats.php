<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_A_cat'])){
        
        $delete_A_cat_id = $_GET['delete_A_cat'];
        
        $delete_A_cat = "delete from annonse_categor where A_cat_id ='$delete_A_cat_id'";
        
        $run_delete = mysqli_query($coon,$delete_A_cat);
        
        if($run_delete){
            
            echo "<script>alert('voseves delete this cat')</script>";
            
            echo "<script>window.open('index.php?view_A_cats','_self')</script>";
            
        }
        
    }

?>




<?php } ?>