<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Museum of Fine Arts";
	$path = "../";
	$stylesheet = "subpageStyles";
	$topic = "Exhibits";
	$linkToThis = "exhibits/artMuseum.php";
	$imageLink = "artMuseum.jpeg";
	$yelpBusinessId = "museum-of-fine-arts-boston?osq=museum+of+fine+arts";
	$yelpLink = "https://www.yelp.com/biz/museum-of-fine-arts-boston?osq=museum+of+fine+arts";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");
	include($path . "assets/inc/subpageHeading.php");

?>

			<p>Get inspired at the Museum of Fine Arts. The MFA is full of beautiful, iconic, and though provoking art you won’t want to miss when you come to Boston. There are several galleries, exhibitions, activities, and demonstrations to choose from. Choose a couple to see for a few hours, or see as much as you can in a whole day! You’ll even find some familiar pieces by Monet or Homer. Or, you’ll come across pieces you’ve never seen before and you’ll be glad you didn’t miss out on them! Don’t forget to stop by the shop on your way out.</p>
		</section>

		<!-- opinion/recommendation section -->
		<section class="opinionSection">
			<div class="opinionSectionText">
				<h2>An MA Local's Opinion</h2>
				<p>Plan your visit with a walk through the Art of Ancient Greece on your schedule! Everyone has seen pictures of the striking sculptures from ancient times. But this will not compare to the breathtaking experience you will have in person! Plus, see fascinating ancient artifacts that will leave you feeling amazed with a sense of what it was like in ancient times! </p>
				<p>Location: The Fenway</p> 
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