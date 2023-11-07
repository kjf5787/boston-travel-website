<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Museum of Science";
	$path = "../";
	$stylesheet = "subpageStyles";
	$topic = "Exhibits";
	$linkToThis = "exhibits/scienceMuseum.php";
	$imageLink = "scienceExhibit.jpeg";
	$yelpBusinessId = "museum-of-science-boston";
	$yelpLink = "https://www.yelp.com/biz/museum-of-science-boston";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/subpageHeading.php");

?>

			<p>Even if museums aren’t your thing, you’re guaranteed to have a good time at the Museum of Science. The museum of science has such a vast variety of exhibits that you’ll find several fun things to do! There’s exhibits for live animals, puzzles, dinosaurs, math, human biology, electricity, engineering workshops, illusions, butterfly gardens, and so much more. And this museum is not like any other where you can only walk around and look. So many of the exhibits are interactive so you can get hands-on experience and learn more about the sciences in fun and unique ways. After your visit, depart from right outside the doors on an amazing <a href="duckTours.html">Duck Tour</a></p>
		</section>

		<!-- opinion/recommendation section -->
		<section class="opinionSection">
			<div class="opinionSectionText">
				<h2>An MA Local's Opinion</h2>
				<p>One exhibit may be marketed towards kids, but everyone will have fun in the playground exhibit. What looks like a real indoor park is actually a site filled with fun activities to learn more about physics. If you don’t remember liking physics class in school, this exhibit will shed a whole new light on the subject. </p>
				<p>Location: Beacon Hill</p> 
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