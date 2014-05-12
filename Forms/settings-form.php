<?php

$user_id = $_SESSION['user_id'];
$username = getusername($user_id);
$q1 = "SELECT * FROM `users` WHERE `username` = '$username'";
$res1 = mysql_query($q1)or die("Fan nu blev det fel");

while ($row = mysql_fetch_array($res1)) {
    $id = $row['username'];
    $pass = $row['password'];
}

?>
<form action="update-user-info.php" method="post">
            Change password:
            <input type="password" name="password">
            <input type="submit" value="update">
            
        </form>