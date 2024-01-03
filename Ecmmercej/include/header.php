<?php
session_start();
include("functions/functions.php");
include("dbcon.php");
include 'logein_custem.php';
include 'customer_register.php';
if (isset($_SESSION['custemr_email'])) {
  $cust_session = $_SESSION['custemr_email'];

  $get_cust = "select * from custemer where custemr_email='$cust_session'";

  $run_cust = mysqli_query($coon, $get_cust);

  $row_cust = mysqli_fetch_array($run_cust);

  $numcust = $row_cust['custemr_nom'];

  $phtoimg = $row_cust['custemr_img'];
}


                                        Add_sav();
                                        
logein();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;600;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="js/script.js"></script>



  <title>Admin section</title>
</head>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm navcolor fixed-top">
      <div class="row">
        <div class="col">


          <div class="container">
            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="#" class="d-none d-sm-flex">
                  <img src="./images/logo9.png" class="logo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>


              </li>


            </ul>

          </div>

        </div>
      </div>

      <form method="post"action="search.php">
      <div class="row">
        <div class="col d-none d-sm-flex" style="padding-left: 150px;">
          <a class="search">

            <input type="text" name="search" placeholder="Search">

            <i class="fa fa-magnifying-glass" aria-hidden="true"></i>

          </a>
        </div>
        
        <div class="col d-none d-sm-flex ">
          <ul class="user-menu d-sm-flex" style="
    list-style: none;
    ">
    </form>
            
            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col">

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <a href="#">
                  <img src="./images/logo9.png" class="logo" alt="">
                </a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
              </div>

              <div class="offcanvas-body" style="padding-left: 200px;">

                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Product.php">Popular Product</a>
                  </li>
                 
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                 <?php if (!isset($_SESSION['custemr_email'])) {  ?>
                    <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal" >
                      <span class="glyphicon glyphicon-log-in"></span> Login
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal2" >
                      <span class="glyphicon glyphicon-user"></span> Register
                    </a>
                  </li>
                    
                <?php }  ?>
                </ul>
                <?php if (isset($_SESSION['custemr_email'])) { ?>
                  <div class="dropdown" style="padding: inherit;">
                    <a class="nav-avatar nav-link  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="imge/<?php echo $phtoimg;?>" alt="Page Admin Avatar">
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="customer/my_account.php">Profile</a></li>
                      
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                  </div>
                <?php } ?>

              </div>


            </div>
            <div class="dropdown d-flex d-sm-none" style="padding: inherit;">
              <a class="nav-avatar nav-link  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="imge/homme.png" alt="Page Admin Avatar">
              </a>

              <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink" style="padding: inherit;">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>

          </div>
        </div>
    </nav>
  </div>