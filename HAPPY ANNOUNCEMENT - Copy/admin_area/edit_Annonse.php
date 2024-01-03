<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

    <?php

    if (isset($_GET['edit_Annonse'])) {

        $edit_id = $_GET['edit_Annonse'];

        $get_A = "select * from annonse where Annonse_id='$edit_id'";

        $run_edit = mysqli_query($coon, $get_A);

        $row_edit = mysqli_fetch_array($run_edit);

        $A_id = $row_edit['Annonse_id'];

        $A_title = $row_edit['Annonse_title'];

        $A_cat = $row_edit['A_cat_id'];

        $cat = $row_edit['cat_id'];

        $A_plase = $row_edit['plase_name'];

        $A_comine = $row_edit['Annonse_commine'];

        $A_image1 = $row_edit['Annonse_img_1'];

        $A_image2 = $row_edit['Annonse_img_2'];

        $A_image3 = $row_edit['Annonse_img_3'];

        $A_price = $row_edit['Annonse_price'];

        $A_keywords = $row_edit['Annonse_keywords'];

        $A_desc = $row_edit['Annonse_des'];
    }

    $get_A_cat = "select * from annonse_categor where A_cat_id ='$A_cat'";

    $run_A_cat = mysqli_query($coon, $get_A_cat);

    $row_A_cat = mysqli_fetch_array($run_A_cat);

    $A_cat_title = $row_A_cat['A_cat_title'];

    $get_cat = "select * from categor_pay where cat_id='$cat'";

    $run_cat = mysqli_query($coon, $get_cat);

    $row_cat = mysqli_fetch_array($run_cat);

    $cat_title = $row_cat['cat_title'];

    $get_Plase = "select * from plase where name_plase='$A_plase'";

    $run_plase = mysqli_query($coon, $get_Plase);

    $row_plase = mysqli_fetch_array($run_plase);

    $plase_title = $row_plase['name_plase'];

    ?>
        <div class="row">
            <!-- row Begin -->

            <div class="col-lg-12">
                <!-- col-lg-12 Begin -->

                <ol class="breadcrumb">
                    <!-- breadcrumb Begin -->

                    <li class="active">
                        <!-- active Begin -->

                        <i class="fa fa-dashboard"></i> Dashboard / Annonse

                    </li><!-- active Finish -->

                </ol><!-- breadcrumb Finish -->

            </div><!-- col-lg-12 Finish -->

        </div><!-- row Finish -->

        <div class="row">
            <!-- row Begin -->

            <div class="col-lg-12">
                <!-- col-lg-12 Begin -->

                <div class="panel panel-default">
                    <!-- panel panel-default Begin -->

                    <div class="panel-heading">
                        <!-- panel-heading Begin -->

                        <h3 class="panel-title">
                            <!-- panel-title Begin -->

                            <i class="fa fa-money fa-fw"></i> Insert Annonse

                        </h3><!-- panel-title Finish -->

                    </div> <!-- panel-heading Finish -->

                    <div class="panel-body">
                        <!-- panel-body Begin -->

                        <form method="post" class="form-horizontal" enctype="multipart/form-data">
                            <!-- form-horizontal Begin -->

                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"> Annonse Title </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <input name="Annonse_title" type="text" class="form-control" required value="<?php echo $A_title; ?>">

                                </div><!-- col-md-6 Finish -->

                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"> Annonse Category </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <select name="Annonse_cat" class="form-control">
                                        <!-- form-control Begin -->

                                        <option value="<?php echo $A_cat; ?>"> <?php echo $A_cat_title; ?> </option>

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

                                <label class="col-md-3 control-label"> Category pay </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <select name="cat" class="form-control">
                                        <!-- form-control Begin -->

                                        <option value="<?php echo$cat; ?>"> <?php echo $cat_title; ?> </option>

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

                                <label class="col-md-3 control-label"> plase welaya </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <select name="pla" class="form-control">
                                        <!-- form-control Begin -->

                                        <option value="<?php echo $A_plase; ?>"> <?php echo $plase_title; ?> </option>

                                        <?php

                                        $get_plase = "select * from plase";
                                        $run_plase = mysqli_query($coon, $get_plase);

                                        while ($row_pla = mysqli_fetch_array($run_plase)) {

                                            //$plase_id = $row_pla['plase_id'];
                                            $name_plase = $row_pla['name_plase'];

                                            echo "
                                  
                                  <option value='$A_plase'> $name_plase </option>
                                  
                                  ";
                                        }

                                        ?>

                                    </select><!-- form-control Finish -->

                                </div><!-- col-md-6 Finish -->


                            </div><!-- form-group Finish -->
                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"> la comine </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <input name="Annonse_commine" type="text" class="form-control" required value="<?php echo $A_comine; ?>">

                                </div><!-- col-md-6 Finish -->

                            </div><!-- form-group Finish -->


                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"> Annonse Price </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <input name="Annonse_price" type="text" class="form-control" required value="<?php echo $A_price; ?>">

                                </div><!-- col-md-6 Finish -->

                            </div><!-- form-group Finish -->
                            

                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"> Annonse Image 1 </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <input name="Annonse_img1" type="file" class="form-control" required>

                                    <br>

                                    <img width="70" height="70" src="Annons_images/<?php echo $A_image1; ?>" alt="<?php echo $A_image1; ?>">

                                </div><!-- col-md-6 Finish -->

                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"> Annonse Image 2 </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <input name="Annonse_img2" type="file" class="form-control">

                                    <br>

                                    <img width="70" height="70" src="Annons_images/<?php echo $A_image2; ?>" alt="<?php echo $A_image2; ?>">

                                </div><!-- col-md-6 Finish -->

                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"> Annonse Image 3 </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <input name="Annonse_img3" type="file" class="form-control form-height-custom">

                                    <br>

                                    <img width="70" height="70" src="Annons_images/<?php echo $A_image3; ?>" alt="<?php echo $A_image3; ?>">

                                </div><!-- col-md-6 Finish -->

                            </div><!-- form-group Finish -->

                            

                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"> Annonse Keywords </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <input name="Annonse_keywords" type="text" class="form-control" required value="<?php echo $A_keywords; ?>">

                                </div><!-- col-md-6 Finish -->

                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"> Annonse Desc </label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <textarea name="Annonse_desc" cols="19" rows="6" class="form-control">

                              <?php echo $A_desc; ?>
                              
                          </textarea>

                                </div><!-- col-md-6 Finish -->

                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->

                                <label class="col-md-3 control-label"></label>

                                <div class="col-md-6">
                                    <!-- col-md-6 Begin -->

                                    <input name="update" value="Update Annonse" type="submit" class="btn btn-primary form-control">

                                </div><!-- col-md-6 Finish -->

                            </div><!-- form-group Finish -->

                        </form><!-- form-horizontal Finish -->

                    </div><!-- panel-body Finish -->

                </div><!-- canel panel-default Finish -->

            </div><!-- col-lg-12 Finish -->

        </div><!-- row Finish -->

        <script src="js/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea'
            });
        </script>
   


    <?php

    if (isset($_POST['update'])) {

        $Annonse_title = $_POST['Annonse_title'];
        $Annonse_cat = $_POST['Annonse_cat'];
        $cat = $_POST['cat'];
        $plse=$_POST['pla'];
        $comin=$_POST['Annonse_commine'];
        $Annonse_price = $_POST['Annonse_price'];
        $Annonse_keywords = $_POST['Annonse_keywords'];
        $Annonse_desc = $_POST['Annonse_desc'];

        $Annonse_img1 = $_FILES['Annonse_img1']['name'];
        $Annonse_img2 = $_FILES['Annonse_img2']['name'];
        $Annonse_img3 = $_FILES['Annonse_img3']['name'];

        $temp_name1 = $_FILES['Annonse_img1']['tmp_name'];
        $temp_name2 = $_FILES['Annonse_img2']['tmp_name'];
        $temp_name3 = $_FILES['Annonse_img3']['tmp_name'];

        move_uploaded_file($temp_name1, "Annons_images/$Annonse_img1");
        move_uploaded_file($temp_name2, "Annons_images/$Annonse_img2");
        move_uploaded_file($temp_name3, "Annons_images/$Annonse_img3");

        $update_Annonse = "update annonse set A_cat_id='$Annonse_cat',cat_id='$cat',date=NOW(),Annonse_title='$Annonse_title',Annonse_img_1='$Annonse_img1',Annonse_img_1='$Annonse_img2',Annonse_img_1='$Annonse_img3',Annonse_price='$Annonse_price',Annonse_keywords='$Annonse_keywords',Annonse_des='$Annonse_desc' ,plase_name='$plse',Annonse_commine='$comin' where Annonse_id='$A_id'";

        $run_Annonse = mysqli_query($coon, $update_Annonse);

        if ($run_Annonse) {

            echo "<script>alert('Your Annonse has been updated Successfully')</script>";

            echo "<script>window.open('index.php?view_Annonse','_self')</script>";
        }
    }

    ?>


<?php } ?>