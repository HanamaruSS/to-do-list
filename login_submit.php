<!DOCTYPE html>
<html lang='en'>
        <head>
                <meta charset='utf-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>

                <title>To-do List</title>

                <link href='style.css' rel='stylesheet'>
        </head>

        <body>
                <?php require_once 'header.php' 
		      require_once 'db.php';
		?>
                <?php
                

                if ($_SERVER["REQUEST_METHOD"] != "POST") {
                        $message = "An error has occured. Please try again.";
                } elseif (empty($_POST["username"])) {
                        $message = "Name is required";
                } else {
                        $username = $_POST["username"];
                }

                if (empty($_POST["password"])) {
                        $message = "Password is required";
                } else {
                        $password = $_POST["password"];
                }

                $sql = "SELECT * FROM admin where username = '$username'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        if ($row["password"] === $password) {
                                $message = "You have successfully logged in.";
                        } else {
                                $message = "Password does not match. Please try again.";
                        }
                } else {
                         $message = "Username $username does not exist. Please try again.";
                }

                $conn->close();
                ?>

                <div class="col-sm-8 blog-main">
                        <p><?php echo $message; ?></p>
                </div><!-- /.blog-main -->

        </body>
</html>
