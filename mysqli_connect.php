<?php /* This script connects to the database and establishes the
character set for communications. */

// Connect:

$dbc = mysqli_connect('localhost', 'root', '', 'final');

//Set the character set:
mysqli_set_charset($dbc, 'utf8');
