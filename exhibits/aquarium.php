<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "New England Aquarium";
	$path = "../";
	$stylesheet = "subpageStyles";
	$topic = "Exhibits";
	$linkToThis = "exhibits/aquarium.php";
	$imageLink = "aquariumPenguins.jpeg";
	$yelpBusinessId = "new-england-aquarium-boston";
	$yelpLink = "https://www.yelp.com/biz/new-england-aquarium-boston";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/subpageHeading.php");

?>

			<p>Calling all aquatic animal lovers to the New England Aquarium. Those less passionate about marine life will have an amazing time here too! Have you ever seen a sea turtle, jellyfish, penguin, shark, or stingray up close? You’ll be fascinated by all of these animals and more at the exhibits here. The New England Aquarium also puts ethics first and the animals you can visit are there to thrive. The animals you’ll see here are rescues and any research performed by the aquarium is for the betterment of aquatic life! After your visit, don’t forget to buy a stuffed animal of your favorite marine animal at the gift shop. After your visit, depart from right outside the doors on an amazing <a href="duckTours.html">Duck Tour</a></p>
		</section>

		<!-- opinion/recommendation section -->
		<section class="opinionSection">
			<div class="opinionSectionText">
				<h2>An MA Local's Opinion</h2>
				<p>Don’t go running up to higher levels so fast! You’ll want to spend some time at the beginning watching the penguins! Watch them interact, swim, eat, and wait for something cute to happen! Watching these little guys will be fascinating. When you decide to finally go up, you’ll also want to stop at the touch tank to pet some stingrays and, if you're lucky, small sharks!</p>
				<p>Location: The Greenway</p> 
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