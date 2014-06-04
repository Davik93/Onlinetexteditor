<?php
ob_start();
?>




<?php
$user_id = $_SESSION['user_id'];
$username = getusername($user_id);
include './Dialogboxes/dialogboxes.php';
?>

<div class="menuholder">
    <ul>
        <li><a class="menubtn" href="#">List project</a>

            <ul class="sub">
                <?php
                if ($handle = opendir('./Users/' . $username . '/')) {
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            echo '<li><a class="submenubtn" href="?page=codemirror&project=' . $entry . '">' . $entry . '</a></li>';
                        }
                    }
                    closedir($handle);
                }
                ?>
            </ul>
        </li>
        <li><a id="create-project" href="#">Create project</a></li>
        <li><a class="menubtn"  href="#">Handle databases</a>

            <ul class="sub">
                <li id="create-database">Create database</li> 
                <li><a class="submenubtn" href="http://217.208.72.142/phpmyadmin/index.php" target="_blank">Handle Tables</a></li>
            </ul>
        </li>
        <li><a class="menubtn" href="#">Settings</a>
            <ul class="sub">
                <li><a id="change-password" href="#">Change Password</a></li>
                <li><a id="change-email" href="#">Change Email</a></li>
            </ul>
        </li>
        <li><a class="menubtn" href="logout.php">Sign out</a></li>
    </ul>

</div>


<script>
$(window).load(function() {
    $("li").click(function() {
        $('li > ul').not($(this).children("ul").toggle()).hide();
    });      
});   
</script>