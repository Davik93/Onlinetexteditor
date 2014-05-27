<?php 
include 'init.php';

if(empty($_POST) === FALSE){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) === true || empty($password) === true) {
		$errors [] = 'You need to enter a username and password'; 
	} else if (user_exists($username) === false) {
		$errors [] = 'That username does not exists!';
	} else {
		$login = login($username, $password);
		if ($login === false) {
			$errors [] = 'That username/password is incorrect';
		} else {
			$_SESSION['user_id'] = $login;
			header('Location: index.php');
			exit;
		}
	}
}else{
	$errors [] = 'No data recieved';
}
	output_errors($errors);

?>