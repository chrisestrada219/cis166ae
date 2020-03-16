<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup For You!</title>
</head>
<body>
<h1>Mmm...soups</h1>

<?php // Script 7.3 - soups3.php

$soups = [
'Monday' => 'Clam Chowder',
'Tuesday' => 'White Chicken Chili',
'Wednesday' => 'Vegetarian',
'Thursday' => 'Tortilla',
'Friday' => 'Ramen',
'Saturday' => 'Menudo',
'Sunday' => 'French Onion'
];

foreach ($soups as $day => $soup) {
		print "<p>$day: $soup</p>\n";
		}

?>
</body>
</html>	