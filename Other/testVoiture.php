<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> We're testing cars today</title>
	</head>
	
	<body>
	<?php
	require_once('Voiture.php');
	$car1 = new Voiture('Volvo', 'dark grey', '08071998');

	display();
	?>
	</body>