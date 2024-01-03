<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header Page</title>
  <!-- Link Bootstrap CSS file -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Link custom CSS file -->
  <link rel="stylesheet" href="Style/style.css">
</head>

<body>
  <?php
  $active = 'Home';
  include("includese/hader.php");
  ?>
  <section class="bg-image">
    <div class="centered-text">
      <h2>I love programing</h2>
      <p>Rani mrid ya 3IBAD rabi RAni WA7DI
      </p>
    </div>
  </section>

  <div class="about">
    all annonses
  </div>

  <div class="container-fluid">
    <div class="row px-xl-5">
      <!-- Shop Sidebar Start -->
      <div class="col-lg-3 col-md-4">
        <!-- Price Start -->
       
        <div class="bg-light p-4 mb-30">
          <form>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
              <input type="checkbox" class="custom-control-input" checked id="price-all">
              <label class="custom-control-label" for="price-all">All Price</label>
              <span class="badge border font-weight-normal">1000</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
              <input type="checkbox" class="custom-control-input" id="price-1">
              <label class="custom-control-label" for="price-1">$0 - $100</label>
              <span class="badge border font-weight-normal">150</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
              <input type="checkbox" class="custom-control-input" id="price-2">
              <label class="custom-control-label" for="price-2">$100 - $200</label>
              <span class="badge border font-weight-normal">295</span>
            </div>
            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
              <input type="checkbox" class="custom-control-input" id="price-3">
              <label class="custom-control-label" for="price-3">$200 - $300</label>
              <span class="badge border font-weight-normal">246</span>
            </div>


          </form>
        </div>
        <!-- Price End -->
      </div>
      <div class="col-lg-9 col-md-8">
        <div class="row pb-3">
          
          <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
              <div class='product-img position-relative overflow-hidden'>
                <img class="img-fluid w-100" src="Imeges/imgesub.jpg" alt="">
                <div class="product-action">
                  <a class='btn btn-outline-dark btn-square' href=''><i class='fas fa-cart-shopping '></i></a>
                  <a class="btn btn-outline-dark btn-square" href=""><i class="fas fa-heart"></i></a>
                  <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                  <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
              </div>
              <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="">test</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                  <h5>$123.00</h5>
                  <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small>(99)</small>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <!-- Link Bootstrap JS file -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- JavaScript for mobile navigation -->

</body>