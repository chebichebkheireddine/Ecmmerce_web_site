<!DOCTYPE html>
<html>
<head>
	<title>Add New Product</title>
</head>
<body>

	<h1>Add New Product</h1>

	<form method="POST" action=""enctype="multipart/form-data">

		<label for="id_catgor">Category:</label>
		<input type="text" name="id_catgor" required>

		<label for="date">Date:</label>
		<input type="date" name="date" required>

		<label for="product_name">Product Name:</label>
		<input type="text" name="product_name" required>

		<label for="product_img1">Image 1:</label>
		<input type="file" name="product_img1" required>

		<label for="product_img2">Image 2:</label>
		<input type="file" name="product_img2">

		<label for="product_qut">Quantity:</label>
		<input type="number" name="product_qut" required>

		<label for="product_prise">Price:</label>
		<input type="number" name="product_prise"step="any" required>

		<label for="product_prise_old">Old Price:</label>
		<input type="number" name="product_prise_old" step="any">

		<label for="product_des">Description:</label>
		<textarea name="product_des" required></textarea>

		<label for="product_plase">Place:</label>
		<input type="text" name="product_plase" required>

		<label for="product_keyword">Keywords:</label>
		<input type="text" name="product_keyword" required>

		<label for="id_admin">Admin ID:</label>
		<input type="text" name="id_admin" required>

		<label for="id_custm">Customer ID:</label>
		<input type="text" name="id_custm" required>

		<button type="submit">Add Product</button>

	</form>
	<style>form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="date"],
input[type="number"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #3e8e41;
}
</style>

</body>
</html>
<?php
    include("ProductDoa.php");
    require_once("dbcon.php");
    
	
    $id_category = $_POST['id_catgor'];
    $date = $_POST['date'];
    $pro_name = $_POST['product_name'];

    // Get the temporary location of the uploaded files
    $pro_img1_tmp = $_FILES['product_img1']['tmp_name'];
    $pro_img2_tmp = $_FILES['product_img2']['tmp_name'];

    // Get the original name of the uploaded files
    $pro_img1_name = $_FILES['product_img1']['name'];
    $pro_img2_name = $_FILES['product_img2']['name'];

    // Move the uploaded files to a permanent location
    $pro_img1_dest = "/uploads" . $pro_img1_name;
    $pro_img2_dest = "/uploads" . $pro_img2_name;

    move_uploaded_file($pro_img1_tmp, $pro_img1_dest);
    move_uploaded_file($pro_img2_tmp, $pro_img2_dest);

    $pro_qute = $_POST['product_qut'];
    $pro_prise = $_POST['product_prise'];
    $pro_prise_Old = $_POST['product_prise_old'];
    $pro_Des = $_POST['product_des'];
    $pro_keywored = $_POST['product_keyword'];
    $pro_plase = $_POST['product_plase'];
    $id_admin = $_POST['id_admin'];
    $id_custem = $_POST['id_custm'];

    $productDoa = new ProductDoa($pdo);
    $product = new Product(
        $id_category,
        $date,
        $pro_name,
        $pro_img1_name,
        $pro_img2_name,
        $pro_qute,
        $pro_prise,
        $pro_prise_Old,
        $pro_keywored,
        $pro_Des,
        $pro_plase,
        $id_admin,
        $id_custem
    );

    // Insert the new product and check for errors
    
    $productDoa->insert($product);
    
    echo "Product inserted successfully!";
?>

