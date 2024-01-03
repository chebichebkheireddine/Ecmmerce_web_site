

    <?php
    if (isset($_GET['search'])) {
        $search_query = $_GET['user_query'];



        global $coon;

        $get_Annonse = "select * from annonse where Annonse_keywords like '%$search_query%'or Annonse_title like '%$search_query%' or plase_name like '%$search_query%' ";

        $get_Annonse = mysqli_query($coon, $get_Annonse);

        $count_keywords = mysqli_num_rows($get_Annonse);
        if ($count_keywords == 0) {


            echo "<script>alert('SORRY ! No Product available for your Search')</script>";
            echo "<script>   window.location.href ='index.php'</script>";
        } else {


            while ($row_Annonse = mysqli_fetch_array($get_Annonse)) {

                $Ann_id = $row_Annonse['Annonse_id'];

                $Annonse_title = $row_Annonse['Annonse_title'];

                $Annonse_price = $row_Annonse['Annonse_price'];

                $Annonse_plas = $row_Annonse['plase_name'];

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
                    
                        Wilaya  $Annonse_plas 
                    
                    </p>

                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?Annonse_id=$Ann_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?Annonse_id=$Ann_id'>

                            <i class='fa fa-bookmark'></i> Add to Save

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        
        ";
            }
        }
    }
    //this is for anther 
       ?>
