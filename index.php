<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>To-do List</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>

	<body>
	<div class="container">
	<div class="starter-template">
		<?php
			require_once 'header.php';
			require_once 'db.php';
		?>

		<h1>Things that need to be done</h1>

		<?php

			$order = htmlspecialchars($_GET["o"]);
			if ($order === "" || ($order !== "task" && $order !== "deadline" && $order !== "done" && $order !== "admin")) {
				$order = "deadline";
			}
			if ($order === "admin") {
				$order = "admin_id";
			}

			$sql = "SELECT * FROM todo_list	ORDER BY todo_list.$order";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "<table class='table table-striped'><thead><tr>";
				echo "<th><a href='/?o=task'>Task</a></th>";
				echo "<th><a href='/?o=deadline'>Deadline</a></th>";
				echo "<th><a href='/?o=done'>Is it done?</a></th>";
				echo "<th>Tag(s)</th>";
				echo "<th><a href='/?o=admin'>Created by<th></tr></thead>";
				echo "<tbody>";

				// output data of each row
				while($row = $result->fetch_row()) {

					if($row[3]){
						echo "<tr class='done'>";
					} else {
						echo "<tr class='not-done'>";
					}

					echo "<td>".$row[1]. "</td><td>";
					echo $row[2] . "</td><td>";

					if ($row[3]) {
						echo "Done!! :)";
					} else {
						echo "Not yet... :(";
					}

					echo "</td><td>";

					$sql2 = "SELECT * FROM junction_table WHERE junction_table.todo_id = $row[0]";

					$result2 = $conn->query($sql2);

					if($result2->num_rows > 0) {
						while($row2 = $result2->fetch_row()) {
							$sql3 = "SELECT * FROM tag WHERE tag.id = $row2[1]";
							$result3 = $conn->query($sql3);

							if($result3->num_rows > 0) {
								while($row3 = $result3->fetch_row()){
									echo $row3[1] . " ";
								}
							}

						}
					}

					echo "</td><td>";

					$sql4 = "SELECT username FROM admin WHERE admin.id = $row[4]";

					$result4 = $conn->query($sql4);

					if($result4->num_rows > 0) {
						while($row4 = $result4->fetch_row()){
							echo $row4[0];
						}
					}
					echo "</td></tr>";
				}

				echo "</tbody></table>";

			} else {
				echo "No Task to be done. Hurray! \o/";
			}

		?>
	</div>
	</div>
	</body>
</html>
