<?php // Final - view_quotes.php
/* This script lists every record. */

//Include the header:
include('templates/header.html');
define('TITLE', 'View All Records');

print '<h2>View All Records</h2>';

// Restrict access to administrators only:
if (!is_administrator()) {
	print '<h2>Access Denied!</h2>
	<p class="error">You do not have permission
	to access this page.</p>';
	include('templates/footer.html');
	exit();
}

// Need the database connection:
include('./mysqli_connect.php');

// Define the query:
$query = 'SELECT first_name, last_name, address, city, state, phone_number, email 
FROM records ORDER BY last_name DESC';

//Run the query:
if ($result = mysqli_query($dbc, $query)) {

	// Retrieve the returned records:
	while ($row = mysqli_fetch_array($result)) {
		
		// Print the record:
		print "<div>{$row['first_name']}- {$row['last_name']}- 
		{$row['address']}- {$row['city']}- {$row['state']}- 
		{$row['phone_number']}- {$row['email']}-\n";
		
		// Add administrative links:
		print "<p><b>Record Admin:</b> 
		<a href=\"edit_record.php?id={$row['id']}\">Edit</a> <-> 
		<a href=\"delete_record.php?id={$row['id']}\">Delete</a></p>
		</div>\n";
	
	} // End of while loop.

} else { // Query didn't run.
	print '<p class="error">Could not retreive 
	the data because:<br>' . 
	mysqli_error($dbc) . '.</p><p>The query 
	being run was: ' . $query . '</p>';
} // End of query IF. 

mysqli_close($dbc); // Close the connection.

include('templates/footer.html'); // Include the footer.

?>