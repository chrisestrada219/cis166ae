<!doctype html>
<html lang=“en”>
<head>
  <meta charset=“utf-8”>
  <title>Registration</title>
  
  <style type="text/css" media="screen">
		.error {color: red; }
  </style>   
</head>

<body>

<h1>Registration Results</h1>

<?php // Script 6.2 - handle_reg.php
error_reporting(E_ALL);

$okay = true;

if (empty($_POST['email'])) {
	print '<p class="error"> Please
	enter your email address.</p>';
	$okay = false;
	}
	
if (empty($_POST['password'])) {
	print '<p class="error">Please enter
	your password.</p>'; 
	$okay = false;
	}

if ($_POST['password'] != $_POST['confirm']) {
	print '<p class="error"> Your confirmed
	password does not match the original 
	password.</p>';
	$okay = false;
	}

if ( is_numeric($_POST['year']) AND 
	(strlen($_POST['year']) == 4) ) {
	
		if ($_POST['year'] < 2020) {
			$age = 2020 - $_POST['year'];
			} else {
			print '<p class="error">Either you 
			entered your birth year wrong or you come
			from the future!</p>';
			$okay = false;
			}
		} else {
		print '<p class="error">Please enter the year 
		you were born as four digits.</p>';
		$okay = false;
	}
	
if ( !isset($_POST['terms'])) {
	print '<p class="error">You must accept the 
	terms.</p>';
	$okay = false;
	}

if ($okay) {
	print '<p>You have been successfully
	registered (but not really).</p>';
	print "<p>You will turn $age this 
	year.</p>";
	}
	
?>
</body>
</html> 