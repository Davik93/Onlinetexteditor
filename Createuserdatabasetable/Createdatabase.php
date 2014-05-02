<?php
$name = $_POST['database'];
mysql_connect("localhost", "root", "hej123") or die("Error with database connection");
$query = mysql_query("CREATE DATABASE $name");
$query2 = mysql_query("GRANT ALL PRIVILEGES ON $name . * TO 'Robin'@'localhost'");
$query3 = mysql_query("FLUSH PRIVILEGES");
header('Location: Index.php');
?>

