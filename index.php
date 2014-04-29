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
            <h1 class="title">Some Title</h1>
            <div id="main-container">

                <?php
                include './Forms/login-form.php';
                ?>

            <?php } ?>

        </div>
    </body>
</html>