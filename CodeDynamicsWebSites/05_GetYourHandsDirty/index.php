<?php
	
	// Define a Constant
	define("TITLE", "Variables and Constants");
	
	// Your Variables
	$my_name	= "Ugur";
	$fav_colour	= "Blue";
	$birth_year	= 1997;
	
	/*
		When using the date() method, PHP has to know the timezone where the server resides,
		in order to output the correct hour and date for that geographical location.
		The date_default_timezone_set() method takes a string that locates the server.
		The list of supported timezones can be found at http://php.net/manual/en/timezones.php
	*/
	date_default_timezone_set('Europe/Istanbul');
	
	$today		= date('F j, Y');
	$this_year	= date('Y');
	
	/*
	Use PHP to calculate the difference
	between your birth year and this year
	to show your age dynamically
	*/
	$my_age		= ($this_year - $birth_year);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Final Example</h2>
			<p>Make sure to view the source code in your editor!</p>
			
			<div class="sandbox">
				<h3>Today's Date:</h3>
				<p><?php echo $today; ?></p>
				
				<h3>My Name:</h3>
				<p><?php echo $my_name; ?></p>
				
				<h3>My Favourite Colour:</h3>
				<p><?php echo $fav_colour; ?></p>
				
				<h3>My Age:</h3>
				<p><?php echo $my_age; ?></p>
			</div><!-- end sandbox -->
			
			<a href="practice.php" class="button">Check out your example</a>
			

			
			<hr>
			
			<small>&copy;<?php echo $this_year; ?> <a href="http://bradhussey.ca/"><?php echo $my_name; ?></a></small>
		</div><!-- end wrapper -->
		

	</body>
</html>
