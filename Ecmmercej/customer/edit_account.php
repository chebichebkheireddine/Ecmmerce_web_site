<?php 

$customer_session = $_SESSION['custemr_email'];

$get_customer = "select * from custemer where custemr_email='$customer_session'";

$run_customer = mysqli_query($coon,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['custemr_id'];

$customer_name = $row_customer['custemr_nom'];

$customer_email = $row_customer['custemr_email'];


$customer_contact = $row_customer['custemr_cuntact'];

$customer_address = $row_customer['custemr_adres'];

$customer_image = $row_customer['custemr_img'];

?>

<h1 align="center"> modifier votre compte </h1>

<form action="" method="post" enctype="multipart/form-data"><!-- form Begin -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> Nom: </label>
        
        <input type="text" name="c_name" class="form-control" value="<?php echo $customer_name; ?>" required>
        
    </div><!-- form-group Finish -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> Email: </label>
        
        <input type="text" name="c_email" class="form-control" value="<?php echo $customer_email; ?>" required>
        
    </div><!-- form-group Finish -->
    
   
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> Numéro de téléphone: </label>
        
        <input type="text" name="c_contact" class="form-control" value="<?php echo $customer_contact; ?>" required>
        
    </div><!-- form-group Finish -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> Votre adresse: </label>
        
        <input type="text" name="c_address" class="form-control" value="<?php echo $customer_address; ?>" required>
        
    </div><!-- form-group Finish -->
    
    <div class="form-group"><!-- form-group Begin -->
        
        <label> Photo de votre profil: </label>
        
        <input type="file" name="c_image" class="form-control form-height-custom">
        
        <img class='img-fluid coo' style='width: 100px; height: 100px; object-fit: cover; border-radius: 50%;' src="../imge/<?php echo $customer_image; ?>" alt="Costumer Image">
        
    </div><!-- form-group Finish -->
    
    <div class="text-center"><!-- text-center Begin -->
        
        <button name="update" class="btn btn-primary"><!-- btn btn-primary Begin -->
            
            <i class="fa fa-user-md"></i> Mettre à jour maintenant
            
        </button><!-- btn btn-primary inish -->
        
    </div><!-- text-center Finish -->
    
</form><!-- form Finish -->

<?php 

if(isset($_POST['update'])){
    
    $update_id = $customer_id;
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    

    
    $c_address = $_POST['c_address'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    move_uploaded_file ($c_image_tmp,"customer_images/$c_image");
    
    $update_customer = "update custemer set custemr_nom='$c_name',custemr_email	='$c_email',custemr_adres='$c_address',custemr_cuntact='$c_contact',custemr_img='$c_image' where custemr_id ='$update_id' ";
    
    $run_customer = mysqli_query($coon,$update_customer);
    
    if($run_customer){
        
        echo "<script>alert('Votre compte a été modifié, pour terminer le processus, veuillez Recharger')</script>";
        
        echo "<script>window.open('logout.php','_self')</script>";
        
    }
    
}

?>