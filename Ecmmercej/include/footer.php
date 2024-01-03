
<body>
<footer>

<!--**payment-method******************-->
<div class="footer-payment">
    <!--logo's-->
    <div class="footer-payment-logos">
        <img src="images/master_card.png" alt="">
        <img src="images/visa.png" alt="">
        <img src="images/paypal.png" alt="">
        <img src="images/ebay.png" alt="">
    </div>
    <!--text-->
    <strong>Safe And Secure Payment Method's</strong>
</div>

<!--**container***********************-->
<div class="footer-container">

    <!--**company**-->
    <div class="footer-company-box">
        <!--social-box-->
        <div class="footer-social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>

    <!--**link-box**-->
    <div class="footer-link-box">
        <strong>Main Link's</strong>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
        </ul>
    </div>

    <!--**link-box**-->
    <div class="footer-link-box">
        <strong>External Link's</strong>
        <ul>
            <li><a href="#">Our Product's</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Trem's and Condition's</a></li>
        </ul>
    </div>

    <!--**subscribe**-->
    <div class="footer-subscribe">
        <strong>Subscribe Now</strong>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        <!--subscribe-box-->
        <div class="subscribe-box">
            <input type="email" placeholder="Example@gmail.com" required/>
            <button>Subscribe</button>
        </div>
    </div>

</div><!--container-end-->

<!--**bottom********************-->
<div class="footer-bottom">
    <span class="footer-owner">Made By Going To Internet</span>
    <span class="copyright">&#169; Copyright 2022 - Going To Internet</span>
</div>

</footer>


<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.slider').slick({
    slidesToShow: 3, // number of items to show at once
    slidesToScroll: 1, // number of items to scroll per slide
    autoplay: true, // set to true to enable autoplay
    autoplaySpeed: 3000, // time between slide transitions in milliseconds
    dots: true, // set to true to show navigation dots
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});
$(document).ready(function() {
        $("#myBtn").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#myBtn1").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#myBtn3").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#myBtn5").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#myBtn6").click(function() {
            $("#myModal").modal();
        });
    });
    $(document).ready(function() {
        $("#myBtn33").click(function() {
            $("#myModel").modal();
        });
    });
</script>

</body>
</html>




















