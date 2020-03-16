<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup For You!</title>
</head>
<body>
<h1>Mmm...soups</h1>

<?php // Script 7.1 - soups1.php

$soups = [
'Monday' => 'Clam Chowder',
'Tuesday' => 'White Chicken Chili',
'Wednesday' => 'Vegetarian',
'Thursday' => 'Tortilla',
'Friday' => 'Ramen',
'Saturday' => 'Menudo',
'Sunday' => 'French Onion'
];

$count1 = count($soups);
print "<p>The soups array originally
had $count1 elements.</p>";

$soups['Funday'] = 'Pho';

$count2 = count($soups);
print "<p>After adding 1 more soup, 
the array now has $count2 elements.</p>";

print_r($soups);

?>
</body>
</html>	