<?php
/*
Luis
Nov 2019
WEBD3201
*/
	
// Create connection	
//require('./includes/constants.php');
//require('./includes/functions.php');

$conn = new mysqli(DB_SERVER_NAME, DB_USERNAME, DB_PASSWORD,DB_NAME);

if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
}





