<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
	<title>To-do List</title>
    </head>

    <body>
	
	<h1>Things that need to be done</h1>

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
	
	$sql = "SELECT task, deadline, done FROM todo_list ORDER BY deadline";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	    echo "<table> <tr> <th>Task</th> <th>Deadline</th> <th>Is it done?</th> </tr>";	    
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
		if($row["done"]){
			echo "<tr class=\"done\">";
		} else {
			echo "<tr class=\"not-done\">";
		}
		echo "<td>".$row["task"]. "</td><td>" . $row["deadline"] . "</td><td>" . $row["done"]. "</td></tr>";
	    }
	    echo "</table>";

	} else {
	    echo "No Task to be done. Hurray! \o/";
	}

	$conn->close();
	?>
	
    </body>
</html>
