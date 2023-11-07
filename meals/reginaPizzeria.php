<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Regina Pizzeria";
	$path = "../";
	$stylesheet = "subpageStyles";
	$topic = "Meals";
	$linkToThis = "meals/reginaPizzeria.php";
	$imageLink = "regina.jpeg";
	$yelpBusinessId = "regina-pizza-boston-4?osq=regina+pizza";
	$yelpLink = "https://www.yelp.com/biz/regina-pizza-boston-4?osq=regina+pizza";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/subpageHeading.php");

?>

			<p>If you’re looking for the true experience of a Bostonian, you have to visit one of the city’s oldest pizza parlors. Today there are several locations, but the original is still up and running too! From classic to meat lovers to veggie, they’ll have delicious slices of brick oven pizza for the whole family! And the original location is right in the heart of the North End, near plenty of other historical sites to see and fun things to do like visiting the <a href="aquarium.html">New England Aquarium!</a></p>
		</section>

		<!-- opinion/recommendation section -->
		<section class="opinionSection">
			<div class="opinionSectionText">
				<h2>An MA Local's Opinion</h2>
				<p>Who doesn’t love a classic Margherita pizza with fresh, delicious basil? At Regina’s, there’s no one! Looking for some more protein? There are countless meaty options to choose from. The Meatlovers, Buffalo Chicken, or the Pollo Regina all come highly recommended! But fear not, if nothing sounds like you, just create your own pie!</p>
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