<?php $a = "b";
include("include/slide.php");
include("include/categoryDoa.php");
include("include/Db_conf.php"); // assuming the MedecinDAO class is defined in MedecinDAO.php

?>
<div class="head-title">
  <div class="left">
    <h1>Insert prodect</h1>
    <ul class="breadcrumb">
      <li class="">

        <a href="#">Insert prodect</a>
      </li>
      <li class="">
        <i class='bx bx-chevron-right'></i>
      </li>
      <li class="">

        <a class="active" href="#">Home</a>
      </li>
    </ul>
  </div>

</div>

<div class="table-data">
  <div class="prodect">
    <div class="head">
      <h3>Add New Product</h3>
      <i class='bx bx-search'></i>
      <i class='bx bx-filter'></i>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <ul class="todo-list">
      <?php
            
            $categoryDoa = new categoryDoa($pdo);
            $categorys = $categoryDoa->getAll();
            
              ?>
        <li class="form-group">
          <label for="Category">Category:</label>
          
          <select class="form-control" name="Categoryn" id="Category" required>
           <?php foreach ($categorys as $category) {
           echo "<option value='".$category->getId_cat()."'>".$category->getCat_name()."</option>"; 
          }
          ?>
            
          </select>
          
        </li>

        <li class="form-group">
          <label for="nom">Product Name:</label>
          <input class="form-control" type="text" name="name" id="nom" value="Product Name" required>
        </li>

        <li class="form-group">
          <label for="imge1">Image:</label>
          <input type="file" name="imge1" id="imge1" value="Image" required>
          <input type="file" name="imge2" id="imge2" value="Image" required>
        </li>

        <li class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="Quantity">Quantity:</label>
              <input class="form-control" type="number" name="Quantity" id="Quantity" value="Quantity" required>
            </div>
            <div class="col-md-6">
              <label for="Price">Price:</label>
              <input class="form-control" type="number" name="Price" id="Price" value="Price">
            </div>
          </div>
        </li>

        <li class="form-group ">
          <div class="row">
            <div class="col-md-6">
              <label for="Description">Description:</label>
              <textarea class="form-control" name="Description" id="Description" value="Description"></textarea>
            </div>
            <div class="col-md-6">
              <label for="Price2">PriceOld:</label>
              <input class="form-control" type="number" name="PriceOld" id="Price2" value="PriceOld">
            </div>
          </div>
        </li>

        <li class="form-group ">
          <div class="row">
            <div class="col-md-6">
              <label for="Keywords">Keywords:</label>
              <input class="form-control" type="text" name="Keywords" id="Keywords" value="Keywords">
            </div>
            <div class="col-md-6">
              <label for="Place">Place:</label>
              <input class="form-control" type="text" name="Place" id="Place" value="Place">
            </div>
          </div>
        </li>

        <li class="form-group ">
          <input class="btn btn-primary" type="submit" value="Submit" name="supmate">
        </li>
      </ul>
    </form>

  </div>
</div>
</div>

<?php


include("include/ProductDoa.php");
if (isset($_POST['supmate'])) {

  # code...
  $id_category = $_POST['Categoryn'];
  $date = date('Y-m-d H:i:s');
  $pro_name = $_POST['name'];

  // Get the temporary location of the uploaded files
  $pro_img1_tmp = $_FILES['imge1']['tmp_name'];
  $pro_img2_tmp = $_FILES['imge2']['tmp_name'];

  // Get the original name of the uploaded files
  $pro_img1_name = $_FILES['imge1']['name'];
  $pro_img2_name = $_FILES['imge2']['name'];

  // Move the uploaded files to a permanent location
  $pro_img1_dest = '..\img_pro\\' . $pro_img1_name;
  $pro_img2_dest = '..\img_pro\\' . $pro_img2_name;

  move_uploaded_file($pro_img1_tmp, $pro_img1_dest);
  move_uploaded_file($pro_img2_tmp, $pro_img2_dest);

  $pro_qute = $_POST['Quantity'];
  $pro_prise = $_POST['Price'];
  $pro_prise_Old = $_POST['PriceOld'];
  $pro_Des = $_POST['Description'];
  $pro_keywored = $_POST['Keywords'];
  $pro_plase = $_POST['Place'];
  $id_admin = 1;
  $id_custem = 2;

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
  $productDoa->insert($product);
}

// Insert the new product and check for errors



?>