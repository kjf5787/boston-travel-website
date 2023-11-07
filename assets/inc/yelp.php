<?php

	$url = "https://api.yelp.com/v3/businesses/" . $yelpBusinessId;
	$API_KEY = getenv('YELP_API_KEY');
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 0);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"authorization: Bearer " . $API_KEY, "cache-control: no-cache", 
	) );

	$results = curl_exec($ch);
	curl_close($ch);

	$results = json_decode($results);
	$average_rating = $results->rating;
	$review_count = $results->review_count;
	$yelpStarsImg = "";

	// set imgs
	if($average_rating == 0){ $yelpStarsImg = $path . "assets/images/yelp/regular_0.png"; };
	if($average_rating == 1){ $yelpStarsImg = $path . "assets/images/yelp/regular_1.png"; };
	if($average_rating == 1.5){ $yelpStarsImg = $path . "assets/images/yelp/regular_1_half.png"; };
	if($average_rating == 2){ $yelpStarsImg = $path . "assets/images/yelp/regular_2.png"; };
	if($average_rating == 2.5){ $yelpStarsImg = $path . "assets/images/yelp/regular_2_half.png"; };
	if($average_rating == 3){ $yelpStarsImg = $path . "assets/images/yelp/regular_3.png"; };
	if($average_rating == 3.5){ $yelpStarsImg = $path . "assets/images/yelp/regular_3_half.png"; };
	if($average_rating == 4){ $yelpStarsImg = $path . "assets/images/yelp/regular_4.png"; };
	if($average_rating == 4.5){ $yelpStarsImg = $path . "assets/images/yelp/regular_4_half.png"; };
	if($average_rating == 5){ $yelpStarsImg = $path . "assets/images/yelp/regular_5.png"; };
	$yelpLogoImg = $path . "assets/images/yelp/yelpLogo.png";

	echo "<p class='yelpRating'>Yelp Rating: </p><img class='yelpStars' src='"  . $yelpStarsImg . "' alt='Yelp rating stars'> <a href='" . $yelpLink ."' target='_blank'><img class='yelpLogo' src='" . $yelpLogoImg . "' alt='Yelp logo links to Yelp'></a>";
	echo "<p class='reviewNum'>Based on " . $review_count . " reviews</p>";
?>