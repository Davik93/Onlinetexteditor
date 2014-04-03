<?php

$main = $_POST["Main"];

// Desired folder structure
$structure = './' . $main . '';

// To create the nested structure, the $recursive parameter 
// to mkdir() must be specified.


if (!file_exists($structure)) {
    mkdir($structure, 0777, true);
    mkdir($structure . '/css', 0777, true);
    mkdir($structure . '/js', 0777, true);
} else {
    echo 'Det blev fel';
}


$ourFileName = ''.$main.'/Index.php';
$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
fclose($ourFileHandle);

$ourFileName2 = ''.$main.'/css/style.css';
$ourFileHandle2 = fopen($ourFileName2, 'w') or die("can't open file");
fclose($ourFileHandle2);

$ourFileName3 = ''.$main.'/js/script.js';
$ourFileHandle3 = fopen($ourFileName3, 'w') or die("can't open file");
fclose($ourFileHandle3);

$file = ''.$main.'/Index.php';
$htmltags = '<!DOCTYPE html>
<html>
    <head>
        <title>'.$main.'</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script src="js/script.js"></script>
    </head>
    <body>
        <div></div>
    </body>
</html>';
file_put_contents($file, $htmltags, FILE_APPEND | LOCK_EX);


header('Location: Index.php');
?>