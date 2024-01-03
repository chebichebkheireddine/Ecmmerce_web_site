
<?php 
include ('include/header.php');
include("include/ProductDoa.php");
include("include/categoryDoa.php");
require_once("include/dbcon.php");

			$productDoa = new ProductDoa($pdo);
			$products = $productDoa->getAllLimt();
      $products_all=$productDoa->getAll();
    
      
		
include ('include/landing.php');

?>


 <!--==Recent-Product=========================-->
 <section class="recent-product">

<!--**heading********************-->
<div class="product-heading">
    <h3>Recent Product's</h3>
    <a>All</a>
</div>

<!--**container******************-->
<div class="r-product-container">
    
    <!--*box1*-->
    <?php
    foreach ($products as $product) {
      $categoryDoa = new CategoryDoa($pdo);
    $categoryId = $product->getIdCategory();
    $category = $categoryDoa->getByeID($categoryId);
    $categoryName = $category->getCat_name();?>
    <div class="r-product-box">
        <!--img-->
        <div class="r-product-img">
            <img src="img_pro/<?php echo $product->getProImg1() ?>" />
        </div>
        <!--text-->
        <div class="r-product-text">
            <!--title-->
            <a href="#" class="product-box-p-name"><?php echo $product->getProName() ?></a>
            <!--category-->
            <span class="p-box-category">
                <a><?php echo $categoryName?></a> > <a><?php echo $product->getProName() ?></a>
            </span>
            <!--price-->
            <span class="p-box-price">$<?php echo $product->getProPrise() ?><del>$<?php echo $product->getProPriseOld() ?></del></span>
        </div>
    </div><!--box-end-->
    <?php }?>

</div>

</section><!--recent-end-->




<!--==Sale==================================-->
<section class="sale">

<!--**box1**********************-->
<div class="sale-box">
    <!--img-->
    <img src="images/sale-1.jpg" />
    <!--text-->
    <a href="#" class="sale-text">
        <strong>Laptop With Touch Screen</strong>
        <span>Sale Off 25%</span>
    </a>
</div>
<!--**box2**********************-->
<div class="sale-box">
    <!--img-->
    <img src="images/sale-2.jpg" />
    <!--text-->
    <a href="#" class="sale-text">
        <strong>Apple Smart Watch</strong>
        <span>Sale Off 25%</span>
    </a>
</div>
<!--**box3**********************-->
<div class="sale-box">
    <!--img-->
    <img src="images/sale-3.jpg" />
    <!--text-->
    <a href="#" class="sale-text">
        <strong>Android Wire Handfree</strong>
        <span>Sale Off 25%</span>
    </a>
</div>

</section><!--sale-end-->
<!--==Popular-product's===========================-->
<section id="popular-product">

<!--**heading********************-->
<div class="product-heading">
    <h3>Popular Product's</h3>
    <a>All</a>
</div>

<!--**container*****************-->
<div class="popular-product-container">

<?php
    foreach ($products_all as $product_all) {
      $categoryDoa = new CategoryDoa($pdo);
    $categoryId = $product->getIdCategory();
    $category = $categoryDoa->getByeID($categoryId);
    $categoryName = $category->getCat_name();?>
    <!--**box1***-->
    <div class="product-box">
        <!--img-->
        <a href="HotProduct.php?id=<?php echo $product_all->getIdPro() ; ?>" class="product-img">
            <img src="img_pro/<?php echo $product_all->getProImg1() ?>" alt="">
        </a>
        <!--text-->
        <div class="product-text">
            <!--title-->
            <a href="#" class="product-box-p-name"><?php echo $product_all->getProName() ?></a>
            <!--category-->
            <span class="p-box-category">
                <a><?php echo $categoryName?></a> > <a><?php echo $categoryName ?></a>
            </span>
            <!--details-->
            <p><?php echo $product_all->getProDes() ?></p>
            <!--price-->
            <span class="p-box-price"><?php echo $product_all->getProPrise() ?></span>
            <del><?php echo $product_all->getProPriseOld() ?></del>
        </div>
    </div><!--box-end-->
<?php }?>
</div>

</section><!--==popular-end===-->



<!--==contact===============================-->
<section class="home-contact">

<!--text-->
<div class="h-contact-text">
    <span>Support</span>
    <h3>Need Any Help?</h3>
    <a href="contact.php">Contact Us</a>
</div>
<!--img-->
<img src="images/contact_bg.webp" class="contact-bg-right" />
<img src="images/contact_bg1.jpg" class="contact-bg-left">

</section><!--contact-end-->


<!--==Services==============================-->
<section class="services">

<!--**box1**************-->
<div class="services-box">
    <i class="fa-solid fa-truck-fast"></i>
    <span>Free Shipping</span>
    <p>Free Shipping for all Us Order's</p>
</div>
<!--**box2**************-->
<div class="services-box">
    <i class="fa-solid fa-headphones-simple"></i>
    <span>Support 24/7</span>
    <p>We Support 24h a day</p>
</div>
<!--**box**************-->
<div class="services-box">
    <i class="fa-solid fa-rotate"></i>
    <span>100% Money back</span>
    <p>You Have 30 Day's To Return's</p>
</div>

</section><!--services-end-->
<?php 
include ('include/footer.php');
?>

</body>
</html>