<div class="panel panel-default sidebar-menu">
    
<?php 
    $customer_session = $_SESSION['custemr_email'];
    $get_customer = "select * from custemer where custemr_email='$customer_session'";
    $run_customer = mysqli_query($coon,$get_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_image = $row_customer['custemr_img'];
    $customer_name = $row_customer['custemr_nom'];
    
    if(!isset($_SESSION['custemr_email'])){
    } else {
        echo "<center>";
        echo "<img src='../imge/$customer_image' class='img-fluid coo' style='width: 100px; height: 100px; object-fit: cover; border-radius: 50%;'>";
        echo "</center>";
        echo "<br/>";
        echo "<h3 class='panel-title' align='center'>Nom: $customer_name</h3>";
    }
?>

<div class="panel-body">
    <ul class="nav-pills nav-stacked nav">
        <li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">
            <a href="my_account.php?edit_account">
                <i class="fa fa-pencil"></i> Edit Account
            </a>
        </li>
        <li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">
            <a href="my_account.php?change_pass">
                <i class="fa fa-user"></i> Change Password
            </a>
        </li>
        <li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">
            <a href="my_account.php?delete_account">
                <i class="fa fa-trash-o"></i> Delete Account
            </a>
        </li>
        <li class="<?php if(isset($_GET['add_pro'])){ echo "active"; } ?>">
            <a href="my_account.php?add_pro">
                <i class="fa fa-plus"></i> Add Product
            </a>
        </li>
        <li class="<?php if(isset($_GET['add_cart'])){ echo "active"; } ?>">
            <a href="my_account.php?add_cart">
                <i class="fa fa-cart-plus"></i> Add to Cart
            </a>
        </li>
        <li>
            <a href="../logout.php">
                <i class="fa fa-sign-out"></i> Log Out
            </a>
        </li>
    </ul>
</div>
    
</div>
