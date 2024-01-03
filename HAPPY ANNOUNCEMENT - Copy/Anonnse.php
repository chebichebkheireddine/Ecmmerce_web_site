<?php
$test = false;
$a = true;
$active = 'Anonnse';
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
                        Annances
                    </li>
                </ul><!-- breadcrumb Finish -->

            </div><!-- col-md-12 Finish -->
            <div class="col-md-3">
                <!-- col-md-3 Begin -->

                <?php

                include("includes/sidebar.php");

                ?>

            </div><!-- col-md-3 Finish -->

            <div class="col-md-9">
                <!-- col-md-9 Begin -->
                <?php

                if (!isset($_GET['cat_id'])) {
                    if (!isset($_GET['Type_id'])) {
                        if (isset($_GET['search'])) {
                            echo "<div class='box'>
                            <!-- box Begin -->
                            <h1>Annances recherch</h1>
                            <p>
                                this is all we find it
                            </p>
                        </div><!-- box Finish -->
                        ";
                            include("results.php");
                        } else {
                            echo "
                <div class='box'>
                    <!-- box Begin -->
                    <h1>Annances</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                    </p>
                </div><!-- box Finish -->
                ";
                        }
                    }
                }
                ?>

                <div class="row">
                    <!-- row Begin -->
                    <?php
                    if (!isset($_GET['cat_id'])) {
                        if (!isset($_GET['Type_id'])) {
                            $pra_page = 6;
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            } else {
                                $page = 1;
                            }

                            $startfrom = ($page - 1) * $pra_page;
                            //this is conn for Annonse
                            $get_Annonse = "select * from annonse order by 1 DESC LIMIT $startfrom,$pra_page";
                            $run_Annonse = mysqli_query($coon, $get_Annonse);

                            while ($row_Annonse = mysqli_fetch_array($run_Annonse)) {

                                $Ann_id = $row_Annonse['Annonse_id'];

                                $Annonse_title = $row_Annonse['Annonse_title'];

                                $Annonse_price = $row_Annonse['Annonse_price'];

                                $Annonse_plas = $row_Annonse['plase_name'];

                                $Annonse_commine = $row_Annonse['Annonse_commine'];

                                $Annonse_img1 = $row_Annonse['Annonse_img_1'];

                                echo "
                            <div class='col-md-4 col-sm-6 center-responsive'><!-- col-md-4 col-sm-6 center-responsive Begin -->

                            
                            <div class='card h-100'>
                              <div class='card-img-top position-relative overflow-hidden'>
                                <img class='img-responsive' src='admin_area/Annons_images/$Annonse_img1' alt='$Annonse_title'>
                                <div class='product-action'>
                                  <a class='btn btn-outline-light btn-square' href='details.php?Annonse_id=$Ann_id'><i class='fa fa-info-circle'></i> Details</a>
                                  <a class='btn btn-outline-light btn-square' href='details.php?Annonse_id=$Ann_id'><i class='fa fa-heart'></i> Save</a>
                                </div>
                              </div>
                              <div class='card-body'>
                                <h5 class='card-title'>$Annonse_title</h5>
                                <p class='card-text'>
                                  <span class='font-weight-bold'>Price: </span>$Annonse_price DA<br>
                                  <span class='font-weight-bold'>Region: </span>$Annonse_plas<br>
                                  <span class='font-weight-bold'>Town: </span>$Annonse_commine
                                </p>
                              </div>
                            </div>
                          </div>
                          
                           ";
                            }

                    ?>




                </div><!-- row Finish -->
                <center>
                    <ul class="pagination">
                <?php
                            $query = "select * from annonse";

                            $result = mysqli_query($coon, $query);

                            $total_records = mysqli_num_rows($result);

                            $total_pages = ceil($total_records / $pra_page);

                            echo "
                             
                                 <li>
                                 
                                     <a href='Anonnse.php?page=1'> " . 'Première page' . " </a>
                                 
                                 </li>
                             
                             ";

                            for ($i = 1; $i <= $total_pages; $i++) {

                                echo "
                             
                                 <li>
                                 
                                     <a href='Anonnse.php?page=" . $i . "'> " . $i . " </a>
                                 
                                 </li>
                             
                             ";
                            };

                            echo "
                             
                                 <li>
                                 
                                     <a href='Anonnse.php?page=$total_pages'> " . 'Dernière page' . " </a>
                                 
                                 </li>
                             
                             ";
                        }
                    }

                ?>

                    </ul>
                </center>
                <?php getAnnonse();
                geType(); ?>


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
        $("#myBtn33").click(function() {
            $("#myModel").modal();
        });
    });
</script>



</body>

</html>