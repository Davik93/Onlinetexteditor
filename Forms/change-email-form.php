<?php

$user_id = $_SESSION['user_id'];
$username = getusername($user_id);
$q1 = "SELECT * FROM `users` WHERE `username` = '$username'";
$res1 = mysql_query($q1)or die("Fan nu blev det fel");

while ($row = mysql_fetch_array($res1)) {
    $id = $row['username'];
    $email = $row['email'];
}

?>
<form action="update-user-info.php" method="post">
            Change email:
            <input id="email" type="text" name="email" value="<?php echo $email;?>">
            <div class="position-dialog-btn">
            <input class="dialog-btn" type="submit" value="update">
            </div>
        </form>