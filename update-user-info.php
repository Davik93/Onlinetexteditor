<?php
include 'init.php';
$password = $_POST['password'];
$user_id = $_SESSION['user_id'];
$username = getusername($user_id);
$password = md5($password);

$q2 = "UPDATE users SET password='$password' WHERE username='$username'";
$res4 = mysql_query($q2) or die(mysql_error());

header('Location: index.php');
?>
