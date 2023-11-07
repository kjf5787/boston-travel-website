	<!-- navigation bar -->
	<nav>
		<div class="logo">
			<img src="<?php echo $path; ?>assets/images/logo.png" alt="An MA Local's logo">
		</div> <!-- end .logo -->
		<div class="hamburgerIcon" onclick="transformHamburger()">
			<div id="bar1"></div>
  			<div id="bar2" style="opacity: 1;"></div> <!-- inline styles used to be accessed in js through the DOM Element style property -->
  			<div id="bar3"></div>
		</div> <!-- end .hamburgerIcon -->
		<div class="dropdown">
			<ul>
				<li class="mainmenu"><a href="<?php echo $path; ?>index.php">Home</a></li>
				<li class="mainmenu">Meals
					<ul class="submenu">
						<li><a href="<?php echo $path; ?>meals/bostonBurger.php">Boston Burger Company</a></li>
						<li><a href="<?php echo $path; ?>meals/reginaPizzeria.php">Regina Pizzeria</a></li>
						<li><a href="<?php echo $path; ?>meals/mikesPastry.php">Mike's Pastry</a></li>
					</ul>
				</li>
				<li class="mainmenu">Exhibits
					<ul class="submenu">
						<li><a href="<?php echo $path; ?>exhibits/artMuseum.php">Museum of Fine Arts</a></li>
						<li><a href="<?php echo $path; ?>exhibits/scienceMuseum.php">Museum of Science</a></li>
						<li><a href="<?php echo $path; ?>exhibits/aquarium.php">New Englad Aquarium</a></li>
					</ul>
				</li>
				<li class="mainmenu">Adventures
					<ul class="submenu">
						<li><a href="<?php echo $path; ?>adventures/duckTours.php">Duck Tours</a></li>
						<li><a href="<?php echo $path; ?>adventures/newbury.php">Newbury Street</a></li>
						<li><a href="<?php echo $path; ?>adventures/bostonCommon.php">Boston Common</a></li>
					</ul>
				</li>
				<li class="mainmenu"><a href="<?php echo $path; ?>contact.php">Contact</a></li>
			</ul>
		</div> <!-- end .dropdown -->
	</nav>