
<div class="modal" id="myModel">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Inscription nouveau compte</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="customer_register.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="c_name" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="c_email" required>
          </div>
          <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" class="form-control" name="c_pass" required>
          </div>
          <div class="form-group">
            <label>Numéro de téléphone</label>
            <input type="text" class="form-control" name="c_contact" required>
          </div>
          <div class="form-group">
            <label>Votre adresse</label>
            <input type="text" class="form-control" name="c_address" required>
          </div>
          <div class="form-group">
            <label>Photo de votre profil</label>
            <input type="file" class="form-control form-height-custom" name="c_image" required>
          </div>
          <div class="text-center">
            <button type="submit" name="register" class="btn btn-primary">
              <i class="fa fa-user-md"></i> Inscription
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- #content Finish -->



<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script>
    $(document).ready(function() {
        $("#myBtn").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#myBtn1").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#myBtn3").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#myBtn5").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#myBtn6").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#open").click(function() {
            $("#myModel").modal();
        });
    });
</script>


</body>

</html>
<?php

if (isset($_POST['register'])) {

    $c_name = $_POST['c_name'];

    $c_email = $_POST['c_email'];

    $c_pass = $_POST['c_pass'];

    $c_contact = $_POST['c_contact'];

    $c_address = $_POST['c_address'];

    $c_image = $_FILES['c_image']['name'];

    $c_image_tmp = $_FILES['c_image']['tmp_name'];

    $c_ip = getRealIpUser();

    move_uploaded_file($c_image_tmp, "customer/Acoun_Parson_images/$c_image");

    $check_email = mysqli_num_rows(mysqli_query($coon, "select custemr_email FROM custemer WHERE  custemr_email='$c_email'"));

    if ($check_email > 0) {
        echo "<script>alert('Email already exists in out database.');</script>";
    }else{

    $insert_customer = "insert into custemer (custemr_nom, custemr_email, custemr_pass, custemr_cuntact,custemr_adres, custemr_img, custemr_ip) values ('$c_name','$c_email','$c_pass','$c_contact','$c_address','$c_image','$c_ip')";

    $run_customer = mysqli_query($coon, $insert_customer);

    $sel_save = "select * from custemer where custemr_email='$c_email'";

    $run_save = mysqli_query($coon, $sel_save);

    $check_save = mysqli_num_rows($run_save);

   

    if ($check_save > 0) {

        /// If register have items in save ///

        $_SESSION['custemr_email'] = $c_email;



        echo "<script>alert('Vous avez été inscrit avec succès')</script>";

        echo "<script>window.open('customer/my_account.php?my_Save','_self')</script>";
    } else {

        /// If register without items in save ///

        $_SESSION['custemr_email'] = $c_email;

        echo "<script>alert('été enregistré avec succès')</script>";

        echo "<script>window.open('index.php','_self')</script>";
    }}
}

?>