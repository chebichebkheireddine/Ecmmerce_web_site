<?php 

$coon=mysqli_connect("localhost","root","","anonse_db");

function getAno(){
    
    global $coon;
    
    $get_Annonse = "select * from annonse order by 1 DESC LIMIT 0,8";
    
    $run_Annonse = mysqli_query($coon,$get_Annonse);
    
    while($row_Annonse=mysqli_fetch_array($run_Annonse)){
        
        $Ann_id = $row_Annonse['Annonse_id'];
        
        $Annonse_title = $row_Annonse['Annonse_title'];
        
        $Annonse_price = $row_Annonse['Annonse_price'];

        $Annonse_plas = $row_Annonse['plase_name'];
        
        $Annonse_img1 = $row_Annonse['Annonse_img_1'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='ََAnnonses'>
            
                <a href='details.php?ََAnnonse_id=$Ann_id'>
                
                    <img class='img-responsive' src='admin_area/Annons_images/$Annonse_img1'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?ََAnnonse_id=$Ann_id'>

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
                    
                        <a class='btn btn-default' href='details.php?ََAnnonse_id=$Ann_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?ََAnnonse_id=$Ann_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Save

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}

?>