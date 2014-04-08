<?php
include 'init.php';
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
            <?php
            if (logged_in() === true) {
                include './website.php';
                
                
            } else {
                ?>

                <form action="login.php" method="post">
                    User: <input type="text" name="username" /> <br />
                    Pass: <input type="password" name="password" />	<br />
                    <input type="submit" value="Logga in!!!!!!!!!!!!!" /> <br />
                    <a href="register.php">Registrera!</a>			
                </form>
            <?php } ?>
        </div>
    </body>
</html>