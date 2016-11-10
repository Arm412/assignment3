<?php
include 'ParentClass.php';
include 'ChildClass.php';
$grocery_list = new ParentClass("Eggs", "Milk", "Bread");
$updated_list = new ChildClass("Lucky Charms", "Chips", "Cheese");
	

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
		<ul>
			<li> <?= $grocery_list ?> </li>
			<li> <?= $updated_list ?> </li>
		</ul>
	</div>
</body>
</html>