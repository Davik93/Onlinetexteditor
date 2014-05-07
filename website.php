<div id="mainContainer">
    <div id="header"><p>WpmEditor</p></div>


        <div id="menu"><?php
            include 'Buttons.php';
            ?></div>
        <div id="secondContainer">SecondContainer
            <?php include 'codemirror.php'; ?>
            <?php
            if (isset($_GET['page'])) {
                include($_GET['page'] . ".php");
            } else {
                include 'showthis.php';
            }
            ?>
        </div>

</div>