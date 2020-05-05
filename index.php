<?php // Home page where you add new record. 

// Define a page title and include the header:
include('templates/header.html');
define('TITLE', 'Add A Record');

// This script adds a record. 
print '<h2>Add a Record</h2>';

// Restrict access to administrators only:
if (!is_administrator()) {
	print '<h2>Access Denied!</h2>
	<p class="error">You do not have permission 
	to access this page.</p>';
	include('templates/footer.html');
	exit();
}

// Check for a form submission:
if ($_SERVER['REQUEST_METHOD'] == 
'POST') { // Handle the form,

	if( !empty($_POST['first_name']) && 
	!empty($_POST['last_name']) && 
	!empty($_POST['address']) && 
	!empty($_POST['city']) && 
	!empty($_POST['state']) && 
	!empty($_POST['phone_number']) && 
	!empty($_POST['email']) ) {
		
		// Need the database connection:
		include('./mysqli_connect.php');
		
		// Prepare the values for storing:
		$first_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['first_name'])));
		$last_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['last_name'])));
		$address = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['address'])));
		$city = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['city'])));
		$state = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['state'])));
		$phone_number = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['phone_number'])));
		$email = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['email'])));
		
		$query = "INSERT INTO records (first_name, last_name, address, city, state, phone_number, email) 
		VALUES ('$first_name', '$last_name', '$address', '$city', '$state', '$phone_number', 
		'$email')";
		mysqli_query($dbc, $query);
		
		if (mysqli_affected_rows($dbc) == 1) {
			// Print a message:
			print '<p>Your record has been 
			stored.</p>';
		} else {
			print '<p class="error">Could not 
			store the record because:<br>' . 
			mysqli_error($dbc) . '.</p><p>The 
			query being run was: ' . $query . 
			'</p>';
			
		}
		
		// Close the connection:
		mysqli_close($dbc); 
		
	} else { // Failed to enter a field.
		print '<p class="error">Please fill out all fields!</p>';
	}  
	
} // End of submitted IF.

// Leave PHP and display the form:

?>

<form action="index.php" method="post">
	<p><label>First Name <input type="text" 
	name="first_name"></label></p>
	<p><label>Last Name <input type="text" 
	name="last_name"></label></p>
	<p><label>Address <input type="text" 
	name="address"></label></p>
	<p><label>City <input type="text" 
	name="city"></label></p>
	<p><label>State <textarea name="text"
	rows="1" cols="1"></textarea></label></p>
	<p><label>Phone Number <input type="text" 
	name="phone_number"></label></p>
	<p><label>Email Address <input type="text" 
	name="email"></label></p>
	<p><input type="submit" names="submit" 
	value="Add This Record!"></p>
</form>

<?php include('templates/footer.html'); ?>


































