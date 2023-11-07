<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $path; ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?php echo $path; ?>assets/css/<?php echo $stylesheet; ?>.css">
	<?php if (isset($script)) { echo "<script src='" . $path . "assets/script/" . $script . ".js'></script>\n"; } ?>
	<script src='<?php echo $path; ?>assets/script/mobileDropdown.js'></script>
	<link rel="icon" type="image/x-icon" href="<?php echo $path; ?>assets/images/favicon.png">
	<title>Boston - <?php echo $title ?></title>
</head>
<body <?php if ($title == "Home") { echo "onload='preloadImgs()'"; } ?>>