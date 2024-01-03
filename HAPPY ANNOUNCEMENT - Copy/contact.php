<?php
$test = false;
$active = 'Contact Us';
include("includes/heder.php");
?>
<header>

    <div id="content">
        <!-- #content Begin -->
        <div class="container">
            <!-- container Begin -->
            <div class="col-md-12">
                <!-- col-md-12 Begin -->

                <ul class="breadcrumb">
                    <!-- breadcrumb Begin -->
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        Contacte
                    </li>
                </ul><!-- breadcrumb Finish -->

            </div><!-- col-md-12 Finish -->



            <div class="col-md-12">
                <!-- col-md-9 Begin -->

                <div class="box">
                    <!-- box Begin -->

                    <div class="box-header">
                        <!-- box-header Begin -->
                        <?php if (isset($_GET['search'])) {
                            include("results.php");
                        } else { ?>
                            <center>
                                <h2 class="animated fadeInUp"> Sentir libre à nous contacter</h2>
                                <p class="text-muted animated fadeInUp">
                                    En cas de questions, n'hésitez pas à communiquer avec nous.<strong>24/7</strong>
                                </p>
                            </center>
                            <form action="contact.php" method="post" class="animated fadeInUp">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>sujet</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="subject" value="Signaler une erreur" checked>Signaler une
                                        erreur
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="subject" value="Demande d'ajout d'une Annances">Demande
                                        d'ajout d'une Annances
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-primary">
                                        <i class="fa fa-user-md"></i> Envoyer un message
                                    </button>
                                </div>
                            </form>

                            <?php

                            if (isset($_POST['submit'])) {

                                /// Admin receives message with this ///
                        
                                $sender_name = $_POST['name'];

                                $sender_email = $_POST['email'];

                                $sender_subject = $_POST['subject'];

                                $sender_message = $_POST['message'];

                                $receiver_email = "kheireddine@univ-tiaret.dz";

                                mail($receiver_email, $sender_name, $sender_subject, $sender_message . " Email : '$sender_email'", $sender_email);

                                /// Auto reply to sender with this ///
                        
                                $email = $_POST['email'];

                                $subject = "Bienvenue sur mon site web";

                                $msg = "Merci de nous envoyer un message. Dès que possible, nous répondrons à votre message que : $sender_subject";

                                $from = "kheireddine@univ-tiaret.dz";

                                mail($email, $subject, $msg, $from);

                                echo "<h2 align='center'>Votre message a été envoyé avec succès</h2>";
                            }

                            ?>

                        </div><!-- box-header Finish -->

                    </div><!-- box Finish -->
                <?php } ?>


            </div><!-- col-md-9 Finish -->

        </div><!-- container Finish -->
    </div><!-- #content Finish -->
</header>

<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

<script>
    $(document).ready(function () {
        $("#myBtn").click(function () {
            $("#myModal").modal();
        });
    });
    $(document).ready(function () {
        $("#myBtn1").click(function () {
            $("#myModal").modal();
        });
    });
    $(document).ready(function () {
        $("#myBtn3").click(function () {
            $("#myModal").modal();
        });
    });
    $(document).ready(function () {
        $("#myBtn5").click(function () {
            $("#myModal").modal();
        });
    });
    $(document).ready(function () {
        $("#myBtn6").click(function () {
            $("#myModal").modal();
        });
    });
    $(document).ready(function () {
        $("#myBtn33").click(function () {
            $("#myModel").modal();
        });
    });
</script>


</body>

</html>