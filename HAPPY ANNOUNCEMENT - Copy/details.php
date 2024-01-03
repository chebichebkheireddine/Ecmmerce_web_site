<?php
$test = false;
$active = 'Anonnse';
include("includes/heder.php");
?>

<header>

    <?php if (isset($_GET['search'])) {
        $search_query = $_GET['user_query']; ?>

        <div id="content">
            <!-- #content Begin -->
            <div class="container">
                <!-- container Begin -->
                <div class="col-md-12">
                    <!-- col-md-12 Begin -->

                    <ul class="breadcrumb">
                        <!-- breadcrumb Begin -->
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Annonse
                        </li>
                        <li>
                            <a href="Anonnse.php"> Annonse </a>
                        </li>
                        <li>
                            <?php echo $search_query ?>

                        </li>
                    </ul><!-- breadcrumb Finish -->

                </div><!-- col-md-12 Finish -->
            <?php } else { ?>
                <div id="content">
                    <!-- #content Begin -->
                    <div class="container">
                        <!-- container Begin -->
                        <div class="col-md-12">
                            <!-- col-md-12 Begin -->

                            <ul class="breadcrumb">
                                <!-- breadcrumb Begin -->
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    Annonse
                                </li>
                                <li>
                                    <a href="Anonnse.php?Add_sav=<?php echo $A_id ?>"> <?php echo $A_cat ?> </a>
                                </li>
                                <li>
                                    <?php echo $Annonse_title ?>

                                </li>
                            </ul><!-- breadcrumb Finish -->

                        </div><!-- col-md-12 Finish -->
                    <?php } ?>

                    <div class="col-md-3">
                        <!-- col-md-3 Begin -->

                        <?php

                        include("includes/sidebar.php");

                        ?>

                    </div><!-- col-md-3 Finish -->



                    <div class="col-md-9">
                        <!-- col-md-9 Begin -->
                        <?php if (isset($_GET['search'])) {
                            echo "<div class='box'>
                <!-- box Begin -->
                <h1>Annances recherch</h1>
                <p>
                    this is all we find it
                </p>
            </div><!-- box Finish -->
            ";
                            include("results.php");
                        } else { ?>
                            <div id="AnnonsesMain" class="row">
                                <!-- row Begin -->
                                <div class="col-sm-6">
                                    <!-- col-sm-6 Begin -->
                                    <div id="mainImage">
                                        <!-- #mainImage Begin -->
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- carousel slide Begin -->
                                            <ol class="carousel-indicators">
                                                <!-- carousel-indicators Begin -->
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol><!-- carousel-indicators Finish -->

                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <center><img class="img-responsive" src="admin_area/Annons_images/<?php echo  $Annonse_img1 ?>" alt="Work"></center>
                                                </div>
                                                <div class="item">
                                                    <center><img class="img-responsive" src="admin_area/Annons_images/<?php echo  $Annonse_img2 ?>" alt="Work"></center>
                                                </div>
                                                <div class="item">
                                                    <center><img class="img-responsive" src="admin_area/Annons_images/<?php echo  $Annonse_img3 ?>" alt="Work"></center>
                                                </div>
                                            </div>

                                            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                                <!-- left carousel-control Begin -->
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a><!-- left carousel-control Finish -->

                                            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                                <!-- right carousel-control Begin -->
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Previous</span>
                                            </a><!-- right carousel-control Finish -->

                                        </div><!-- carousel slide Finish -->
                                    </div><!-- mainImage Finish -->
                                </div><!-- col-sm-6 Finish -->

                                <div class="col-sm-6">
                                    <!-- col-sm-6 Begin -->
                                    <div class="box">
                                        <!-- box Begin -->
                                        <h1 class="text-center"><?php echo $Annonse_title; ?></h1>

                                        <?php
                                        Add_sav();
                                        ?>
                                        <div class="info-Deitalils">

                                            <!-- form-horizontal Begin -->
                                            <div class="group-D">
                                                <!-- form-group Begin -->
                                                <a class="col-md-5 control-text">wilaya</a>

                                                <div class="col-md-7 ">
                                                    <!-- col-md-7 Begin -->
                                                    <div class="info">
                                                        <?php echo $Annonse_plas; ?>
                                                    </div>

                                                </div><!-- col-md-7 Finish -->

                                            </div><!-- form-group Finish -->

                                            <div class="group-D">
                                                <!-- form-group Begin -->
                                                <a class="col-md-5 control-a">commune</a>

                                                <div class="col-md-7 ">
                                                    <!-- col-md-7 Begin -->
                                                    <div class="info">
                                                        <?php echo $lacommoni; ?>
                                                    </div>

                                                </div><!-- col-md-7 Finish -->

                                            </div><!-- form-group Finish -->

                                            <div class="group-D">
                                                <!-- form-group Begin -->
                                                <a class="col-md-5 control-a">Annonces</a>

                                                <div class="col-md-7">
                                                    <!-- col-md-7 Begin -->
                                                    <div class="info">

                                                    <?php echo $A_cat; ?>*
                                                    </div>

                                                </div><!-- col-md-7 Finish -->
                                            </div><!-- form-group Finish -->
                                            <br/>
                                            <p class="price"><?php echo  $Annonse_price . "DA"; ?></p>
                                            <?php if (!isset($_SESSION['custemr_email'])) {
                                                echo " <a  id='myBtn10' class='btn btn-primary' ><i class='fa fa-user-md'></i> Commonde
                             </a>";
                                            } else {
                                                echo " <a  class='btn btn-primary' data-toggle='modal' data-target='#myModa2' ><i class='fa fa-user-md'></i> commander
                             </a>";
                                            }

                                            ?>

                                            <?php if (!isset($_SESSION['custemr_email'])) {
                                                echo " <a  id='myBtn9' class='btn btn-primary' ><i class='fa fa-bookmark'></i> Enregistrer
                            </a>";
                                            } else {
                                                echo " <a href='details.php?Add_sav=$Annonse_id' class='btn btn-primary'>

                            <i class='fa fa-bookmark'></i> Enregistrer

                        </a>";
                                            } ?>




                                        </div><!-- form-horizontal Finish -->

                                    </div><!-- box Finish -->

                                    <div class="row" id="thumbs">
                                        <!-- row Begin -->

                                        <div class="col-xs-4">
                                            <!-- col-xs-4 Begin -->
                                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                                <!-- thumb Begin -->
                                                <img src="admin_area/Annons_images/<?php echo  $Annonse_img1 ?>" alt="Work" class="img-responsive">
                                            </a><!-- thumb Finish -->
                                        </div><!-- col-xs-4 Finish -->

                                        <div class="col-xs-4">
                                            <!-- col-xs-4 Begin -->
                                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                                <!-- thumb Begin -->
                                                <img src="admin_area/Annons_images/<?php echo  $Annonse_img2 ?>" alt="Work" class="img-responsive">
                                            </a><!-- thumb Finish -->
                                        </div><!-- col-xs-4 Finish -->

                                        <div class="col-xs-4">
                                            <!-- col-xs-4 Begin -->
                                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                                <!-- thumb Begin -->
                                                <img src="admin_area/Annons_images/<?php echo  $Annonse_img3 ?>" alt="Work" class="img-responsive">
                                            </a><!-- thumb Finish -->
                                        </div><!-- col-xs-4 Finish -->

                                    </div><!-- row Finish -->

                                </div><!-- col-sm-6 Finish -->


                            </div><!-- row Finish -->

                            <div class="box1" id="details">
                                <!-- box Begin -->

                                <h4>Annonces Détails</h4>

                                <p>

                                    <?php echo  $annonse_des ?>

                                </p>
                                <h4>Meilleures Annonces Algérie</h4>

                                <p>

                                    <?php echo  $A_cat_des; ?>

                                </p>
                                <h4>formules financières<?php echo  $A_cat_p; ?> </h4>

                                <p>

                                    <?php echo  $A_cat_des_p; ?>

                                </p>



                                <hr>

                            </div><!-- box Finish -->

                            <div id="row same-heigh-row">
                                <!-- #row same-heigh-row Begin -->
                                <div class="col-md-3 col-sm-6">
                                    <!-- col-md-3 col-sm-6 Begin -->
                                    <div class="box same-height headline">
                                        <!-- box same-height headline Begin -->
                                        <h3 class="text-center">Annonces Vous aimez peut-être</h3>
                                    </div><!-- box same-height headline Finish -->
                                </div><!-- col-md-3 col-sm-6 Finish -->

                                <?php

                                $get_Annonse = "select * from annonse order by rand() LIMIT 0,3";

                                $run_Annonse = mysqli_query($coon, $get_Annonse);

                                while ($row_Annonse = mysqli_fetch_array($run_Annonse)) {

                                    $Ann_id = $row_Annonse['Annonse_id'];

                                    $Annonse_title = $row_Annonse['Annonse_title'];

                                    $Annonse_price = $row_Annonse['Annonse_price'];

                                    $Annonse_plas = $row_Annonse['plase_name'];

                                    $Annonse_commine = $row_Annonse['Annonse_commine'];

                                    $Annonse_img1 = $row_Annonse['Annonse_img_1'];

                                    echo "
                  
                   <div class='col-md-3 col-sm-6 center-responsive'>
                   
                       <div class='Annonses same-height'>
                       
                           <a href='details.php?Annonse_id=$Ann_id'>
                           
                               <img class='img-responsive' src='admin_area/Annons_images/$Annonse_img1'>
                           
                           </a>
                           
                           <div class='text'>
                           
                               <h3> <a href='details.php?Annonse_id=$Ann_id'> $Annonse_title </a> </h3>
                               
                               <p class='price'> $Annonse_price DA </p>
                               <p class='price'> Wlaya $Annonse_plas </p>
                               <p class='price'> commune $Annonse_commine </p>
                           
                           </div>
                       
                       </div>
                   
                   </div>
                  
                  ";
                                }

                                ?>



                            </div><!-- #row same-heigh-row Finish -->

                    </div><!-- col-md-9 Finish -->
                <?php } ?>

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