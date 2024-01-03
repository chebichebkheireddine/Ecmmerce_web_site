<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header Page</title>
  <!-- Link Bootstrap CSS file -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Link custom CSS file -->
  <link rel="stylesheet" href="Style/style.css">
</head>
<body>
<header class="navbar navbar-expand-md navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">my</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item <?php if ($active == 'Home') echo 'active '?>">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item <?php if ($active == 'annonse') echo 'active '?>">
          <a class="nav-link" href="Annonses.php">Annonses</a>
        </li>
        <li class="nav-item <?php if ($active == 'myacount') echo 'active '?>">
          <a class="nav-link" href="Coustomer/myacount.php">my Acount </a>
        </li>
        <li class="nav-item <?php if ($active == 'aboutus') echo 'active '?>">
          <a class="nav-link" href="AboutUS.php">About us</a>
        </li>
        <li class="nav-item <?php if ($active == 'logein') echo 'active '?>">
          <a class="nav-link login-button <?php if ($active == 'logein') echo 'active ';else echo "";?> " href="Logein.php">Log in</a>
        </li>
        <li class="nav-item <?php if ($active == 'singup') echo 'active '?>">
          <a class="nav-link signup-button <?php if ($active == 'singup') echo 'active ';else
           echo "";?> " href="singup.php">Sign up free</a>
        </li>
      </ul>
    </div>

    
</header>
