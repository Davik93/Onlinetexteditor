<?php
include 'init.php';

$user_id = $_SESSION['user_id'];
$username = getusername($user_id);


if(isset($_POST['email'])){
    $email = $_POST['email'];
    if(email_exists($email)) {
        echo 'Sämst';
    } else {
        update_email($email, $username);
    }
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
    $password = md5($password);
    update_password($password, $username);
}

function update_password($password, $username){
$q2 = "UPDATE users SET password='$password' WHERE username='$username'";
$res1 = mysql_query($q2) or die(mysql_error());

header('Location: index.php');
exit();
}
function update_email($email, $username){
$q3 = "UPDATE users SET email='$email' WHERE username='$username'";
$res2 = mysql_query($q3) or die(mysql_error());

header('Location: index.php');
exit();
}
?>
