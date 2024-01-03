 <?php

$coon = mysqli_connect("localhost", "root", "", "ecomars-db");

/// begin getRealIpUser functions ///

function getRealIpUser()
{

    switch (true) {

        case (!empty($_SERVER['HTTP_X_REAL_IP'])):
            return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])):
            return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
            return $_SERVER['HTTP_X_FORWARDED_FOR'];

        default:
            return $_SERVER['REMOTE_ADDR'];

    }


}

function logein()
{
    if (isset($_POST['login'])) {
        global $coon;

        $customer_email = $_POST['c_email'];

        $customer_pass = $_POST['c_pass'];

        $select_customer = "select * from custemer  where custemr_email='$customer_email' AND custemr_pass='$customer_pass'";

        $run_customer = mysqli_query($coon, $select_customer);

        $get_ip = getRealIpUser();

        $check_customer = mysqli_num_rows($run_customer);

        $select_save = "select * from save where ip_add='$get_ip'";

        $run_save = mysqli_query($coon, $select_save);

        $check_save = mysqli_num_rows($run_save);

        if ($check_customer == 0) {

            echo "<script>alert('Votre Nom d'utlisateur  ou votre mot de passe est erroné')</script>";
            echo "<script>window.open('index.php','_self')</script>";

            exit();

        }

        if ($check_customer == 1 and $check_save == 0) {

            $_SESSION['custemr_email'] = $customer_email;


            echo "<script>alert('vous êtes connecté en')</script>";

            echo "<script>window.open('customer/my_account.php?my_Save','_self')</script>";

        } else {

            $_SESSION['custemr_email'] = $customer_email;



            echo "<script>window.open('customer/my_account.php','_self')</script>";

        }

    }


}



function update_save()
{

    global $coon;

    if (isset($_POST['update'])) {

        foreach ($_POST['remove'] as $remove_id) {

            $delete_Annonse = "delete from save where A_id='$remove_id'";

            $run_delete = mysqli_query($coon, $delete_Annonse);

            if ($run_delete) {

                echo "<script>window.open('my_account.php','_self')</script>";

            }


        }

    }

}

echo @$up_save = update_save();

/// begin Add_sav functions ///

function Add_sav()
{

    global $coon;

    if (isset($_GET['Add_sav'])) {
        $session_email = $_SESSION['custemr_email'];

        $select_customer = "select * from custemer where custemr_email='$session_email'";

        $run_customer = mysqli_query($coon, $select_customer);

        $row_customer = mysqli_fetch_array($run_customer);

        $customer_id = $row_customer['custemr_id'];

        $ip_add = getRealIpUser();

        $A_id = $_GET['Add_sav'];


        $check_AnnonseA = "select * from save where ip_add='$ip_add' AND A_id='$A_id'";

        $run_check = mysqli_query($coon, $check_AnnonseA);

        if (mysqli_num_rows($run_check) > 0) {

            echo "<script>alert('Annonces a déjà ajouté dans enregistrer')</script>";
            echo "<script>window.open('details.php?Annonse_id=$A_id','_self')</script>";

        } else {

            $query = "insert into save (A_id,ip_add,customer_id) values ('$A_id','$ip_add','$customer_id')";

            $run_query = mysqli_query($coon, $query);

            echo "<script>window.open('details.php?Annonse_id=$A_id','_self')</script>";

        }

    }

}





//begin get annonse
function getAno()
{

    global $coon;

    $get_Annonse = "select * from annonse order by 1 DESC LIMIT 0,8";

    $run_Annonse = mysqli_query($coon, $get_Annonse);

    while ($row_Annonse = mysqli_fetch_array($run_Annonse)) {

        $Ann_id = $row_Annonse['Annonse_id'];

        $Annonse_title = $row_Annonse['Annonse_title'];

        $Annonse_price = $row_Annonse['Annonse_price'];

        $Annonse_plas = $row_Annonse['plase_name'];

        $Annonse_commine = $row_Annonse['Annonse_commine'];

        $Annonse_img1 = $row_Annonse['Annonse_img_1'];

        echo "
        
        
        <div class='col-md-4 col-sm-6 mb-4'>
  <div class='card h-100'>
    <div class='card-img-top position-relative overflow-hidden'>
      <img class='img-responsive' src='admin_area/Annons_images/$Annonse_img1' alt='$Annonse_title'>
      <div class='product-action'>
        <a class='btn btn-dark btn-square' href='details.php?Annonse_id=$Ann_id'><i class='fa fa-info-circle'></i> Details</a>
        <a class='btn btn-dark btn-square' href='details.php?Annonse_id=$Ann_id'><i class='fa fa-heart'></i> Save</a>
      </div>
    </div>
    <div class='card-body'>
      <h5 class='card-title'>$Annonse_title</h5>
      <p class='card-text'>
        <span class='font-weight-bold'>Price: </span>$Annonse_price DA<br>
        <span class='font-weight-bold'>Wlaya: </span>$Annonse_plas<br>
        <span class='font-weight-bold'>Region: </span>$Annonse_commine
      </p>
    </div>
  </div>
</div>

";

    }

}
//finche get annonse
//begin get type Annonse
//fin get tayp
//begin getTayp bay
function getTyepPay()
{
    global $coon;

    $get_cat_pay = "select *from categor_pay";

    $run_cat_pay = mysqli_query($coon, $get_cat_pay);
    while ($row_A_cat = mysqli_fetch_array($run_cat_pay)) {
        $cat_id = $row_A_cat['cat_id'];
        $cat_title = $row_A_cat['cat_title'];
        echo
            "
        <li>
            <a href='Anonnse.php?Type_id=$cat_id'>$cat_title</a>
        </li>
            
        ";
    }

}
//this for Ende
/// begin getpcatAnn functions ///



/// finish getpcatAnn functions ///
?>