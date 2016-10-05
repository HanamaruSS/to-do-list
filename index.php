<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
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
        $sql = "SELECT task, deadline, done, tag
                FROM todo_list LEFT JOIN junction_table
                ON junction_table.todo_id = todo_list.id
                LEFT JOIN tag
                ON junction_table.tag_id = tag.id
                ORDER BY todo_list.$order";
        // do we need OUTER for LEFT OUTER JOIN?

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                echo "<table> <tr>";
                echo "<th><a href='/?o=task'>Task</a></th>";
                echo "<th><a href='/?o=deadline'>Deadline</a></th>";
                echo "<th><a href='/?o=done'>Is it done?</a></th>";
                echo "<th>Tag(s)</th></tr>";

                // output data of each row
                while($row = $result->fetch_assoc()) {
                        if($row["done"]){
                                echo "<tr class='done'>";
                        } else {
                                echo "<tr class='not-done'>";
                        }

                        echo "<td>".$row["task"]. "</td><td>";
                        echo $row["deadline"] . "</td><td>";

                        if ($row["done"] == true) {
                                echo "Done!! :)";
                        } else {
                                echo "Not yet... :(";
                        }

                        echo "</td><td>" . $row["tag"];

                        echo "</td></tr>";
                }
                echo "</table>";

        } else {
                echo "No Task to be done. Hurray! \o/";
        }

        $conn->close();
        ?>

    </body>
</html>
