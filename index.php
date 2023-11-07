<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Home";
	$path = "./";
	$stylesheet = "indexStyles";
	$script = "slideshow";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");

?>

	<!-- hero section -->
	<div class="heroImage">
		<div class="heroText">
			<h1>BOSTON</h1>
			<div id="subtitle">The capital city of Massachusetts is waiting to be explored.</div> <!-- subtitle -->
		</div> <!-- end .heroText -->
	</div> <!-- end .heroImage -->

	<!-- information section -->
	<section class="about">
		<h2>About Boston</h2>
		<p>Boston is a city with delicious food, wonderful sites to see, places to explore, and a rich history. Come for a view of beautiful buildings, fresh greenery, and blue waters.  Come for a lesson on one of the most historically significant cities in the US. Come for a good time at some of Boston’s many exhibits or sites to see. Come for a meal at one of the many restaurants that could become your new favorite. And on your way in, get a Dunkin’ Donuts coffee like the locals do every day.</p>
	</section>

	<!-- slideshow -->
	<div class="slideshowSection">
		<h2>Explore the City</h2>
		<div class="slideshowBox">
			<!-- inline styles used below so that they may be accessed in js through the DOM Element style property -->
			<h3 id="slideTitle" style="opacity: 1;">Boston Burger Company</h3>
			<img id="slideImg" style="opacity: 1;" src="assets/images/burgerSlide.jpeg" alt="A burger, wings, and fries from Boston Burger Company">
			<br>
			<button class="button" type="button" onclick="prevSlide()">&#8249;</button>
			<a id="slideLink" href="meals/bostonBurger.php">Learn More</a>
			<button class="button" type="button" onclick="nextSlide()">&#8250;</button>
		</div> <!-- end .slideshowBox-->
	</div> <!-- end .slideshowSection -->

<?php 

	include($path . "assets/inc/footer.php");

?>