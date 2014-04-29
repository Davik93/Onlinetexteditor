<?php
include 'init.php';
if (empty($_POST) == false) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordAgain = $_POST['passwordAgain'];
    $email = $_POST['email'];

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
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors[] = "A valid address is required.";
    }

    if (email_exists($email) === true) {
        $errors[] = "Sorry. Email already exists.";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
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


        $username = $_POST["username"];

        // Desired folder structure
        $structure = './Users/' . $username . '';


        //Create user on localhost 
        $query = mysql_query("CREATE USER '$username'@'localhost' IDENTIFIED BY '$password'");
        
        // To create the nested structure, the $recursive parameter 
        // to mkdir() must be specified.
        if (!file_exists($structure)) {
            mkdir($structure, 0777, true);
        } else {
            echo 'Det blev fel';
        }

        header('Location: index.php?page=register.php?success');
        exit();
    }
}
include './Forms/Register-form.php';
?>

        

    </body>
</html>