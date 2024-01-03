<div class="modal fade" id="myModa2" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">commander from Admin</h4>
      </div>
      <div class="modal-body">
      <form role="form" method="POST">
        <div class="form-group">
          <!-- form-group Begin -->

          <label>Message</label>

          <textarea name="message1" class="form-control"></textarea>

        </div><!-- form-group Finish -->

        <div class="text-center">
          <!-- text-center Begin -->

          <button type="submit" name="submit1" class="btn btn-primary">

            <i class="fa fa-user-md"></i> Envoyer un message

          </button>

        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">fermer</button>
      </div>
    </div>
    

  </div>
</div>
<?php  
if(isset($_GET['como'])){
  $como=$_GET['como'];

  $get_como = "select * from annonse where Annonse_id='$como'";
  
  $run_como = mysqli_query($coon, $get_como);
  
  $row_como = mysqli_fetch_array($run_como);
  
  $como_name = $row_customer['Annonse_title'];
  
  

}
 $customer_session = $_SESSION['custemr_email'];

  $get_customer = "select * from custemer where custemr_email='$customer_session'";
  
  $run_customer = mysqli_query($coon, $get_customer);
  
  $row_customer = mysqli_fetch_array($run_customer);
  
  $customer_mal = $row_customer['custemr_email'];
  
  $customer_name = $row_customer['custemr_nom'];

  
  
  
  if (isset($_POST['submit1'])) {
  
    /// Admin receives message with this ///
    $sender_message = $_POST['message1'];

    $sender_name = $customer_name;
  
    $sender_email = $customer_mal;
  
  
  
    $sender_subject = "commander le A";
  
  
    $receiver_email = "kheireddine@univ-tiaret.dz";
  
    mail($receiver_email,  $sender_subject, $sender_name, $sender_email."'$sender_message' pour commander'$como_name'", $sender_message);
  
    /// Auto reply to sender with this ///
  
    $email = $customer_mal;
  
    $subject = "Welcome to my website";
  
    $msg = "Merci de nous envoyer un message.commander '$como_name'Nous vous donnerons plus d'information à ce sujet. ";
  
    $from = "kheireddine@univ-tiaret.dz";
  
    mail($email, $subject, $msg, $from);
  
    echo "<script>alert('send secsevoli ')</script>";
  
  }
   ?>