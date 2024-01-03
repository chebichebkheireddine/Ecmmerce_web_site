<?php $a = 'Dashboard'; //Set value of class active
include("include/slide.php");
include("include/Db_conf.php");
include("include/ProductDoa.php");
include("include/categoryDoa.php");

$totalOrders = 0;
$totalcartegory = 0;
try {
    $stmt = $pdo->prepare('SELECT COUNT(*) FROM product');
    $stmt->execute();
    $totalOrders = $stmt->fetchColumn();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
try {
    $stmt = $pdo->prepare('SELECT COUNT(*) FROM category');
    $stmt->execute();
    $totalcartegory = $stmt->fetchColumn();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$productDoa = new ProductDoa($pdo);
$products = $productDoa->getAll();
if (isset($_POST['delete'])) {
	$id = $_POST['ide'];
	$productDoa->delet($id);
}

?>
<div class="head-title">
	<div class="left">
		<h1>Dashboard</h1>
		<ul class="breadcrumb">
			<li>
				<a href="#">Dashboard</a>
			</li>
			<li><i class='bx bx-chevron-right'></i></li>
			<li>
				<a class="active" href="#">Home</a>
			</li>
		</ul>
	</div>
	<a href="#" class="btn-download">
		<i class='bx bxs-cloud-download'></i>
		<span class="text">Download PDF</span>
	</a>
</div>

<ul class="box-info">
<li>
    <i class='bx bxs-calendar-check'></i>
    <span class="text">
        <h3><?php echo $totalOrders; ?></h3>
        <p>New Order</p>
    </span>
</li>
	<li>
		<i class='bx bxs-group'></i>
		<span class="text">
			<h3><?php echo $totalcartegory;?></h3>
			<p>category</p>
		</span>
	</li>
	<li>
		<i class='bx bxs-dollar-circle'></i>
		<span class="text">
			<h3>$2543</h3>
			<p>Total Sales</p>
		</span>
	</li>
</ul>


<div class="table-data">
	<div class="order">
		<div class="head">
			<h3>Product List</h3>
			<i class='bx bx-search'></i>
			<i class='bx bx-filter'></i>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Category</th>
					<th>Date</th>
					<th>Product</th>
					<th>Image 1</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Old Price</th>
					<th>Description</th>
					<th>Place</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
		foreach ($products as $product) {
    $categoryDoa = new CategoryDoa($pdo);
    $categoryId = $product->getIdCategory();
    $category = $categoryDoa->getByeID($categoryId);
    $categoryName = $category->getCat_name();
    
    echo '<tr>';
    echo '<td>' . $product->getIdPro() . '</td>';
    echo '<td>' . $categoryName . '</td>';
    echo '<td>' . $product->getDate() . '</td>';
    echo '<td>' . $product->getProName() . '</td>';
    echo '<td><img src="../img_pro/' . $product->getProImg1() . '" class="img-fluid"></td>';
    echo '<td>' . $product->getPro_qute() . '</td>';
    echo '<td>' . $product->getProPrise() . '</td>';
    echo '<td>' . $product->getProPriseOld() . '</td>';
    echo '<td>' . $product->getProDes() . '</td>';
    echo '<td>' . $product->getProPlase() . '</td>';
    echo '<td>
        <a href="index.php?idedit=' . $product->getIdPro() . '">Edit</a> |
        <form method="post" style="display:inline">
            <input type="hidden" name="ide" value="' . $product->getIdPro() . '">
            <button type="submit" name="delete" onclick="return confirm(\'Are you sure you want to delete this product?\')">Delete</button>
        </form>
    </td>';
    echo '</tr>';
}
				?>
			</tbody>
		</table>
	</div>
</div>