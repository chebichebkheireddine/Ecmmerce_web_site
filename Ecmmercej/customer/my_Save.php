<form action="my_account.php" method="post" enctype="multipart/form-data">
    <!-- form Begin -->

    <h1>Add to cart </h1>

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

    <p class="text-muted">vous avez actuellement
        <?php echo $count; ?> Enregistrer annances de compte
    </p>

    <div class="table-responsive">
        <!-- table-responsive Begin -->

        <table class="table">
            <!-- table Begin -->

            <thead>
                <!-- thead Begin -->

                <tr>
                    <!-- tr Begin -->

                    <th colspan="2">Product</th>
                   
                    <th> Price</th>
                    <th>category</th>
                    <th colspan="2">Supprimer</th>


                </tr><!-- tr Finish -->

            </thead><!-- thead Finish -->

            <tbody>
                <!-- tbody Begin -->

                <?php
                while ($row_save = mysqli_fetch_array($run_save)) {

                    $Annonse_ID = $row_save['A_id'];


                    $get_Annonse = "select * from product where id_product='$Annonse_ID'";

                    $run_Annonse = mysqli_query($coon, $get_Annonse);

                    while ($row_Annonse = mysqli_fetch_array($run_Annonse)) {

                        $Annoses_title = $row_Annonse['product_name'];

                        $Annoses_img1 = $row_Annonse['product_img1'];

                        $only_price = $row_Annonse['product_prise'];

                        $A_cat = $row_Annonse['id_catgor'];
                    

                    $get_type = "select * from category  where id_categori = '$A_cat'";

                    $run_type = mysqli_query($coon, $get_type);

                    while ($row_Type = mysqli_fetch_array($run_type)) {
                        $cat_title = $row_Type['category_name'];
                    }
                
                ?>
                    <tr>
                        <!-- tr Begin -->

                        <td>

                            <img class="img-fluid" src="../img_pro/<?php echo $Annoses_img1; ?>"
                            style="width: 30%;height:50% ;" alt="Annoses 3a">

                        </td>

                        <td>

                            <a href="../details.php?Annonse_id=<?php echo $Annonse_ID; ?>"> <?php echo $Annoses_title; ?>
                            </a>

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

                <?php }} ?>

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