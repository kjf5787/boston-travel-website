<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Duck Tours";
	$path = "../";
	$stylesheet = "subpageStyles";
	$topic = "Adventures";
	$linkToThis = "adventures/duckTours.php";
	$imageLink = "duckBoat.jpeg";
	$yelpBusinessId = "boston-duck-tours-boston-3?osq=Duck+Tour";
	$yelpLink = "https://www.yelp.com/biz/boston-duck-tours-boston-3?osq=Duck+Tour";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/subpageHeading.php");

?>

			<p>If you want to learn more about Boston, the best way to do it is on a Duck Tour! The tour will take you on a bus ride through Boston to visit important and historic landmarks. You’ll have one of many amazing and entertaining tour guides to tell you about the history of Boston and fun facts about the modern city. You’ll be having fun the whole time as you make your way through the many neighborhoods of Boston. The best part is that the tour is not on any regular vehicle. This vehicle can swim! You’ll be able to safely drive straight into the river and glide across the water.</p>
		</section>

		<!-- opinion/recommendation section -->
		<section class="opinionSection">
			<div class="opinionSectionText">
				<h2>An MA Local's Opinion</h2>
				<p>The Duck Tours allows you to pick your departure location and you should pick strategically. You could get on right outside of the <a href="scienceMuseum.html">Museum of Science</a> and visit the exhibits before or after the tour. Alternatively, you could do the same outside of the <a href="aquarium.html">New England Aquarium</a>. If you’d rather do some shopping or get something to eat, you can also choose to start your tour at the Prudential Center.</p>
				<p>Location: All Over Boston</p> 
				<p>Rating: &#9733;&#9733;&#9733;&#9733;&#9733; 5/5</p> <!-- &#9733 for a star -->
				<?php include($path . "assets/inc/yelp.php"); ?>
			</div> <!-- end .opinionSelectionText -->
			<div class="optionSectionImg">
				<img class="optionSectionImg" id="map" src="<?php echo $path; ?>assets/images/map.jpeg" alt="A map of Boston showing the different neighborhoods">
			</div> <!-- end .optionSelectionImg -->
		</section>
	</div> <!-- end .contentContainer -->
<?php 

	include($path . "assets/inc/footer.php");

?>