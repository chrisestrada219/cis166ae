<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.2 - handle_post.php

$first_name = 
	$_POST['first_name'];
$last_name = 
	$_POST['last_name'];
$posting = 
	$_POST['posting'];
	
$name = $first_name . ' ' . 
$last_name;

print "<div>Thank you, $name,
	for your posting:
<p>$posting</p></div>";

?>
</body>
</html>


