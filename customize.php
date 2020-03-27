<?php // Script 9.1 - customize.php

if (isset($_POST['font_size'],
	$_POST['font_color'])) {
	
		setcookie('font_size',
			$_POST['font_size']);
		setcookie('font_color',
			$_POST['font_color']);
			
		$msg = '<p>Your settings have 
			been entered! Now see them 
			<a href="view_settings.php">
			in action</a>.</p>';
		
		} // End of submitted IF.
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customize Your Settings</title>
</head>
<body>
<?php
if (isset($msg)) { 
	print $msg; }
?>
<p>Use this form to set your preferences:</p>
<form action="customize.php" method="post">
	<select name="font_size">
	<option value="">Font Size</option>
	<option value="xx-small">xx-small</option>
	<option value="x-small">x-small</option>
	<option value="small">small</option>
	<option value="medium">medium</option>
	<option value="large">large</option>
	<option value="x-large">x-large</option>
	<option value="xx-large">xx-large</option>
	</select>
	<select name="font_color">
	<option value="">Font Color</option>
	<option value="999">Gray</option>
	<option value="0co">Green</option>
	<option value="oof">Blue</option>
	<option value="coo">Red</option>
	<option value="ooo">Black</option>
	</select>
	<input type="submit" name="submit"
		value="Set My Preferences">
</form>
</body>
</html>