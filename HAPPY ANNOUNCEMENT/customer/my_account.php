<?php

include("includes/heder.php");


if (!isset($_SESSION['custemr_email'])) {
} else {




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
                            <a href="../index.php">Accueil</a>
                        </li>
                        <li>
                            Mon Compte
                        </li>
                    </ul><!-- breadcrumb Finish -->

                </div><!-- col-md-12 Finish -->

                <div class="col-md-3">
                    <!-- col-md-3 Begin -->

                    <?php

                    include("includes/sidebar.php");


                    ?>

                </div><!-- col-md-3 Finish -->

                <div id="Save" class="col-md-9">
                    <!-- col-md-9 Begin -->

                    <div class="box">
                        <!-- box Begin -->

                        <?php
                        if (isset($_GET['search'])) {
                            include("results.php");
                        }

                        if (isset($_GET['my_Save'])) {
                            include("my_Save.php");
                        }

                        ?>
                        <?php

                        if (isset($_GET['edit_account'])) {
                            include("edit_account.php");
                        }

                        ?>

                        <?php

                        if (isset($_GET['change_pass'])) {
                            include("change_pass.php");
                        }

                        ?>

                        <?php

                        if (isset($_GET['delete_account'])) {
                            include("delete_account.php");
                        }
                        if (isset($_GET['Ajout_pro'])) {
                            include("Ajout.php");
                        }

                        ?>

                    </div><!-- box Finish -->

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
            $("#myBtn9").click(function() {
                $("#myModal").modal();
            });
        });
        $(document).ready(function() {
            $("#myBtn10").click(function() {
                $("#myModal").modal();
            });
        });;
        $(document).ready(function() {
            $("#myBt").click(function() {
                $("#myModa2").modal();
            });
        });
    </script>


    </body>

    </html>
<?php } ?>