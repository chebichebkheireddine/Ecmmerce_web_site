<?php
session_start();
include("functions/functions.php");
include("includes/Db_conf.php");
include 'logein_custem.php';
include 'customer_register.php';
if (isset($_SESSION['custemr_email'])) {
    $cust_session = $_SESSION['custemr_email'];

    $get_cust = "select * from custemer where custemr_email='$cust_session'";

    $run_cust = mysqli_query($coon, $get_cust);

    $row_cust = mysqli_fetch_array($run_cust);

    $numcust = $row_cust['custemr_nom'];

    $phtoimg = $row_cust['custemr_img'];
    include("comonde.php");
}



logein();
?>


<?php

if (isset($_GET['Annonse_id'])) {

    $Annonse_id = $_GET['Annonse_id'];

    $get_Annons = "select * from annonse  Where Annonse_id='$Annonse_id'";

    $run_Annons = mysqli_query($coon, $get_Annons);

    $row_Annons = mysqli_fetch_array($run_Annons);

    $A_id = $row_Annons['A_cat_id'];

    //$Annn_id = $row_Annonse['Annonse_id'];

    $Annonse_title = $row_Annons['Annonse_title'];

    $Annonse_price = $row_Annons['Annonse_price'];

    $Annonse_plas = $row_Annons['plase_name'];

    $annonse_des = $row_Annons['Annonse_des'];

    $Annonse_img1 = $row_Annons['Annonse_img_1'];

    $Annonse_img2 = $row_Annons['Annonse_img_2'];

    $Annonse_img3 = $row_Annons['Annonse_img_3'];

    $lacommoni = $row_Annons['Annonse_commine'];


    $get_A_cat = "select * from annonse_categor where A_cat_id ='$A_id'";

    $run_A_cat = mysqli_query($coon, $get_A_cat);

    $row_A_cat = mysqli_fetch_array($run_A_cat);

    $A_cat = $row_A_cat['A_cat_title'];
    $A_cat_des = $row_A_cat['A_cat_des'];

    $get_A_cat_P = "select *from categor_pay where cat_id ='$A_id'";

    $run_A_cat_P = mysqli_query($coon, $get_A_cat_P);

    $row_A_cat_P = mysqli_fetch_array($run_A_cat_P);

    $A_cat_p = $row_A_cat_P['cat_title'];
    $A_cat_des_p = $row_A_cat_P['cat_des'];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HAPPY ANNOUNCEMENT</title>
    <link rel="icon" type="image/icon type" href="/images/Asset 2.png" />
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/Asset 2.png"/>
    <link rel="stylesheet" href="styles/style.css">

</head>

<body>

    <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
        <!-- navbar navbar-default Begin -->

        <div class="container">
            <!-- container Begin -->

            <div class="navbar-header">
                <!-- navbar-header Begin -->

                <a href="index.php" class="navbar-brand home">
                    <!-- navbar-brand home Begin -->

                    <img src="images/Asset 2.png" alt="Annons Logo">
                    <img src="images/Asset 2.png" alt="Annons Logo Mobile" class="visible-md">

                </a><!-- navbar-brand home Finish -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>

                </button>

            </div><!-- navbar-header Finish -->

            <div class="navbar-collapse collapse" id="navigation">
                <!-- navbar-collapse collapse Begin -->

                <div class="padding-nav">
                    <!-- padding-nav Begin -->


                    <ul class="nav navbar-nav left">
                        <!-- nav navbar-nav left Begin -->

                        <li class="nav-item <?php if ($active == 'Home') echo 'active' ?>">
                            <a href="index.php"><i class="nav-link fa  fa-home"> Accueil</i></a>
                        </li>
                        <li class="nav-item <?php if ($active == 'Anonnse') echo 'active' ?>">
                        
                            <a href="Anonnse.php"><i class="nav-link fa fa-shopping-bag"> Annances</i></a>
                        </li>
                        <li class="nav-item <?php if ($active == 'My Account') echo 'active ';
                                    else echo 'non' ?>">
                            <?php if (!isset($_SESSION['custemr_email'])) {

                                echo " <a  id='myBtn' ><i class='nav-link fa fa-user'> Mon compte</i></a>";
                            } else {

                                echo "<a href='customer/my_account.php'><i class='nav-link fa fa-user'> Mon compte</i></a>";
                            }
                            ?>


                        </li>
                        <li class="nav-item <?php if ($active == 'Contact Us') echo 'active' ?>">
                            <a href="contact.php"><i class="nav-link fa fa-phone"> Contacte</i></a>
                        </li>

                    </ul><!-- nav navbar-nav left Finish -->

                </div><!-- padding-nav Finish -->

                <?php

                if (!isset($_SESSION['custemr_email'])) {

                    # code... # code...
                    echo "<a class='btn navbar-btn btn-primary right' id='myBtn1' ><span class='glyphicon glyphicon-log-in'></span> Connexion </a>";
                    echo "<a  class='btn navbar-btn btn-primary right'id='myBtn33' ><span class='glyphicon glyphicon-user'></span> Inscription</a>";
                } else {



                    echo "
        <ul class='nav navbar-right top-nav'><!-- nav navbar-right top-nav begin -->
        
        
        
                           
        <li class='dropdown'><!-- dropdown begin -->
        
        
            
            <a href='#' class='dropdown-toggle ' data-toggle='dropdown'><!-- dropdown-toggle begin -->
                
            <img src='./customer/Acoun_Parson_images/$phtoimg' class='img-fluid logot'>" .  $numcust . " 
    </a><!-- dropdown-toggle finish -->
            
            
            
            <ul class='dropdown-menu'><!-- dropdown-menu begin -->
                <li><!-- li begin -->
                    <a href='customer/my_account.php'><!-- a href begin -->
                        
                        <i class='fa fa-fw fa-user'></i> Paramètres du profil
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href='logout.php'><!-- a href begin -->
                        
                        <i class='fa fa-fw fa-power-off'></i> Se déconnecter
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
            </ul><!-- dropdown-menu finish -->
            
        </li><!-- dropdown finish -->
            
        
    </ul><!-- nav navbar-right top-nav finish -->
    ";
                }



                ?>



                <div class="navbar-collapse collapse right">
                    <!-- navbar-collapse collapse right Begin -->

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <!-- btn btn-primary navbar-btn Begin -->

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button><!-- btn btn-primary navbar-btn Finish -->

                </div><!-- navbar-collapse collapse right Finish -->

                <div class="collapse clearfix" id="search">
                    <!-- collapse clearfix Begin -->

                    <form method="get" class="navbar-form">
                        <!-- navbar-form Begin -->

                        <div class="input-group">
                            <!-- input-group Begin -->

                            <input type="text" class="form-control" placeholder="Search for Annons" name="user_query" required>

                            <span class="input-group-btn">
                                <!-- input-group-btn Begin -->

                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <!-- btn btn-primary Begin -->

                                    <i class="fa fa-search"></i>

                                </button><!-- btn btn-primary Finish -->

                            </span><!-- input-group-btn Finish -->

                        </div><!-- input-group Finish -->

                    </form><!-- navbar-form Finish -->

                </div><!-- collapse clearfix Finish -->

            </div><!-- navbar-collapse collapse Finish -->

        </div><!-- container Finish -->

    </nav><!-- navbar navbar-default Finish -->