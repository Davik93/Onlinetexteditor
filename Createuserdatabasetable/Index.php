<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       
        <div>Create database</div>
        <form action="Createdatabase.php" method="post">
            <input type="text" name="database">
            <input type="submit" value="create">
        </form>
        <div><a href="http://localhost/phpmyadmin/index.php" TARGET="_blank">Create Table</a></div>
        
        
        <?php
        mysql_connect("localhost", "root", "hej123") or die("Error with database connection");
        
        $query = mysql_query("CREATE USER 'Martin'@'localhost' IDENTIFIED BY 'password'");
        
        
        ?>
    </body>
</html>
