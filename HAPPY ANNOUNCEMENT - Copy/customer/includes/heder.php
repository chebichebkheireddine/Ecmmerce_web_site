<?php
session_start();
include("includes/Db_conf.php");
include("functions/functions.php");
include("../logein_custem.php");
if (isset($_SESSION['custemr_email'])) {
    $cust_session = $_SESSION['custemr_email'];

    $get_cust = "select * from custemer where custemr_email='$cust_session'";

    $run_cust = mysqli_query($coon, $get_cust);

    $row_cust = mysqli_fetch_array($run_cust);

    $numcust=$row_cust['custemr_nom'];

    $phtoimg=$row_cust['custemr_img'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HAPPY ANNOUNCEMENT</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <div id="top">
        <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
            <!-- navbar navbar-default Begin -->

            <div class="container">
                <!-- container Begin -->

                <div class="navbar-header">
                    <!-- navbar-header Begin -->

                    <a href="index.php" class="navbar-brand home">
                        <!-- navbar-brand home Begin -->

                        <img src="../images/Asset 2.png" alt="Annons Logo" class="hidden-xs">
                        <img src="../images/images/Asset 2.png" alt="Annons Logo Mobile" class="visible-xs">

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

                            <li>
                                <a href="../index.php"><i class="fa  fa-university">Accueil</i></a>
                            </li>
                            <li>
                                <a href="../Anonnse.php"><i class="fa fa-bullhorn">Annances</i></a>
                            </li>
                            <li class="active">
                                <?php

                                echo "<a href='my_account.php'><i class='fa fa-user'>Mon Compte</i></a>";


                                ?>
                            </li>
                            <li>
                                <a href="../contact.php"><i class="fa fa-phone">Contacte</i></a>
                            </li>

                        </ul><!-- nav navbar-nav left Finish -->

                    </div><!-- padding-nav Finish -->

                    <?php

                    if (!isset($_SESSION['custemr_email'])) {

                        # code...
                        echo "<a class='btn navbar-btn btn-primary right' id='myBtn1' ><span class='glyphicon glyphicon-log-in'></span> Login</a>";
                        echo "<a href='customer_register.php' class='btn navbar-btn btn-primary right'><span class='glyphicon glyphicon-user'></span> Sign Up</a>";
                    } else {



                        echo "
                        <ul class='nav navbar-right top-nav'><!-- nav navbar-right top-nav begin -->
        
                                
                        <li class='dropdown'><!-- dropdown begin -->
                        
                        
                            
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown'><!-- dropdown-toggle begin -->
                                
                            <img src='./Acoun_Parson_images/$phtoimg' class='img-fluid logot'>" .  $numcust . " 
                    
                                
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

                        <form method="get"  class="navbar-form">
                            <!-- navbar-form Begin -->

                            <div class="input-group">
                                <!-- input-group Begin -->

                                <input type="text" class="form-control" placeholder="Rechercher sur Happpy Announcement" name="user_query" required>

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
    </div>