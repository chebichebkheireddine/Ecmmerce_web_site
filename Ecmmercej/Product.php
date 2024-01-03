
<?php 
include ('include/header.php');
include("include/ProductDoa.php");
include("include/categoryDoa.php");
require_once("include/dbcon.php");

			$productDoa = new ProductDoa($pdo);
			$products = $productDoa->getAllLimt();
      $products_all=$productDoa->getAll();

?>
<!--==Hot_products===========================-->
<section id="popular-product" class="hot-products">

<!--**heading********************-->
<div class="product-heading">
    <h3>Hot Product's</h3>
    <span>Here is the Best Product's For Buy</span>
</div>

<!--**container*****************-->
<div class="popular-product-container">

<?php
    foreach ($products_all as $product_all) {
      $categoryDoa = new CategoryDoa($pdo);
    $categoryId = $product_all->getIdCategory();
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

</section><!--==end===-->
<?php 
include ('include/footer.php');
?>
</body>
</html>