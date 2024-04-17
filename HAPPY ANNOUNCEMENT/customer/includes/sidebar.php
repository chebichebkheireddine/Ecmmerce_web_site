<div class="panel panel-default sidebar-menu">
    <!--  panel panel-default sidebar-menu Begin  -->


    <?php

    $customer_session = $_SESSION['custemr_email'];

    $get_customer = "select * from custemer where custemr_email='$customer_session'";

    $run_customer = mysqli_query($coon, $get_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_image = $row_customer['custemr_img'];

    $customer_name = $row_customer['custemr_nom'];

    if (!isset($_SESSION['custemr_email'])) {
    } else {

        echo "
            
                <center>
                
                    <img src='Acoun_Parson_images/$customer_image'  class='img-fluid coo' >
                
                </center>
                
                <br/>
                
                <h3 class='panel-title' align='center'>
                
                    Nom: $customer_name
                
                </h3>
            
            ";
    }

    ?>



    <div class="panel-body">
        <!--  panel-body Begin  -->

        <ul class="nav-pills nav-stacked nav">
            <!--  nav-pills nav-stacked nav Begin  -->

            <li class="<?php if (isset($_GET['my_Save'])) {
                            echo "active";
                        } ?>">

                <a href="my_account.php?my_Save">

                    <i class="fa fa-list"></i> Enregistrer annances

                </a>

            </li>



            <li class="<?php if (isset($_GET['edit_account'])) {
                            echo "active";
                        } ?>">

                <a href="my_account.php?edit_account">

                    <i class="fa fa-pencil"></i> Modifier le compte

                </a>

            </li>

            <li class="<?php if (isset($_GET['change_pass'])) {
                            echo "active";
                        } ?>">

                <a href="my_account.php?change_pass">

                    <i class="fa fa-user"></i> changer le mot de passe

                </a>

            </li>

            <li class="<?php if (isset($_GET['delete_account'])) {
                            echo "active";
                        } ?>">

                <a href="my_account.php?delete_account">

                    <i class="fa fa-trash-o"></i> Supprimer le compte

                </a>

            </li>
            <li class="<?php if (isset($_GET['Ajout_pro'])) {
                            echo "active";
                        } ?>">

                <a href="my_account.php?Ajout_pro">

                    <i class="fa fa-plus"></i> Ajouter un produit

                </a>

            </li>
            <li>

                <a href="../logout.php">

                    <i class="fa fa-sign-out"></i> Se déconnecter

                </a>

            </li>

        </ul><!--  nav-pills nav-stacked nav Begin  -->

    </div><!--  panel-body Finish  -->

</div><!--  panel panel-default sidebar-menu Finish  -->