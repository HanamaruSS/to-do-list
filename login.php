<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<link type='text/css' rel='stylesheet' href='style.css'>
		<title>To-do List</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
		<?php require_once 'header.php' ?>
	<body>
	<div class="container">
		<form class="form-signin" action="login_submit.php" method="post">
			<h2 class="form-signin-heading">Login</h2>
			<label for="username" class="sr-only">Username</label>
			<input id="username" name="username" class="form-control" placeholder="Username" required> <!-- what is autofocus for -->
			<label for="password" class="sr-only">Password</label>
						<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
						<button id="form-submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				</form>
	</div>
	</body>
</html>
