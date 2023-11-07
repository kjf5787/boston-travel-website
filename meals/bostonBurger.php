<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Boston Burger Company";
	$path = "../";
	$stylesheet = "subpageStyles";
	$topic = "Meals";
	$linkToThis = "meals/bostonBurger.php";
	$imageLink = "burger.jpeg";
	$yelpBusinessId = "boston-burger-boston-2";
	$yelpLink = "https://www.yelp.com/biz/boston-burger-boston-2";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/subpageHeading.php");

?>

			<p>The Boston Burger Company has a burger for everyone. With 30 wild burgers to choose from, everyone will be happy. Picky eaters or extreme experimentalists even have the option to create their own. But be sure to come with an empty stomach, these burgers come in one size: BIG. Plus, there’s no way to resist ordering some appetizers, wings, or one of the many options for loaded fries for the table. And if burgers aren’t your thing – no worries! Boston Burger Co also has a great selection of mac and cheese, sandwiches, or salads! But don’t forget to end (or start) your meal with one of their signature #FREAKFRAPPES. They come like no shake you’ve seen before! And bonus! The location is right off of <a href="newbury.html">Newbury Street</a> so you can get some shopping in while you’re in the area!</p>
		</section>

		<!-- opinion/recommendation section -->
		<section class="opinionSection">
			<div class="opinionSectionText">
				<h2>An MA Local's Opinion</h2>
				<p>If you’re going to have a meal at Boston Burger Co, do it right with a side of fries! There’s more french fry options than you’ll see anywhere else but some fan favorites include the Garlic Parm or the Nacho fries! Pair that with the burger that’s perfect for you (they’ll have one!) and you’ll be eating like Boston royalty!</p>
				<p>Location: Back Bay</p>
				<p>Our Rating: &#9733;&#9733;&#9733;&#9733;&#9733; 5/5</p>
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