<div class="panel-body">
    <!-- panel-body Begin -->

    <form method="post" class="form-horizontal" enctype="multipart/form-data">
        <!-- form-horizontal Begin -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> Annonse Title </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="Annonse_title" type="text" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> Meilleures Annonces </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <select name="Annonse_cat" class="form-control">
                    <!-- form-control Begin -->

                    <option> Select a Meilleures Annonces </option>

                    <?php

                    $get_A_cats = "select * from annonse_categor";
                    $run_A_cats = mysqli_query($coon, $get_A_cats);

                    while ($row_A_cats = mysqli_fetch_array($run_A_cats)) {

                        $A_cat_id = $row_A_cats['A_cat_id'];
                        $A_cat_title = $row_A_cats['A_cat_title'];

                        echo "
                                  
                                  <option value='$A_cat_id'> $A_cat_title </option>
                                  
                                  ";
                    }

                    ?>

                </select><!-- form-control Finish -->

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> formules financières </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <select name="cat" class="form-control">
                    <!-- form-control Begin -->

                    <option> Select a formules financières </option>

                    <?php

                    $get_cat = "select * from categor_pay";
                    $run_cat = mysqli_query($coon, $get_cat);

                    while ($row_cat = mysqli_fetch_array($run_cat)) {

                        $cat_id = $row_cat['cat_id'];
                        $cat_title = $row_cat['cat_title'];

                        echo "
                                  
                                  <option value='$cat_id'> $cat_title </option>
                                  
                                  ";
                    }

                    ?>

                </select><!-- form-control Finish -->

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->
        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> wilaya </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <select name="pla" class="form-control">
                    <!-- form-control Begin -->

                    <option> Select a wilaya </option>

                    <?php

                    $get_plase = "select * from plase";
                    $run_plase = mysqli_query($coon, $get_plase);

                    while ($row_pla = mysqli_fetch_array($run_plase)) {

                        //$plase_id = $row_pla['plase_id'];
                        $name_plase = $row_pla['name_plase'];

                        echo "
                                  
                                  <option value='$name_plase'> $name_plase </option>
                                  
                                  ";
                    }

                    ?>

                </select><!-- form-control Finish -->

            </div><!-- col-md-6 Finish -->


        </div><!-- form-group Finish -->
        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> commune </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="Annonse_commine" type="text" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->
        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label">le prix </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="Annonse_price" type="text" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> Annonse Image 1 </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="Annonse_img1" type="file" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> Annonse Image 2 </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="Annonse_img2" type="file" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> Annonse Image 3 </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="Annonse_img3" type="file" class="form-control form-height-custom" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->



        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> Annonse Mots clés </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="Annonse_keywords" type="text" class="form-control" required>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"> la description </label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <textarea name="Annonse_desc" cols="19" rows="6" class="form-control"></textarea>

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

        <div class="form-group">
            <!-- form-group Begin -->

            <label class="col-md-3 control-label"></label>

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <input name="submit" value="Insert Annonse" type="submit" class="btn btn-primary form-control">

            </div><!-- col-md-6 Finish -->

        </div><!-- form-group Finish -->

    </form><!-- form-horizontal Finish -->
    <?php

    if (isset($_POST['submit'])) {

        $Annonse_title = $_POST['Annonse_title'];
        $Annonse_cat = $_POST['Annonse_cat'];
        $cat = $_POST['cat'];
        $pla = $_POST['pla'];
        $Annonse_price = $_POST['Annonse_price'];
        $Annonse_commine = $_POST['Annonse_commine'];
        $Annonse_keywords = $_POST['Annonse_keywords'];
        $Annonse_desc = $_POST['Annonse_des'];

        $Annonse_img1 = $_FILES['Annonse_img1']['name'];
        $Annonse_img2 = $_FILES['Annonse_img2']['name'];
        $Annonse_img3 = $_FILES['Annonse_img3']['name'];

        $temp_name1 = $_FILES['Annonse_img1']['tmp_name'];
        $temp_name2 = $_FILES['Annonse_img2']['tmp_name'];
        $temp_name3 = $_FILES['Annonse_img3']['tmp_name'];

        move_uploaded_file($temp_name1, "Annons_images/$Annonse_img1");
        move_uploaded_file($temp_name2, "Annons_images/$Annonse_img2");
        move_uploaded_file($temp_name3, "Annons_images/$Annonse_img3");

        $insert_Annonse = "insert into annonse 
    (A_cat_id,cat_id,date,Annonse_title,Annonse_img_1,Annonse_img_2,Annonse_img_3,Annonse_price,Annonse_keywords,Annonse_des,plase_name,Annonse_commine) 
    values ('$Annonse_cat','$cat',NOW(),'$Annonse_title','$Annonse_img1','$Annonse_img2','$Annonse_img3','$Annonse_price','$Annonse_keywords','$Annonse_desc','$pla','$Annonse_commine')";

        $run_annonse = mysqli_query($coon, $insert_Annonse);

        if ($run_annonse) {

            echo "<script>alert('Annonse has been inserted sucessfully')</script>";
            echo "<script>window.open('index.php?insert_Annonse','_self')</script>";
        }
    }

    ?>