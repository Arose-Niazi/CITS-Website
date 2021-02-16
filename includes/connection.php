<?php
	/* Database credentials. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	define('DB_SERVER', '51.210.180.137');
	define('DB_USERNAME', 'cits');
	define('DB_PASSWORD', 'VowdBqPtzh5i88LK');
	define('DB_NAME', 'cits');
	
	/* Attempt to connect to MySQL database */
	$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	
	// Check connection
	if($mysqli === false){
		exit("ERROR: Could not connect. " . $mysqli->connect_error);
	}
?>