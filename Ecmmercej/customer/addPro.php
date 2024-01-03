<?php 
include("include/categoryDoa.php");
include("include/dbcon.php");
$cust_session = $_SESSION['custemr_email'];

  $get_cust = "select * from custemer where custemr_email='$cust_session'";

  $run_cust = mysqli_query($coon, $get_cust);

  $row_cust = mysqli_fetch_array($run_cust);

  $idCustm = $row_cust['custemr_id'];

  
?>

<h1 adivgn="center"> Add acount </h1>

<form action="" method="post" enctype="multipart/form-data"><!-- form Begin -->
    
<ul class="todo-divst">
      <?php
            
            $categoryDoa = new categoryDoa($pdo);
            $categorys = $categoryDoa->getAll();
            
              ?>
        <div class="form-group">
          <label for="Category">Category:</label>
          
          <select class="form-control" name="Categoryn" id="Category" required>
           <?php foreach ($categorys as $category) {
           echo "<option value='".$category->getId_cat()."'>".$category->getCat_name()."</option>"; 
          }
          ?>
            
          </select>
          
        </div>

        <div class="form-group">
          <label for="nom">Product Name:</label>
          <input class="form-control" type="text" name="name" id="nom" value="Product Name" required>
        </div>

        <div class="form-group">
          <label for="imge1">Image:</label>
          <input type="file" name="imge1" id="imge1" value="Image" required>
          <input type="file" name="imge2" id="imge2" value="Image" required>
        </div>

        <div class="form-group">
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
        </div>

        <div class="form-group ">
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
        </div>

        <div class="form-group ">
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
        </div>

        <div class="form-group ">
          <input class="btn btn-primary" type="submit" value="Submit" name="supmate">
        </div>
      </ul>
</form><!-- form Finish -->

<?php 

include("include/ProductDoa.php");

if(isset($_POST['supmate'])){
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
  $id_admin = null;
  $id_custem = $idCustm;

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

?>