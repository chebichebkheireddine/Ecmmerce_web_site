<?php
session_start();
include("include/Db_conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--main template css file -->
   <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section class="wrapper">
        <div class="form login">
            <header>Login</header>
            <form action="" method="post">
                <input type="text" placeholder="Email address" name="Email" required />
                <input type="password" placeholder="Password" name="Password" required />
                <input type="submit" value="Login" name="LogeIN" />
            </form>
        </div>

        
    </section>
</body>
</html>

<?php 

    if(isset($_POST['LogeIN'])){
        
        $admin_email = mysqli_real_escape_string($coon,$_POST['Email']);
        
        $admin_pass = mysqli_real_escape_string($coon,$_POST['Password']);
        
        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
        
        $run_admin = mysqli_query($coon,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['admin_email']=$admin_email;
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>