<?php
	include 'init.php';
	if (empty($_POST) == false) {
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$passwordAgain = $_POST['passwordAgain'];
		$email    = $_POST['email'];

		if (user_exists($username) === true) {
			$errors[] = "That username already exists.";	
		}
		if (preg_match("/\\s/", $username) == true) {
			$errors[] = "You can't have spaces in username.";
		}

		if (strlen($password) < 6) {
			$errors[] = "Password too short. Must be longer than 6 chars.";
		}
		if ($password !== $passwordAgain) {
			$errors[] = "Passwords doesnt match.";
		}
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)  {
			$errors[] = "A valid address is required.";
		} 

		if (email_exists($email) === true) {
			$errors[] = "Sorry. Email already exists.";
		}

	}
	output_errors($errors);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
</head>
	<body>

		<?php

			if (isset($_GET['success']) && empty($_GET['success'])) {
				echo "You are registered!";
			} else {

				if (empty($_POST) === false && empty($errors) === true) {
					// Reg the user
					$register_data = array(
						'username' => $_POST['username'],
						'password' => $_POST['password'],
						'email' => $_POST['email']);
				

				reg_user($register_data);
				header('Location: register.php?success');
				exit();
				} 
			}
		?>

		<form action="" method="post">
			Användarnamn: <input type="text" name="username" /> <br />
			Lösenord: <input type="password" name="password" /> <br />
			Lösenord igen: <input type="password" name="passwordAgain" /> <br />
			Email: <input type="text" name="email" /> <br />
			<input type="submit" value="Registrera" />
		</form>

	</body>
</html>