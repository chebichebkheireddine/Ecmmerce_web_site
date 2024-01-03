<!-- SIDEBAR -->

<section id="sidebar">
	<a href="#" class="brand">
		<i class='bx bxs-user'></i>
		<span class="text">Admin Page </span>
	</a>
	<ul class="side-menu top">
		<li <?php if ($a == "Dashboard")//active Page Dashboard.php
			echo 'class="active"';//Class active ?>>
			<a href="index.php?dashboard">
				<i class='bx bxs-dashboard'></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li <?php if ($a == "b")
			echo 'class="active"'; ?>>
			<a href="index.php?ProdectAdd">
				<i class='bx bxs-file-medical'></i>
				<span class="text">Insert Prodect </span>
			</a>
		</li>
		<li <?php if ($a == "d")
			echo 'class="active"'; ?>> <a href="index.php?category">
				<i class='bx bxs-calendar'></i>
				<span class="text">Insert category</span>
			</a>
		</li>
	</ul>
	<ul class="side-menu">
		
		<li>
			<a href="#?Logout" class="logout">
				<i class='bx bxs-log-out-circle'></i>
				<span class="text">Logout</span>
			</a>
		</li>
	</ul>
</section><!-- SIDEBAR -->