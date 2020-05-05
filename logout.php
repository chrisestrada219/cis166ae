<?php // Final - logout.php

if (isset($_COOKIE['Daria'])) {
	setcookie('Daria', FALSE, 
	time()-300);
}

define('TITLE', 'Logout');
include('templates/header.html');

print '<p>You are now logged out.</p><br>';

print '<a href="login.php">Login</a>';

include('templates/footer.html');

?>