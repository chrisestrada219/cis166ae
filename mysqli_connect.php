<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Connect to MySQL</title>
</head>
<body>

<?php // Script 12.1 - mysqli_connect.php

if ($dbc = @mysqli_connect('localhost', 'myblog')) {
		
	print '<p>Successfully connected to 
		the database!</p>';
		
	mysqli_close($dbc);
	
} else {

	print '<p style="color:red;">Could not 
		connect to MySQL:<br>' . mysqli_connect_error() . '.</p>';
		
	} 

?>

</body>
</html>