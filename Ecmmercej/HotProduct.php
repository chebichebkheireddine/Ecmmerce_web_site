
<?php 
include ('include/header.php');
include("include/ProductDoa.php");
include("include/categoryDoa.php");
require_once("include/dbcon.php");
$productDoa = new ProductDoa($pdo);
$products = $productDoa->getAllLimt();
$id_pro= $_GET['id'];
$productsByID=$productDoa->getByeID($id_pro);
$categoryDoa = new CategoryDoa($pdo);
$categoryId = $productsByID->getIdCategory();
$category = $categoryDoa->getByeID($categoryId);
$categoryName = $category->getCat_name();

?>

    <!--==Product-Details============================-->
    <section id="product_details" style="
    margin-top: 200px;
">

        <!--**img*************-->
        <div class="d-product-img">
            <img src="img_pro/<?php echo $productsByID->getProImg1() ?>" alt=""/>
        </div>
        <!--**text************-->
        <div class="d-product-text">
            <!--category-->
            <span class="category"><?php echo $categoryName ?> > <?php echo $productsByID->getProName() ?></span>
            <!--title-->
            <strong><?php echo $productsByID->getProName() ?></strong>
            <!--rating-->
            
            <!--details-->
            
            <p><?php echo $productsByID->getProDes() ?></p>
            <!--price-->
            <span class="price"><?php echo $productsByID->getProPrise() ?> <del><?php echo $productsByID->getProPriseOld() ?></del></span>
            <!--quantity-->
            <div class="quantity">
                <span>Quantity: </span>
                <input type="number" value="<?php echo $productsByID->getPro_qute() ?>"/>
            </div>
            <!--btn-->
            <a href="index.php?Add_sav=<?php echo $productsByID->getIdPro()?>">Add To Cart</a>
        </div>

    </section><!--details-end-->


    <!--==Relative-product's===========================-->
    <section id="popular-product" class="relative-products">

        <!--**heading********************-->
        <div class="product-heading">
            <h3>Relative Product's</h3>
            <a>All</a>
        </div>

        <!--**container*****************-->
        <div class="popular-product-container">
        <?php
    foreach ($products as $product) {
      $categoryDoa = new CategoryDoa($pdo);
    $categoryId = $product->getIdCategory();
    $category = $categoryDoa->getByeID($categoryId);
    $categoryName = $category->getCat_name();?>
            <!--**box1***-->
            <div class="product-box">
                <!--img-->
                <a href="#" class="product-img">
                    <img src="img_pro/<?php echo $product->getProImg1() ?>" alt="">
                </a>
                <!--text-->
                <div class="product-text">
                    <!--title-->
                    <a href="#" class="product-box-p-name"><?php echo $product->getProName() ?></a>
                    <!--category-->
                    <span class="p-box-category">
                        <a><?php echo $categoryName ?></a> > <a><?php echo $product->getProName() ?></a>
                    </span>
                    <!--details-->
                    <p><?php echo $product->getProDes() ?></p>
                    <!--price-->
                    <span class="p-box-price"><?php echo $product->getProPrise() ?></span>
                    <del><?php echo $product->getProPriseOld() ?></del>
                </div>
            </div><!--box-end-->
            <?php }?>

        </div>

    </section><!--==relative-end===-->

    <?php 
include ('include/footer.php');
?>
</body>
</html>