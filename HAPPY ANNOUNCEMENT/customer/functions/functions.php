<?php 

$coon=mysqli_connect("localhost","root","","anonse_db");

/// begin getRealIpUser functions ///

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// begin Add_sav functions ///
/// begin Add_sav functions ///
function update_save(){
                    
    global $coon;
    
    if(isset($_POST['update'])){
        
        foreach($_POST['remove'] as $remove_id){
            
            $delete_Annonse = "delete from save where A_id='$remove_id'";
            
            $run_delete = mysqli_query($coon,$delete_Annonse);
            
            if($run_delete){
                
                echo "<script>window.open('my_account.php','_self')</script>";
                
            }
            
            
        }
        
    }
    
}

echo @$up_save = update_save();

/// begin Add_sav functions ///

function Add_sav(){
    
    global $coon;
    
    if(isset($_GET['Add_sav'])){
        $session_email = $_SESSION['custemr_email'];
    
    $select_customer = "select * from custemer where custemr_email='$session_email'";
    
    $run_customer = mysqli_query($coon,$select_customer);
    
    $row_customer = mysqli_fetch_array($run_customer);
    
    $customer_id = $row_customer['custemr_id'];
        
        $ip_add = getRealIpUser();
        
        $A_id = $_GET['Add_sav'];
        
        
        $check_AnnonseA = "select * from save where ip_add='$ip_add' AND A_id='$A_id'";
        
        $run_check = mysqli_query($coon,$check_AnnonseA);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('Annonces a déjà ajouté dans enregistrer')</script>";
            echo "<script>window.open('details.php?Annonse_id=$A_id','_self')</script>";
            
        }else{
            
            $query = "insert into save (A_id,ip_add,customer_id) values ('$A_id','$ip_add','$customer_id')";
            
            $run_query = mysqli_query($coon,$query);
            
            echo "<script>window.open('details.php?Annonse_id=$A_id','_self')</script>";
            
        }
        
    }
    
}
/// finish Add_sav functions ///






//begin get annonse
function getAno(){
    
    global $coon;
    
    $get_Annonse = "select * from annonse order by 1 DESC LIMIT 0,8";
    
    $run_Annonse = mysqli_query($coon,$get_Annonse);
    
    while($row_Annonse=mysqli_fetch_array($run_Annonse)){
        
        $Ann_id = $row_Annonse['Annonse_id'];
        
        $Annonse_title = $row_Annonse['Annonse_title'];
        
        $Annonse_price = $row_Annonse['Annonse_price'];

        $Annonse_plas = $row_Annonse['plase_name'];

        $Annonse_commine=$row_Annonse['Annonse_commine'];
        
        $Annonse_img1 = $row_Annonse['Annonse_img_1'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='ََAnnonses'>
            
                <a href='details.php?Annonse_id=$Ann_id'>
                
                    <img class='img-responsive' src='admin_area/Annons_images/$Annonse_img1'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?Annonse_id=$Ann_id'>

                            $Annonse_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                         $Annonse_price DA
                    
                    </p>

                    <p class='price'>
                    
                        wilaya  $Annonse_plas 
                    
                    </p>

                    <p class='price'>
                    
                        commune  $Annonse_commine 
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-primary gg' href='details.php?Annonse_id=$Ann_id'>

                            Afficher les détails
                        </a>
                    
                        <a class='btn btn-primary gg' href='details.php?Annonse_id=$Ann_id'>

                            <i class='fa fa-bookmark'></i> Enregistrer

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}
//finche get annonse
//begin get type Annonse
function getTyepAnn(){
    global $coon;
    
    $get_A_cat = "select *from annonse_categor";
    
    $run_A_cat = mysqli_query($coon,$get_A_cat);
    while($row_A_cat=mysqli_fetch_array($run_A_cat)){
        $cat_id = $row_A_cat['A_cat_id'];
        $cat_title = $row_A_cat['A_cat_title'];
        echo
        "
        <li>
            <a href='Anonnse.php?cat_id=$cat_id'>$cat_title</a>
        </li>
            
        ";
    }

}
//fin get tayp
//begin getTayp bay
function getTyepPay(){
    global $coon;
    
    $get_cat_pay = "select *from categor_pay";
    
    $run_cat_pay = mysqli_query($coon,$get_cat_pay);
    while($row_A_cat=mysqli_fetch_array($run_cat_pay)){
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

function getAnnonse(){
    
    global $coon;
    
    if(isset($_GET['cat_id'])){
        
        $A_cat_id = $_GET['cat_id'];
        
        $get_A_cat ="select * from annonse_categor where A_cat_id='$A_cat_id'LIMIT 0,6 ";
        
        $run_A_cat = mysqli_query($coon,$get_A_cat);
        
        $row_A_cat = mysqli_fetch_array($run_A_cat);
        
        $A_cat_title = $row_A_cat['A_cat_title'];
        
        $A_cat_des = $row_A_cat['A_cat_des'];
        
        $get_Annonse ="select * from annonse where A_cat_id='$A_cat_id'";
        
        $run_Annonse = mysqli_query($coon,$get_Annonse);
        
        $count = mysqli_num_rows($run_Annonse);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> Aucune Annonces  trouvée dans cette catégorie d'annonces </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $A_cat_title </h1>
                    
                    <p> $A_cat_des </p>
                
                </div>
            
            ";
            
        }
            
            while($row_Annonse=mysqli_fetch_array($run_Annonse)){
        
                $Ann_id = $row_Annonse['Annonse_id'];
                
                $Annonse_title = $row_Annonse['Annonse_title'];
                
                $Annonse_price = $row_Annonse['Annonse_price'];
        
                $Annonse_plas = $row_Annonse['plase_name'];

                $Annonse_commine=$row_Annonse['Annonse_commine'];
                
                $Annonse_img1 = $row_Annonse['Annonse_img_1'];
                
                echo "
                
                <div class='col-md-4 col-sm-6 single'>
                
                    <div class='ََAnnonses'>
                    
                        <a href='details.php?Annonse_id=$Ann_id'>
                        
                            <img class='img-responsive' src='admin_area/Annons_images/$Annonse_img1'>
                        
                        </a>
                        
                        <div class='text'>
                        
                            <h3>
                    
                                <a href='details.php?Annonse_id=$Ann_id'>
        
                                    $Annonse_title
        
                                </a>
                            
                            </h3>
                            
                            <p class='price'>
                            
                                 $Annonse_price DA
                            
                            </p>
        
                            <p class='price'>
                            
                                wilaya  $Annonse_plas 
                            
                            </p>
                            <p class='price'>
                    
                            commune  $Annonse_commine 
                    
                    </p>
                    
        
                            
                            <p class='button'>
                            
                                <a class='btn btn-primary gg' href='details.php?Annonse_id=$Ann_id'>
        
                                Afficher les détails
        
                                </a>
                            
                                <a class='btn btn-primary gg' href='details.php?Annonse_id=$Ann_id'>
        
                                    <i class='fa fa-shopping-cart'></i> Enregistrer
        
                                </a>
                            
                            </p>
                        
                        </div>
                    
                    </div>
                
                </div>
                
                ";
            
        }
        
    }
    
}
/// finish getpcatAnn functions ///
/// begin getpcatAnn functions ///

function geType(){
    
    global $coon;
    
    if(isset($_GET['Type_id'])){
        
        $A_Type_id = $_GET['Type_id'];
        
        $get_A_Type ="select * from categor_pay where cat_id='$A_Type_id'";
        
        $run_A_Type = mysqli_query($coon,$get_A_Type);
        
        $row_A_Type = mysqli_fetch_array($run_A_Type);
        
        $A_Type_title = $row_A_Type['cat_title'];
        
        $A_Type_des = $row_A_Type['cat_des'];
        
        $get_Annonse ="select * from annonse where cat_id='$A_Type_id' LIMIT 0,6";
        
        $run_Annonse = mysqli_query($coon,$get_Annonse);
        
        $count = mysqli_num_rows($run_Annonse);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> Aucune Annonces trouvée dans ce formules financières </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $A_Type_title </h1>
                    
                    <p> $A_Type_des </p>
                
                </div>
            
            ";
            
        }
            
            while($row_Annonse=mysqli_fetch_array($run_Annonse)){
        
                $Ann_id = $row_Annonse['Annonse_id'];
                
                $Annonse_title = $row_Annonse['Annonse_title'];
                
                $Annonse_price = $row_Annonse['Annonse_price'];
        
                $Annonse_plas = $row_Annonse['plase_name'];

                $Annonse_commine=$row_Annonse['Annonse_commine'];
                
                $Annonse_img1 = $row_Annonse['Annonse_img_1'];
                
                echo "
                
                <div class='col-md-4 col-sm-6 single'>
                
                    <div class='ََAnnonses'>
                    
                        <a href='details.php?Annonse_id=$Ann_id'>
                        
                            <img class='img-responsive' src='admin_area/Annons_images/$Annonse_img1'>
                        
                        </a>
                        
                        <div class='text'>
                        
                            <h3>
                    
                                <a href='details.php?Annonse_id=$Ann_id'>
        
                                    $Annonse_title
        
                                </a>
                            
                            </h3>
                            
                            <p class='price'>
                            
                                 $Annonse_price DA
                            
                            </p>
        
                            <p class='price'>
                            
                                wilaya  $Annonse_plas 
                            
                            </p>
                            <p class='price'>
                    
                            commune  $Annonse_commine 
                    
                    </p>
                    
        
                            
                    <p class='button'>
                            
                    <a class='btn btn-default' href='details.php?Annonse_id=$Ann_id'>

                        Afficher les détails

                    </a>
                
                    <a class='btn btn-primary gg' href='details.php?Annonse_id=$Ann_id'>

                        <i class='fa fa-shopping-cart'></i> Enregistrer

                    </a>
                
                </p>
                        
                        </div>
                    
                    </div>
                
                </div>
                
                ";
            
        }
        
    }
    
}

/// finish getpcatAnn functions ///

?>