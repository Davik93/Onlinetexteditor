<?php

function output_errors($errors) {
	$output = array();
	foreach ($errors as $error) {
		echo '- '. $error . '<br />';
	}
}

function reg_user($register_data) {
	$register_data['password'] = md5($register_data['password']);

	$fields =  '`' . implode('`, `', array_keys($register_data)) . '`';
	$data = '\'' . implode('\', \'', $register_data) . '\'';
	
	mysql_query("INSERT INTO `users` ($fields) VALUES($data)");
}

function user_exists($username) {
	$username = mysql_real_escape_string($username);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'");
	return (mysql_result($query, 0) == 1) ? true : false;
}

function email_exists($email) {
	$email = mysql_real_escape_string($email);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$email'");
	return (mysql_result($query, 0) == 1) ? true : false;
}

function user_id_from_username($username) {
	$username = mysql_real_escape_string($username);
	$query = mysql_query("SELECT `user_id` FROM `users` WHERE `username` = '$username'");
	return mysql_result($query, 0, 'user_id');
}

//Login funktionen
function login($username, $password) {
	$user_id = user_id_from_username($username);

	$username = mysql_real_escape_string($username);
	$password = md5($password);

	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
	return (mysql_result($query, 0) == 1) ? $user_id : false;
}

function logged_in() {
	return (isset($_SESSION['user_id'])) ? true : false;
}

?>