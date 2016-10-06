<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<link type='text/css' rel='stylesheet' href='style.css'>
		<title>To-do List</title>

	</head>
        <?php include 'header.php' ?>
	<body>
		<form class="form-signin" action="login_submit.php" method="post">
			<h2 class="form-signin-heading">Login</h2>
			<label for="username" class="sr-only">Username</label>
			<input id="username" name="username" class="form-control" placeholder="Username" required> <!-- what is autofocus for -->
			<label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        <button id="form-submit" class="btn-submit" type="submit">Sign in</button>
                </form>
	</body>
</html>
