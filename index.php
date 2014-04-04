<?php
	include 'init.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>

<?php
	if (logged_in() === true) {
		echo 'Logged in <br />';
		echo '<a href="logout.php">Logout</a>';
	} else {
?>

	<form action="login.php" method="post">
		User: <input type="text" name="username" /> <br />
		Pass: <input type="password" name="password" />	<br />
		<input type="submit" value="Logga in!!!!!!!!!!!!!" /> <br />
		<a href="register.php">Registrera!</a>			
	</form>
<?php  } ?>
</body>
</html>