<center><!-- center Begin -->
    
    <h1> Voulez-vous vraiment supprimer votre compte ? </h1>
    
    <form action="" method="post"><!-- form Begin -->
        
       <input type="submit" name="Yes" value="Oui, je veux supprimer" class="btn btn-danger"> 
        
       <input type="submit" name="No" value="Non, je ne veux pas supprimer" class="btn btn-primary"> 
        
    </form><!-- form Finish -->
    
</center><!-- center Finish -->


<?php 

$c_email = $_SESSION['custemr_email'];

if(isset($_POST['Yes'])){
    
    $delete_customer = "delete from custemer where custemr_email='$c_email'";
    
    $run_delete_customer = mysqli_query($coon,$delete_customer);
    
    if($run_delete_customer){
        
        session_destroy();
        
        echo "<script>alert('Supprimer votre compte avec succès, se sentir désolé à ce sujet. Au revoir')</script>";
        
        echo "<script>window.open('../index.php','_self')</script>";
        
    }
    
}

if(isset($_POST['No'])){
    
    echo "<script>window.open('my_account.php?my_save','_self')</script>";
    
}

?>