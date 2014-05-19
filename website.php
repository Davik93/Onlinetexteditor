<link href="css/smoothness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.custom.js"></script>

<div id="mainContainer">
    <div id="header"><p><a href="index.php"><img id="logga" src="css/Logga.png"></a></p></div>


        <div id="menu"><?php
            include 'Buttons.php';
            ?></div>
        <div id="secondContainer">
            <?php //include 'codemirror.php'; ?>
            <?php
            if (isset($_GET['page'])) {
                include($_GET['page'] . ".php");
            } else {
                include 'showthis.php';
            }
            ?>
            

        </div>

</div>


