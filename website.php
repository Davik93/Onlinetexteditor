

<div id="mainContainer">
    <div id="header"><a href="index.php"><img id="logga" src="css/Logga.png"></a></div>


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


