<h1 align="center"> changer le mot de passe </h1>


<form action="" method="post"><!-- form Begin -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label>ancien mot de passe: </label>
        
        <input type="text" name="old_pass" class="form-control" required>
        
    </div><!-- form-group Finish -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> nouveau mot de passe: </label>
        
        <input type="text" name="new_pass" class="form-control" required>
        
    </div><!-- form-group Finish -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> Confirmer le nouveau mot de passe: </label>
        
        <input type="text" name="new_pass_again" class="form-control" required>
        
    </div><!-- form-group Finish -->
    
    <div class="text-center"><!-- text-center Begin -->
        
        <button type="submit" name="submit" class="btn btn-primary"><!-- btn btn-primary Begin -->
            
            <i class="fa fa-user-md"></i> Mettre à jour maintenant
            
        </button><!-- btn btn-primary inish -->
        
    </div><!-- text-center Finish -->
    
</form><!-- form Finish -->


<?php 

if(isset($_POST['submit'])){
    
    $c_email = $_SESSION['custemr_email'];
    
    $c_old_pass = $_POST['old_pass'];
    
    $c_new_pass = $_POST['new_pass'];
    
    $c_new_pass_again = $_POST['new_pass_again'];
    
    $sel_c_old_pass = "select * from custemer where custemr_pass='$c_old_pass'";
    
    $run_c_old_pass = mysqli_query($coon,$sel_c_old_pass);
    
    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);
    
    if($check_c_old_pass==0){
        
        echo "<script>alert('Désolé, votre mot de passe actuel n'était pas valide. Veuillez réessayer')</script>";
        
        exit();
        
    }
    
    if($c_new_pass!=$c_new_pass_again){
        
        echo "<script>alert('Désolé, votre nouveau mot de passe ne correspondait pas')</script>";
        
        exit();
        
    }
    
    $update_c_pass = "update custemer set custemr_pass='$c_new_pass' where custemr_email='$c_email'";
    
    $run_c_pass = mysqli_query($con,$update_c_pass);
    
    if($run_c_pass){
        
        echo "<script>alert('Votre mot de passe a été mis à jour')</script>";
        
        echo "<script>window.open('my_account.php?my_save','_self')</script>";
        
    }
    
}

?>