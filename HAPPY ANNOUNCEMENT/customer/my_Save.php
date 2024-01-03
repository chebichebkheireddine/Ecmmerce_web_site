<form action="my_account.php" method="post" enctype="multipart/form-data">
    <!-- form Begin -->

    <h1>Enregistrer annances</h1>

    <?php



    $session_email = $_SESSION['custemr_email'];

    $select_customer = "select * from custemer where custemr_email='$session_email'";

    $run_customer = mysqli_query($coon, $select_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_id = $row_customer['custemr_id'];

    $select_save = "select * from save where customer_id='$customer_id'";

    $run_save = mysqli_query($coon, $select_save);

    $count = mysqli_num_rows($run_save);

    ?>

    <p class="text-muted">vous avez actuellement<?php echo $count; ?> Enregistrer annances  de compte</p>

    <div class="table-responsive">
        <!-- table-responsive Begin -->

        <table class="table">
            <!-- table Begin -->

            <thead>
                <!-- thead Begin -->

                <tr>
                    <!-- tr Begin -->

                    <th colspan="2">Annonse</th>
                    <th>formules financières</th>
                    <th> Price</th>
                    <th>Meilleures Annonces Algérie</th>
                    <th colspan="2">Supprimer</th>


                </tr><!-- tr Finish -->

            </thead><!-- thead Finish -->

            <tbody>
                <!-- tbody Begin -->

                <?php



                while ($row_save = mysqli_fetch_array($run_save)) {

                    $Annonse_ID = $row_save['A_id'];


                    $get_Annonse = "select * from annonse where Annonse_id='$Annonse_ID'";

                    $run_Annonse = mysqli_query($coon, $get_Annonse);

                    while ($row_Annonse = mysqli_fetch_array($run_Annonse)) {

                        $Annoses_title = $row_Annonse['Annonse_title'];

                        $Annoses_img1 = $row_Annonse['Annonse_img_1'];

                        $only_price = $row_Annonse['Annonse_price'];

                        $cat_id = $row_Annonse['cat_id'];

                        $A_cat_id = $row_Annonse['A_cat_id'];
                    }



                    $get_type_pye = "select * from categor_pay  where cat_id ='$cat_id'";

                    $run_type_pye = mysqli_query($coon, $get_type_pye);

                    while ($row_cat = mysqli_fetch_array($run_type_pye)) {
                        $catpaye = $row_cat['cat_title'];
                    }
                    $get_type = "select * from annonse_categor  where A_cat_id ='$A_cat_id'";

                    $run_type = mysqli_query($coon, $get_type);

                    while ($row_Type = mysqli_fetch_array($run_type)) {
                        $cat_title = $row_Type['A_cat_title'];
                    }
                ?>

                    <tr>
                        <!-- tr Begin -->

                        <td>

                            <img class="img-responsive" src="../admin_area/Annons_images/<?php echo $Annoses_img1; ?>" alt="Annoses 3a">

                        </td>

                        <td>

                            <a href="../details.php?Annonse_id=<?php echo $Annonse_ID; ?>"> <?php echo $Annoses_title; ?> </a>

                        </td>
                        <td>

                            <?php echo $catpaye; ?>

                        </td>



                        <td>

                            <?php echo $only_price; ?>

                        </td>
                        <td>

                            <?php echo $cat_title; ?>

                        </td>



                        <td>

                            <input type="checkbox" name="remove[]" value="<?php echo $Annonse_ID; ?>">

                        </td>



                    </tr><!-- tr Finish -->

                <?php  } ?>

            </tbody><!-- tbody Finish -->



        </table><!-- table Finish -->

    </div><!-- table-responsive Finish -->

    <div class="box-footer">
        <!-- box-footer Begin -->

        <div class="pull-left">
            <!-- pull-left Begin -->

            <a href="../index.php" class="btn btn-default">
                <!-- btn btn-default Begin -->

                <i class="fa fa-chevron-left"></i> Continuer recherche

            </a><!-- btn btn-default Finish -->

        </div><!-- pull-left Finish -->

        <div class="pull-right">
            <!-- pull-right Begin -->

            <button type="submit" name="update" value="Update save" class="btn btn-default">
                <!-- btn btn-default Begin -->

                <i class="fa fa-refresh"></i> mise à jour Enregistrer 

            </button><!-- btn btn-default Finish -->
        </div><!-- pull-right Finish -->

    </div><!-- box-footer Finish -->

</form><!-- form Finish -->

</div><!-- box Finish -->
<?php

update_save();

?>
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


        //this is
        $Ann_id = $row_Annonse['Annonse_id'];
        
        $Annonse_title = $row_Annonse['Annonse_title'];
        
        $Annonse_price = $row_Annonse['Annonse_price'];

        $Annonse_plas = $row_Annonse['plase_name'];

        $Annonse_commine=$row_Annonse['Annonse_commine'];
        
        $Annonse_img1 = $row_Annonse['Annonse_img_1'];
          
          echo "
          
           <div class='col-md-3 col-sm-6 center-responsive'>
           
               <div class='Annonses same-height'>
               
                   <a href='../details.php?Annonse_id=$Ann_id'>
                   
                       <img class='img-responsive' src='../admin_area/Annons_images/$Annonse_img1'>
                   
                   </a>
                   
                   <div class='text'>
                   
                       <h3> <a href='../details.php?Annonse_id==$Ann_id'> $Annonse_title </a> </h3>
                       
                       <p class='price'> $Annonse_price DA </p>
                       <p class='price'> Wlaya $Annonse_plas </p>
                       <p class='price'> commune $Annonse_commine </p>
                   
                   </div>
               
               </div>
           
           </div>
          
          ";

        //thi is

      
    }

    ?>



</div><!-- #row same-heigh-row Finish -->