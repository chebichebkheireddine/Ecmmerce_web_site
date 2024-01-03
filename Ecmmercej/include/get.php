<?php
			
			include("ProductDoa.php");
			require_once("dbcon.php");
            $productDoa = new ProductDoa($pdo);
			

            
            ?>
            <!DOCTYPE html>
<html>
<head>
	<title>Product Detail</title>
</head>
<body>

	<?php
    $id_category="";
    $date="";
    $pro_name="";
    $pro_img1="";
    $pro_img2="";
    $pro_qute="";
    $pro_prise="";
    $pro_prise_Old="";
    $pro_keywored="";
    $pro_Des="";
    $pro_plase="";
    $id_admin="";
    $id_custem="";
		// include the Product class and create a new instance of the class
		$product = new Product($id_category="",
        $date="",
        $pro_name="",
        $pro_img1="",
        $pro_img2="",
        $pro_qute="",
        $pro_prise="",
        $pro_prise_Old="",
        $pro_keywored="",
        $pro_Des="",
        $pro_plase="",
        $id_admin="",
        $id_custem="");

		// call the getByeID function to get the product details based on the ID
		$id_pro = 6; // set the ID of the product you want to display
		$product_data = $productDoa->getByeID($id_pro);

		// generate HTML output based on the product details
		if ($product_data) {
			echo '<h1>' . $product_data->getProName() . '</h1>';
			echo '<img src="' .$product_data->getProImg1() . '" alt="' . $product_data->getProName() . '">';
			echo '<p>' . $product_data->getProDes() . '</p>';
			echo '<p>Price: $' . $product_data->getProPrise() . '</p>';
		} else {
			echo '<p>Product not found</p>';
		}
	?>

</body>
</html>
