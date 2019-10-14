<?php
	$companyName = "Franklin's Fine Dining";
	include('arrays.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title><?php echo TITLE; ?></title>
	<link href="./styles.css" rel="stylesheet">
</head>

<body id="final-example">
	
	<div class="wrapper">
	
		<div id="banner">
			<a href="/" title="Return to Home">
				<img src="./img/banner.png" alt="Franklin's Fine Dining">
			</a>	
		</div><!-- banner -->
		
		<div id="nav">
			<?php include('nav.php'); ?>
		</div><!-- nav -->
		
		<div class="content">