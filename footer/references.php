<!-- Kayla Fennell, ISTE-240, 2205 -->
<?php

	$title = "References";
	$path = "../";
	$stylesheet = "subpageStyles";

	include($path . "assets/inc/header.php");
	include($path . "assets/inc/nav.php");

?>

	<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<p>
			<a href="<?php echo $path; ?>index.php">Home</a> &gt; 
			<a href="<?php echo $path ?>footer/references.php"><?php echo $title ?></a>
		</p>
	</div> <!-- end .breadcrumbs -->

	<header>
		<h1>References</h1>
	</header>

	<div class="contentContainer">
		<iframe src="./references.pdf"></iframe>
	</div> <!-- end .contentContainer -->
<?php 

	include($path . "assets/inc/footer.php");

?>