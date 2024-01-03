<?php
include("include/header.php");

if (!isset($_SESSION['custemr_email'])) {
} else {
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Mon Compte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        /* Add custom CSS styles here */
        .myacount {
            margin-top: 50px;
        }
        .box {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 5px #ccc;
            padding: 20px;
        }
        .new{
            padding-top: 200px;
        }
        .panel-default.sidebar-menu {
    margin-bottom: 20px;
    margin: 10px;
    border-radius: 0;
    border-color: #e6e6e6;
    box-shadow: none;
}
.nav-pills {
  display: flex;
  flex-direction: column;
  padding: 0;
  margin: 0;
}

.nav-pills li {
  margin-bottom: 10px;
  list-style: none;
}

.nav-pills li a {
  display: block;
  padding: 10px;
  background-color: #f1f1f1;
  color: #333;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.nav-pills li a:hover {
  background-color: #333;
  color: #fff;
}


.panel-default.sidebar-menu .panel-body {
    padding: 0;
}

.panel-default.sidebar-menu .nav-pills>li {
    border-bottom: 1px solid #e6e6e6;
}

.panel-default.sidebar-menu .nav-pills>li>a {
    color: #333;
    background-color: #f8f8f8;
    padding: 10px 15px;
}

.panel-default.sidebar-menu .nav-pills>li>a:hover, 
.panel-default.sidebar-menu .nav-pills>li.active>a {
    background-color: #e6e6e6;
}

.panel-default.sidebar-menu .nav-pills>li>i {
    margin-right: 10px;
}

.panel-default.sidebar-menu .panel-title {
    margin-top: 20px;
    margin-bottom: 0;
    font-size: 18px;
}

.panel-default.sidebar-menu .coo {
    margin-top: 20px;
}

    </style>
</head>

<body>

<div class="new">
    <div id="content">
        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <?php
                    include("include/sidebar.php");
                    ?>
                </div>

                <div id="Save" class="col-md-9">
                    <div class="box">
                        <?php
                        if (isset($_GET['edit_account'])) {
                            include("edit_account.php");
                        } elseif (isset($_GET['change_pass'])) {
                            include("change_pass.php");
                        } elseif (isset($_GET['delete_account'])) {
                            include("delete_account.php");
                        } elseif (isset($_GET['add_pro'])) {
                            include("addPro.php");
                        }elseif (isset($_GET['add_cart'])) {
                            include("my_Save.php");
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <?php
    include("include/footer.php");
    ?>

    <script src="js/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
<?php
}
?>
