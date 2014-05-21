
<?php
include './init.php';
$user_id = $_SESSION['user_id'];
$username = getusername($user_id);
$name = $_POST['database'];
$query = mysql_query("CREATE DATABASE $name");
$query2 = mysql_query("GRANT ALL PRIVILEGES ON $name . * TO $username@'localhost'");
$query3 = mysql_query("FLUSH PRIVILEGES");
header('Location: http://localhost/phpmyadmin/index.php');
exit;
?>

