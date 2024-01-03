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
</script>
