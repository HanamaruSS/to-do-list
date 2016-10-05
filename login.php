<!DOCTYPE html>
<html>
	<head>		
		<title>To-do List</title>
		<link type='text/css' rel='stylesheet' href='style.css'>
	</head>

	<body>
		<?php echo site_header($navbar); ?>
		<div class="col-sm-8 blog-main">
			<form class="form-signin" action="login_submit.php" method="post">
				<h2 class="form-signin-heading">Login</h2>
				<label for="username" class="sr-only">Username or E-mail Address</label>
				<input id="username" name="username" class="form-control" placeholder="Username or e-mail address" required autofocus>
				<label for="password" class="sr-only">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
				<!--
				<div class="checkbox">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
				-->
				<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
				<button id="form-submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div>
		<?php echo $footer; ?>
	</body>
</html>
