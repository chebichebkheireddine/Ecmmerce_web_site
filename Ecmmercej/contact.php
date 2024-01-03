<?php 
include ('include/header.php');
?>
<div class="container-2"style="
    margin-top: 250px;
">
		<main class="rowu">
			
			<!--  *******   Left Section (Col1umn) Starts   *******  -->

			<section class="col1 left">
				
				<!--  *******   Title Starts   *******  -->

				<div class="contactTitle">
					<h2>Contact Info</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				</div>

				<!--  *******   Title Ends   *******  -->

				<!--  *******   Contact Info Starts   *******  -->

				<div class="contactInfo">
					
					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="details-1">
							<span class="sp">Phone</span>
							<span class="sp">+00 110 111 00</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="details-1">
							<span class="sp">Email</span>
							<span class="sp">name.tutorial@gmail.com</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="details-1">
							<span class="sp">Location</span>
							<span class="sp">X Street, Y Road, San Fransisco</span>
						</div>
					</div>

				</div>

				<!--  *******   Contact Info Ends   *******  -->

				<!--  *******   Social Media Starts   *******  -->

				<div class="socialMedia">
					<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>

				<!--  *******   Social Media Ends   *******  -->

			</section>

			<!--  *******   Left Section (Col1umn) Ends   *******  -->

			<!--  *******   Right Section (Col1umn) Starts   *******  -->

			<section class="col1 right">
				
				<!--  *******   Form Starts   *******  -->

				<form class="messageForm">
					
					<div class="inputGroup halfWidth">
						<input type="text" name="" required="required">
						<label>Your Name</label>
					</div>

					<div class="inputGroup halfWidth">
						<input type="email" name="" required="required">
						<label>Email</label>
					</div>

					<div class="inputGroup fullWidth">
						<input type="text" name="" required="required">
						<label>Subject</label>
					</div>

					<div class="inputGroup fullWidth">
						<textarea required="required"></textarea>
						<label>Say Something</label>
					</div>

					<div class="inputGroup fullWidth">
						<button>Send Message</button>
					</div>

				</form>

				<!--  *******   Form Ends   *******  -->
			</section>

			<!--  *******   Right Section (Col1umn) Ends   *******  -->

		</main>
	</div>

<?php 
include ('include/footer.php');
?>
</body>
</html>