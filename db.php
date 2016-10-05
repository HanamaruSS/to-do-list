<?php
	$servername = "localhost";
	$username = "todo";
	$password = "list";
	$dbname = "todo";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	} 
	
?>
