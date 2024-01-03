<?php
session_start();
include("includes/Db_conf.php");
if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {
    $admin_session = $_SESSION['admin_email'];

    $get_admin = "select * from admins where admin_email='$admin_session'";

    $run_admin = mysqli_query($coon, $get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['admin_id'];

    $admin_name = $row_admin['admin_name'];

    $admin_email = $row_admin['admin_email'];

    $admin_image = $row_admin['admin_image'];

    $admin_country = $row_admin['admin_country'];

    $admin_about = $row_admin['admin_about'];

    $admin_contact = $row_admin['admin_contact'];

    $admin_job = $row_admin['admin_job'];

    $get_Annonse = "select * from annonse";

    $run_Annonse = mysqli_query($coon, $get_Annonse);

    $count_Annonse = mysqli_num_rows($run_Annonse);

    $get_customers = "select * from custemer";

    $run_customers = mysqli_query($coon, $get_customers);

    $count_customers = mysqli_num_rows($run_customers);

    $get_p_categories = "select * from annonse_categor";

    $run_p_categories = mysqli_query($coon, $get_p_categories);

    $count_p_categories = mysqli_num_rows($run_p_categories);

    $get_save = "select * from save";

    $run_save = mysqli_query($coon, $get_save);

    $count_save = mysqli_num_rows($run_save);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Annonse Admin Area</title>
        <link rel="stylesheet" href="css/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>


        <body>

            <div id="wrapper">
                <!-- #wrapper begin -->

                <?php include("includes/sidebar.php"); ?>

                <div id="page-wrapper">
                    <!-- #page-wrapper begin -->
                    <div class="container-fluid">
                        <!-- container-fluid begin -->

                        <?php

                        if (isset($_GET['dashboard'])) {

                            include("dashboard.php");
                        }
                        if (isset($_GET['view_Ann'])) {

                            include("view_annonse.php");
                        }
                        if (isset($_GET['insert_Annonse'])) {

                            include("insert_Annonse.php");
                        }
                        if (isset($_GET['view_Annonse'])) {

                            include("view_annonse.php");
                        }
                        if (isset($_GET['delete_Annonse'])) {

                            include("delete_Annonse.php");
                        }
                        if (isset($_GET['edit_Annonse'])) {

                            include("edit_Annonse.php");
                        }
                        if (isset($_GET['view_A_cats'])){
                            include('view_A_cats.php');
                        }
                        if (isset($_GET['insert_A_cat'])){
                            include('insert_A_cats.php');
                        }
                        if (isset($_GET['edit_A_cat'])){
                            include('edit_A_cat.php');
                        }
                        if (isset($_GET['delete_A_cat'])){
                            include('Delet_A_cats.php');
                        }
                        if (isset($_GET['insert_cat'])){
                            include('insert_cat.php');
                        }
                        if (isset($_GET['view_cats'])){
                            include('view_cat.php');
                        }
                        if (isset($_GET['edit_cat'])){
                            include('edit__cat.php');
                        }
                        if (isset($_GET['delete_cat'])){
                            include('delete_cat.php');
                        }

                        ?>

                    </div><!-- container-fluid finish -->
                </div><!-- #page-wrapper finish -->
            </div><!-- wrapper finish -->

            <script src="js/jquery-331.min.js"></script>
            <script src="js/bootstrap-337.min.js"></script>
        </body>

    </html>
<?php } ?>