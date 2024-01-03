<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_Annonse'])){
        
        $delete_id = $_GET['delete_Annonse'];
        
        $delete_ann = "delete from annonse where Annonse_id='$delete_id'";
        
        $run_delete = mysqli_query($coon,$delete_ann);
        
        if($run_delete){
            
            echo "<script>alert('One of your Annonce has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_Annonse','_self')</script>";
            
        }
        
    }

?>

<?php } ?>