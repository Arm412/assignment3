<?php
include_once("Vehicle.php");
include_once("Motorcycle.php");
$vehicle = new Vehicle("Brad", "2015");
$motorcycle = new Motorcycle("Barry", "2010");
$motorcycle2 = new Motorcycle("Matt", "2011");


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<div class="list">
		<h1>Motorcycles</h1>
		<ul>
			<li> <?= $motorcycle ?> </li>
			<li> <?= $vehicle ?> </li>
			<li> <?= $motorcycle2 ?> </li>
		</ul>
	</div>
</body>
</html>