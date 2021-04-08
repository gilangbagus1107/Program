<!DOCTYPE html>
<html>
	<header>
		<meta charset="utf-8">
		<title>Megatek</title>
		<link rel="stylesheet" href="css/style.css">
	</header>
<body>
		<?php
			include 'topbar.php';
		?>
		<?php
			if (isset($error)) {
	 		echo $error;
			}
		?>
	<div class="login-box">
		<h1>Login</h1>
		<form action="login_prosess.php" method="post">
			<div class="textbox">
				<img width="26px" src="icon\user.png"></img>
				<input type="text" placeholder="Username" name="username" value=""/>
			</div>

			<div class="textbox">
				<img width="26px" src="icon\lock.png"></img>
				<input type="password" placeholder="Password" name="password" value=""/>
			</div>

			<input type="hidden" name="redirect" value=" <?php echo $redirect ?>"/>
			<input class="btn" type="submit" name="submit" value="Sign in">

 		</form>
	</div>
		<?php
			include 'bottombar.php';
		?>
</body>
</html>
