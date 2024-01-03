<?php
session_start();
include("include/Db_conf.php");
if (!isset($_SESSION['admin_email'])) {

	echo "<script>window.open('login.php','_self')</script>";
} else {
	$admin_session = $_SESSION['admin_email'];

	$get_admin = "select * from admins where admin_email='$admin_session'";

	$run_admin = mysqli_query($coon, $get_admin);

	$row_admin = mysqli_fetch_array($run_admin);

	$admin_id = $row_admin['admin_id'];

	$admin_name = $row_admin['admin_name'];

	$admin_email = $row_admin['admin_email'];

	$admin_image = $row_admin['admin_image'];

	$admin_country = $row_admin['admin_country'];

	$admin_about = $row_admin['admin_about'];

	$admin_contact = $row_admin['admin_contact'];

	$admin_job = $row_admin['admin_job']; ?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Boxicons -->
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Bootstrap Icons CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bxslider/jquery.bxslider.min.css">
		<!-- Custom CSS -->
		<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
		<!-- My CSS -->
		<link rel="stylesheet" href="style.css">

		<title>AdminHub</title>
	</head>

	<body>

		<!-- CONTENT -->
		<?php
		$a = "a"; /*Call slider bare to this code */
		include("include/slide.php");
		?>
		<section id="content">
			<!-- NAV -->
			<?php include("include/nav.php"); /*Call slider bare to this code */?>
			<!-- NAV -->
			<!-- MAIN -->
			<main>
				<?php
				/*Make post and get for change elmnt of dashboard yes ix the corect why to fo it*/
				if (isset($_GET['dashboard'])) {
					# code...of call page 
			
					include("dashboard.php");


				}
				if (isset($_GET['ProdectAdd'])) {
					# code...of call page 
					include("ProdectAdd.php");

				}
				if (isset($_GET['idp'])) {
					# code...of call page 
					include("Appointments.php");

				}
				if (isset($_GET['category'])) {
					# code...of call page 
					include("category.php");

				}
				if (isset($_GET['idedit'])) {
					# code...of call page 
					include("ProdectEdite.php");

				}
				
			

				?>
			</main>

			<!-- MAIN -->
		</section>
		<!-- CONTENT -->





	<?php } ?>
	<script src="script.js"></script>
</body>

</html>