<?php
ob_start();
?>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>



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
                <li><a class="submenubtn" href="http://localhost/phpmyadmin/index.php" target="_blank">Handle Tables</a></li>
            </ul>
        </li>
        <li><a class="menubtn" href="#">Settings</a>
            <ul class="sub">
                <li><a id="change-password" href="#">Change Password</a></li>
                <li><a id="change-email" href="#">Change Email</a></li>
            </ul>
        </li>
        <li><a class="menubtn" href="logout.php">Logga ut</a></li>
    </ul>

</div>


<script>
    $(window).load(function() {
        $("li").click(function() {
            $('li > ul').not($(this).children("ul").toggle()).hide();

        });
        
    });
   
</script>