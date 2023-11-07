<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Boston Common";
	$path = "../";
	$stylesheet = "subpageStyles";
	$topic = "Adventures";
	$linkToThis = "adventures/bostonCommon.php";
	$imageLink = "bostonCommon.jpeg";
	$yelpBusinessId = "boston-common-boston";
	$yelpLink = "https://www.yelp.com/biz/boston-common-boston";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/subpageHeading.php");

?>

			<p>Visit America’s oldest public park for a fun day in the sun! Take a walk through the beautiful greenery that makes up Boston Common. You’ll also find statues, monuments, spots for tennis and baseball, the shade of many different species of trees, fountains, a playground, and more. Relax or have a picnic in this beautiful park built for anyone of any age. Don’t be shy to come visit in the winter too! You can play in the snow or participate in exciting winter activities held at Boston Common. When you're done, walk right on to <a href="newbury.html">Newbury Street</a> for a place to shop or eat!</p>
		</section>

		<!-- opinion/recommendation section -->
		<section class="opinionSection">
			<div class="opinionSectionText">
				<h2>An MA Local's Opinion</h2>
				<p>If you’re visiting Boston in the winter, you won’t want to make the mistake of staying indoors all day. Visit Frog Pond for some outdoor ice skating! If it’s one of the warmer months in the year, Frog Pond is still the place to see. Run right into the shallow water to get splashed by the sprinklers. This activity doesn’t just have to be for kids. Anyone can use it to cool down in the summer! </p>
				<p>Location: Beacon Hill</p> 
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