<?php // Script 13.2 - functions.php
/* This page defines custom functions

This function checks if the user is an administrator, 
takes two optional values, and returns a Boolean value. */
function is_administrator($name = 'Daria', $value = 'Lane') {

	// Check for the cookie and check its value:
	if (isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)) {
		return true;
	} else {
		return false;
	}

} // End of is_administrator() function.
