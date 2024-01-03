<?php 
include ('include/header.php');
include("include/ProductDoa.php");
include("include/categoryDoa.php");
require_once("include/dbcon.php");

			$productDoa = new ProductDoa($pdo);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               
                $search_query = $_POST['search'];
                $search=$productDoa->searchByName($search_query);
            
            ?>
            <div class="r-product-container"style="
    margin-top: 200px;
">
    
    <!--*box1*-->
    <?php
    foreach ($search as $product) {
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
<?php }?>