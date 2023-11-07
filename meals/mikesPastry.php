<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Mike's Pastry";
	$path = "../";
	$stylesheet = "subpageStyles";
	$topic = "Meals";
	$linkToThis = "meals/mikesPastry.php";
	$imageLink = "mikes.jpeg";
	$yelpBusinessId = "mikes-pastry-boston";
	$yelpLink = "https://www.yelp.com/biz/mikes-pastry-boston";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/subpageHeading.php");

?>

			<p>Ready for dessert? Every Bostonian would point you towards Mike’s Pastry! Families in Boston have made this place part of a tradition and for good reason! The classic Italian Pastries found here are too delicious to miss! Today there are multiple locations that locals and visitors have the options of, but if you’re gonna go you should do it right at the original location in the North End! While you're there, get some pizza before dessert at the iconic <a href="reginaPizzeria.html">Regina Pizzeria</a> and explore the historical streets and sites that fill Boston’s North End!</p>
		</section>

		<!-- opinion/recommendation section -->
		<section class="opinionSection">
			<div class="opinionSectionText">
				<h2>An MA Local's Opinion</h2>
				<p>Everyone in Boston knows Mike’s Pastry is the place to go for a cannoli! There are several flavors to choose from, but the classic Chocolate Chip Cannoli is the way to go. Do other flavors sound intriguing? Don’t stop at one! Get a box and throw some classic Italian cookies or a Lobster Tail Pastry into your order too!</p>
				<p>Location: North End</p> 
				<p>Rating: &#9733;&#9733;&#9733;&#9733;&#9733; 5/5</p> <!-- &#9733 for a star -->
				<?php include($path . "assets/inc/yelp.php"); ?>
			</div> <!-- end .opinionSelectionText -->
			<div class="optionSectionImg">
				<img class="optionSectionImg" id="map" src="<?php echo $path; ?>assets/images/map.jpeg" alt="A map of Boston showing the different neighborhoods">
			</div> <!-- end .optionSectionImg -->
		</section>
	</div> <!-- end .contentContainer -->
<?php 

	include($path . "assets/inc/footer.php");

?>