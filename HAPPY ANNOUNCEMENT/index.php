<?php



$active = 'Home';

include("includes/heder.php");




?>



<div class="home-welcome">
    <div class="home-welcome-text" style="background-image: url(images/home.jpg);background-color: rgba(0, 0, 0, 0.3);height: 700px;">
        <h1 style="margin: 0px;">Welcome HAPPY ANNOUNCEMENT</h1>
        <h2>Our web sit to ads</h2>
    </div>
</div>

<div id="slider" >
    <!-- container Begin -->

    <!-- <div class="col-md-12">-->
    <div class="col-md-12">
    <!-- col-md-12 Begin -->

    <div class="carousel slide " id="myCarousel" data-ride="carousel">
        <!-- carousel slide Begin -->

        <ol class="carousel-indicators">
            <!-- carousel-indicators Begin -->

            <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>

        </ol><!-- carousel-indicators Finish -->

        <div class="carousel-inner">
            <!-- carousel-inner Begin -->

            <?php
            $get_slides = "SELECT * FROM slide LIMIT 0,1";
            $run_slidee = mysqli_query($coon, $get_slides);
            while ($row_s = mysqli_fetch_array($run_slidee)) {
                $slide_name = $row_s['slide_name'];
                $slide_imge = $row_s['slide_img'];
                echo "
                            <div class='item active'>
                                <img src='admin_area/IMGslides_images/$slide_imge' alt='$slide_name'>
                            </div>
                            ";
            }

            ?>
            <?php
            $get_slides = "SELECT * FROM slide LIMIT 1,6";
            $run_slidee = mysqli_query($coon, $get_slides);
            while ($row_s = mysqli_fetch_array($run_slidee)) {
                $slide_name = $row_s['slide_name'];
                $slide_imge = $row_s['slide_img'];
                echo "
                            <div class='item '>
                                <img src='admin_area/IMGslides_images/$slide_imge' alt='$slide_name'>
                            </div>
                            ";
            }

            ?>

        </div><!-- carousel-inner Finish -->

        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
            <!-- left carousel-control Begin -->

            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>

        </a><!-- left carousel-control Finish -->

        <a href="#myCarousel" class="right carousel-control" data-slide="next">
            <!-- left carousel-control Begin -->

            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>

        </a><!-- left carousel-control Finish -->

    </div><!-- carousel slide Finish -->

    <!-- </div> col-md-12 Finish -->

</div><!-- container Finish -->


<div id="content" class="container">
    

    <?php include("results.php");  ?>

</div>


<div id="hot">
    <!-- #hot Begin -->

    <div class="box">
        <!-- box Begin -->

        <div class="container">
            <!-- container Begin -->

            <div class="col-md-12">
                <!-- col-md-12 Begin -->

                <h2>
                Annances
                </h2>

            </div><!-- col-md-12 Finish -->

        </div><!-- container Finish -->

    </div><!-- box Finish -->

</div><!-- #hot Finish -->
<div id="content" class="container">
    <!-- container Begin -->

    <div class="row">

        <!-- container Finish -->
        <!-- row Begin -->
        <?php
        Add_sav();
        getAno();

        ?>
    </div><!-- row Finish -->

</div><!-- container Finish -->



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