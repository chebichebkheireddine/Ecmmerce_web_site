<?php $a = 'd'; //Set value of class active
include("include/slide.php");

?>

<div class="head-title">
  <div class="left">
    <h1>Insert category</h1>
    <ul class="breadcrumb">
      <li class="inputdoc">

        <a href="#">Insert category</a>
      </li>
      <li class="inputdoc">
        <i class='bx bx-chevron-right'></i>
      </li>
      <li class="inputdoc">

        <a class="active" href="#">Home</a>
      </li>
    </ul>
  </div>

</div>

<div class="table-data">
  <div class="prodect">
    <div class="head">
      <h3>Add New category</h3>
      <i class='bx bx-search'></i>
      <i class='bx bx-filter'></i>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <ul class="todo-list">
        <li class="form-group">
          <label for="nom">category Name:</label>
          <input class="form-control" type="text" name="name" id="nom" value="category Name" required>
        </li>
    
        <li class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="Description">Description:</label>
              <textarea class="form-control" name="Description" id="Description" value="Description"></textarea>
            </div>
          </div>
        </li>
        
        <li class="form-group">
          <input class="btn btn-primary" type="submit" value="Submit" name="insert">
        </li>
      </ul>
    </form>

  </div>
</div>
</div>

<?php

include("include/Db_conf.php"); // assuming the MedecinDAO class is defined in MedecinDAO.php
include("include/categoryDoa.php");

if (isset($_POST['insert'])) {

  
  $name = $_POST['name'];

  $cat_Des = $_POST['Description'];
$categoryDoa = new categoryDoa($pdo);
  $category = new category(
    $name,
    $cat_Des,
   );
  $categoryDoa->insert($category);
}

// Insert the new category and check for errors



?>