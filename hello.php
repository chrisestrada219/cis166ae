<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Greetings!</title>
	<style type="text/css">
	.bold {
		font-weight: bolder;
		}
	</style>
</head>
<body>
<?php // Script 3.7 - hello.php

ini_set('displaying errors' , 1); error_reporting(E_ALL);

$name = $_GET['name'];
print "<p>Hello, <span class=\"bold\">$name</span>!</p>";

?>
</body>
</html>
