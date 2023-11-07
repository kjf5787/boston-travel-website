<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	// includes 
	$title = "Contact Us";
	$path = "./";
	$stylesheet = "contactStyles";
	$script = "validate";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");

	// form sanitization method
	function sanitize($str, $length){
		$str = trim($str); 
		$str = strip_tags($str);
		$str = htmlentities($str);
		$str = substr($str,0,$length);
		return $str;
	}
	// mm/dd/yyyy format
	function formatDate($value) { 
		$reg = "/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/";
		return preg_match($reg,$value);
	}

	$alertMsg = ""; // will be used in a javascript alert to let user know of errors 

	// form validation, check if any fields are empty
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['partySize']) && !empty($_POST['visitDate']) && !empty($_POST['location']) && !empty($_POST['comment'])){
		
		// form sanitization 
		// name 
		$name = sanitize($_POST['name'], 50);
		$name  = filter_var($name, FILTER_SANITIZE_STRING);

		// email
		$email = sanitize($_POST['email'], 50);
		$email  = filter_var($email, FILTER_SANITIZE_EMAIL);

		// party size (type is number so this should not be necessary but will sanitize anyway)
		$partySize = sanitize($_POST['partySize'], 3);
		$partySize = filter_var($partySize, FILTER_SANITIZE_NUMBER_INT);
		if($partySize < 0){
			$alertMsg = $alertMsg . "Party size cannot be less than 0\n";
		}

		// date 
		$visitDate = sanitize($_POST['visitDate'], 50);
		$visitDate = filter_var($visitDate, FILTER_SANITIZE_STRING);
		if(formatDate($visitDate)){
			$new_date = strtotime($visitDate);
			$new_date = date("Ymd", $new_date);
		}
		else{
			$alertMsg = $alertMsg . "The date is not in the correct format\n";
		}

		// location 
		$location = sanitize($_POST['location'], 50);
		$location  = filter_var($location, FILTER_SANITIZE_STRING);

		//comment 
		$comment = sanitize($_POST['comment'], 300);
		$comment  = filter_var($comment, FILTER_SANITIZE_STRING);
	}

	// put data in database 
	if($alertMsg == ""){
		include("../dbcon.php");

		$sql = "INSERT INTO `bostonComments` (`name`, `email`, `partySize`, `visitDate`, `location`, `comment`) VALUES (?, ?, ?, ?, ?, ?);";
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssisss",$name,$email,$partySize,$new_date,$location,$comment);
		$stmt->execute();
	}
	else{
		$alertMsg = $alertMsg . "Please re-submit the form with the correct values";
		echo "<script> alert('" . str_replace('"', '', json_encode($alertMsg)) . "'); </script>";
	}

	// get from databae 
	$sql = "SELECT * FROM `bostonComments` ORDER BY `commentDate` DESC LIMIT 50;";
	$results = $conn->query($sql);
	while($row = $results->fetch_assoc()){
		$records[] = $row; 
	}

?>
	
	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<p>
			<a href="<?php echo $path; ?>index.php">Home</a> &gt; 
			<a href="<?php echo $path ?>contact.php"><?php echo $title ?></a>
		</p>
	</div> <!-- end .breadcrumbs -->

	<header>
		<h1>Contact Us</h1>
	</header>

	<div class="contentContainer">
		<div class="commentForm">
			<h2>Leave a comment</h2>
			<p>Please share about a past or future Boston trip or give us some feedback on our site!</p>
			<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validate();">
				<!-- action = "< ?php echo $_SERVER['PHP_SELF']; ?>" -->

				<label for="name">Name:</label>
				<input type="text" id="name" name="name">
				<br>

				<label for="email">Email:</label>
				<input type="text" id="email" name="email">
				<br>

				<label for="partySize">How many are in your travel party?</label>
				<input type="number" id="partySize" name="partySize">
				<br>

				<label for="visitDate">Date of visit: </label>
				<input type="text" id="visitDate" name="visitDate" placeholder="mm/dd/yyyy">
				<br>

				<!-- radios for what user is excited to see -->
				<fieldset>
					<legend>Which location sounded the most intriguing?</legend>

					<input type="radio" name="location" value="Boston Burger Company" id="burger">
					<label for="burger">Boston Burger Company</label>
					<br>

					<input type="radio" name="location" value="Regina Pizzeria" id="pizzeria">
					<label for="pizzeria">Regina Pizzeria</label>
					<br>

					<input type="radio" name="location" value="Mike's Pastry" id="mikes">
					<label for="mikes">Mike's Pastry</label>
					<br>

					<input type="radio" name="location" value="Museum of Fine Arts" id="artMuseum">
					<label for="artMuseum">Museum of Fine Arts</label>
					<br>

					<input type="radio" name="location" value="Museum of Science" id="scienceMuseum">
					<label for="scienceMuseum">Museum of Science</label>
					<br>

					<input type="radio" name="location" value="New England Aquarium" id="aquarium">
					<label for="aquarium">New England Aquarium</label>
					<br>

					<input type="radio" name="location" value="Duck Tours" id="duck">
					<label for="duck">Duck Tours</label>
					<br>

					<input type="radio" name="location" value="Newbury Street" id="newbury">
					<label for="newbury">Newbury Street</label>
					<br>

					<input type="radio" name="location" value="Boston Common" id="common">
					<label for="common">Boston Common</label>
					<br>

					<input type="radio" name="location" value="no location" id="none">
					<label for="none">None of the Above</label>
					<br>
				</fieldset>
				<br>

				<label for="comment">Leave us a message: (300 characters max)</label>
				<br>
				<textarea id="comment" name="comment" maxlength="300" placeholder="Questions or comments about Boston? About our site?"></textarea>
				<br>

				<!-- submit button -->
				<input type="submit" value="Submit">
			</form>
		</div> <!-- end .commentForm -->

		<h2>Comments</h2>
		<div class="commentSection">
			<hr>
			<?php
				foreach($records as $record){
					echo "<span class='commentName'>" . $record['name'] . "</span>";
					echo "<span class='commentTime'> @ " . $record['commentDate'] . "</span>";
					echo "<br>";
					echo "<span class='commentFormData'> Travel party of " . $record['partySize'] . ", visit to Boston on " . $record['visitDate'];
					echo "<br>";
					echo " Found </span>";
					echo "<span class='commentLoc'>" . $record['location'] . "</span>";
					echo "<span class='commentFormData'> most intriguing</span>";
					echo "<br>";
					echo "<span class='comment'>&quot;" . $record['comment'] . "&quot;</span>";
					echo "<hr>";
				}
			?>
		</div> <!-- end .commentSection -->
	</div> <!-- end .contentContainer -->
<?php 

	include($path . "assets/inc/footer.php");

?>