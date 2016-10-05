<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
	<title>To-do List</title>
    </head>

    <body>
        <?php
        include 'header.php';
        ?>

	<h1>Things that need to be done</h1>

	<?php
	include 'db.php';

        $order = htmlspecialchars($_GET["o"]);
        if ($order === "") {
                $order = "deadline";
        }
	$sql = "SELECT task, deadline, done FROM todo_list ORDER BY $order";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
                echo "<table> <tr>";
                echo "<th><a href='/?o=task'>Task</a></th>";
                echo "<th><a href='/?o=deadline'>Deadline</a></th>";
                echo "<th><a href='/?o=done'>Is it done?</a></th> </tr>";

                // output data of each row
                while($row = $result->fetch_assoc()) {
		if($row["done"]){
			echo "<tr class='done'>";
		} else {
			echo "<tr class='not-done'>";
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
