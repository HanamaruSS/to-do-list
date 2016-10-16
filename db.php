<?php
	$servername = "localhost";
	$db_username = "todo";
	$db_password = "list";
	$dbname = "todo";
	
	// Create connection
	$conn = new mysqli($servername, $db_username, $db_password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	} 
	
?>
