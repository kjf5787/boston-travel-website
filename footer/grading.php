<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "Grading Page";
	$path = "../";
	$stylesheet = "subpageStyles";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");

?>

	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<p>
			<a href="<?php echo $path; ?>index.php">Home</a> &gt; 
			<a href="<?php echo $path ?>footer/grading.php"><?php echo $title ?></a>
		</p>
	</div> <!-- end .breadcrumbs -->

	<header>
		<h1>Grading Page</h1>
	</header>

	<div class="contentContainer">
		<h2>Final</h2>

		<h3>Original JavaScript Component</h3>
		<p>I created an image slideshow on the homepage as my original JavaScript element. I coded several functions in the slideshow.js file that are activated at the click of the &lt; and &gt; buttons. Users can click back and forth through images of the locations that are described on the subpages. The headings and links also change so that the user can navigate to the page of the image they find intriguing. I used arrays to hold the data and the DOM to change these elements on the page.</p>

		<h3>DHTML Component</h3>
		<p>I combined the DHTML Component with my original JavaScript component so that the slideshow could have a transition between the photos. I created a function in the slideshow.js file that causes the elements to fade in from an opacity of 0 to 1. I used setTimeout() to increase the opacity by 0.01 every 5 milliseconds to create a seamless fade in effect.</p>

		<h3>Extras</h3>
		<ol>
			<li><strong>Extra Comment Form Input:</strong> For my first extra I have included 3 more fields of input than what is required. These were input fields with types number, text, and radio. The number field has commenters select how many people are in their travel party. The exta text field has a user input the date they traveled to Boston. Finally, the radio field has users select the location covered on my website that they found the most intriquing. I validated and sanitized all of these fields in additon to the required ones and made sure that the date was in the correct format. All of the fields get inserted into the database and displayed in the comment section.</li>
			<li><strong>Favicon:</strong> For part 1 of the project, I created a logo to display on this website as seen in the navigation and footer. This logo is a little too detailed to be impactful as a favicon, so I extracted the Massachusetts state shape from the logo and used Figma to shrink it to the proper size.</li>
			<li><strong>Hamburger Menu:</strong> I used CSS and JavaScript to convert the dropdown menu into a hamburger menu. This is activated when the width of the page is less than 750px. For this state I wrote CSS in a media query that repositions all of the navigation elements and restyles their hover states, created a hamburger menu symbol with CSS that opens the menu and transitions into an X symbol that closes the menu, and added an event listener that ensures the menu is not still hidden if the page is resized again to be greater than 750px. The JavaScript for this extra is in the mobileDropdown.js file and uses DOM elements to control the hamburger menu.</li>
			<li><strong>Yelp API:</strong> I created an account and app for Yelp fusion API access. I created the yelp.php file to be included on each subpage of my website. I retrieved the average rating and number of reviews for a location which is specified by a variable set in the php of each subpage. I used the rating star images provided by Yelp to display the average rating of each page as specified in Yelp's Display Requirements. I used if statements to ensure that the correct url to the image is used. As instructed in the Display Requirements, I also displayed the Yelp logo next to the information gathered from Yelp which links back to the Yelp page of the specified location. I used CSS to position these different elements in a cohesive way and used the example layouts from the Display Requirements as inspiration for these styles. Finally, I used media queries to ensure that the Yelp information was styled in a pleasing and acceptable way at any screen size.</li>
		</ol>

		<h2>Midterm</h2>

		<h3>Good Design</h3>
		<p>This website uses the CRAP principles to make a consistent, pleasing, and practical design. Contrast is used to make sure all text colors contrast their background. Repetition is used across all pages so that things like the navigation bar can be found in the same place. Alignment is used so that text and other elements are aligned with each other. Proximity is used to make sure nothing is too close together so that the pages don’t look crowded. Also, it is used so that related things are close enough to each other to be grouped by a viewer.</p>

		<h3>Organization of Information</h3>
		<p>Information is organized so that related content is on the same page. For example, only relevant images can be found on each page. Also, content is grouped together in the navigation by category. For example, all places to eat are under “Meals.”</p>

		<h3>Content</h3>
		<p>The content on this website is made for people considering traveling to Boston or people trying to decide what to do when they go to Boston. Proper grammar and spelling is used to create captivating pages about why each location is worth visiting. Each page for a specific place has a map that, combined with text on the page, shows a user where in Boston that place is.</p>

		<h3>Quality of Content</h3>
		<p>This website contains 11 pages of content including an index page that serves as a home page, 9 subpages about different places to visit in Boston, and 1 contact page that contains forms for people who will visit Boston and people who have already visited.</p>

		<h3>Code Design Requirements</h3>
		<p>The code for this website uses proper and consistent indentation, a global CSS file, well thought out selectors that target exactly what is intended, comments in both CSS and HTML, proper use of HTML semantic tags, hand written code all created by the student, and no inline styles. </p>

		<h3>Interaction Design and Navigation</h3>
		<p>The navigation allows the user to get to any page from any part of the website and can always be found in the same place. Each page has a unique title that is the same as its title in the navigation bar so that the user always knows where they are. </p>

		<h3>HTML and CSS Validates</h3>
		<p>All of the HTML and CSS has been validated with the W3C validators. </p>

		<h3>Grading Page</h3>
		<p>This page documents everything that has been done to meet the requirements of each section on the rubric and is linked in the footer of the home page alongside the references page.</p>

		<h3>Responsive Web Design</h3>
		<p>Mobile users were considered and media queries were used so that as the page shrinks, the images, text, and navigation shrink to match the screen. Also, layout changes were made with media queries to make sure the website looks just as organized and pleasing on smaller screens.</p>
	</div> <!-- end .contentContainer -->
<?php 

	include($path . "assets/inc/footer.php");

?>