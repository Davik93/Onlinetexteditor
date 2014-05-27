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
        <script  src="lib/codemirror.js"></script>
        <link rel="stylesheet" href="lib/codemirror.css">
        <script src="addon/edit/matchbrackets.js"></script>
        <script src="addon/edit/closebrackets.js"></script>
        <script src="mode/htmlmixed/htmlmixed.js"></script>
        <link rel="stylesheet" type="text/css" href="theme/default.css">
        <script src="mode/xml/xml.js"></script>
        <script src="mode/javascript/javascript.js"></script>
        <script src="mode/css/css.js"></script>
        <script src="mode/clike/clike.js"></script>
        <script src="mode/php/php.js"></script>
        <link href="css/smoothness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
        <script src="js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>
        <?php
        if (logged_in() === true) {
            include './website.php';
        } else {
            ?>
        
            <div id="main-container">
            <div class="headerholder"><img id="loginlogga" src="css/Logga.png"></div> 
                <?php
                include './Forms/login-form.php';
                ?>

            <?php } ?>

        </div>
    </body>
</html>