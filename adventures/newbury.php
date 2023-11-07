<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Newbury Street";
	$path = "../";
	$stylesheet = "subpageStyles";
	$topic = "Adventures";
	$linkToThis = "adventures/newbury.php";
	$imageLink = "newbury.jpeg";
	$yelpBusinessId = "newbury-street-boston";
	$yelpLink = "https://www.yelp.com/biz/newbury-street-boston";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/subpageHeading.php");

?>

			<p>Don’t leave Boston without something to show for your visit! Have a shopping spree down Newbury Street. From gift shops to retail to high end fashion, there’s something for everyone. Don’t forget to visit the iconic Newbury Comics that came to be right on that street! If you get hungry, there’s countless options to choose from. You could get something from a quick and cute cafe, a drink at one of the many spots for boba tea, or even a nice meal at a fancier restaurant. You could even walk just a few blocks out to visit <a href="bostonBurger.html">Boston Burger Company</a> for a heartier meal. Then, after a full day of shopping and snacking you can relax in the greenery at <a href="bostonCommon.html">Boston Common</a>.</p>
		</section>

		<!-- opinion/recommendation section -->
		<section class="opinionSection">
			<div class="opinionSectionText">
				<h2>An MA Local's Opinion</h2>
				<p>Don’t be overwhelmed by the countless choices of places to grab a snack or meal. You can’t go wrong with a boba drink from Coca Leaf. For something sweet, visit Mochi Dough for a donut unlike any other or Georgetown Cupcakes for a fun handheld treat. If you’re looking for a meal, look no further than Eataly for something Italian, Joe’s for something American, or Rochambeau for something French!</p>
				<p>Location: Back Bay</p> 
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