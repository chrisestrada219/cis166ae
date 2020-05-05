<?php // Script 13.11 - index.php
/* This is the home page for this site. It displays:
- The most recent quote (default)
- OR, a random quote
- OR, a random favorite quote */

// Include the header:
include('templates/header.html');

// Need the database connection:
include('./mysqli_connect_2.php');

// Define the query...
// Change the particulars depending upon values passed in the URL:
if (isset($_GET['random'])) {
	
	$query = 'SELECT id, quote, source, favorite FROM myquotes 
	ORDER BY RAND() DESC LIMIT 1';

} elseif (isset($_GET['favorite'])) {
	
	$query = 'SELECT id, quote, source, favorite FROM myquotes 
	WHERE favorite=1 ORDER BY RAND() DESC LIMIT 1';
	
} else {
	
	$query = 'SELECT id, quote, 
	source, favorite FROM myquotes
	ORDER BY id DESC
	LIMIT 1';

}

if ($r = mysqli_query($dbc, $query)) {

	$row = mysqli_fetch_array($r);
	
	print "<div><blockquote>{$row['quote']}</blockquote>- 
		{$row['source']}";
		
	if ($row['favorite'] == 1) {

	print ' <strong>Favorite!</strong>';

	}
	
	print '</div>';
	
	if (is_administrator()) {
		
		print "<p><b>Quote Admin:</b> <a href=\"edit_quote.
			php?id={$row['id']}\">Edit</a> <->
		<a href=\"delete_quote.php?id={$row['id']}\">Delete</a>
		</p>\n";
	
	}	
	
} else { // Query didn't run.
	
	print '<p class="error">
		Could not retrieve the data 
		because:<br>' . 
		mysqli_error($dbc) . '. 
		</p><p>The query being run 
		was: ' . $query . '</p>';

} // End of query IF.
	
mysqli_close($dbc);
	
print '<p><a href="index.php">
	Latest</a> <-> <a href= 
	"index.php?random=true">
	Random</a> <-> <a href=
	"index.php?favorite=true">
	Favorite</a></p>';
	
include('templates/footer.html');	

?>