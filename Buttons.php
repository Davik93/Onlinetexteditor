
<script src="//code.jquery.com/jquery-1.10.2.js"></script>


<?php
$user_id = $_SESSION['user_id'];
$username = getusername($user_id);
?>

    <div class="menuholder">
        <ul>
            <li><a class="menubtn" href="#">List project</a>

                <ul class="sub">
                    <?php
                    if ($handle = opendir('./Users/' . $username . '/')) {
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {

                                echo '<li><a class="submenubtn" href="#">' . $entry . '</a></li>';
                            }
                        }
                        closedir($handle);
                    }
                    ?>
                </ul>
            </li>
            <li><a class="menubtn" href="#">Create project</a>
                <ul class="sub">
                    <li class="specialbtn"><?php include './Forms/create-project-form.php'; ?></li>
                </ul>

            </li>
            <li><a class="menubtn" href="#">Create database</a>

                <ul class="sub">
                    <li class="specialbtn"><?php include './Forms/create-database-form.php';?>
                    </li> 
                     <li><a class="submenubtn" href="http://localhost/phpmyadmin/index.php" target="_blank">Handle Tables</a></li>
                </ul>
            </li>
            <li><a class="menubtn" href="#">Settings</a>
                <ul class="sub">
                    <li><a class="submenubtn" href="index.php?page=settings&changepass">Change Password</a></li>
                    <li><a class="submenubtn" href="index.php?page=settings&changeemail">Change Email</a></li>
                </ul>
            </li>
            <li><a class="menubtn" href="logout.php">Logga ut</a></li>
        </ul>

    </div>

<style>
    .specialbtn{
        opacity: 0.6;
        height: 40px;
        width: 200px;
        background-color:#74ad5a;
    }
    .submenubtn{
        opacity: 0.6;
    }
    .submenubtn:hover{
        opacity: 0.7;
    }
    .menubtn, .submenubtn {
        -moz-box-shadow:inset 0px 1px 0px 0px #9acc85;
        -webkit-box-shadow:inset 0px 1px 0px 0px #9acc85;
        box-shadow:inset 0px 1px 0px 0px #9acc85;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #74ad5a), color-stop(1, #68a54b));
        background:-moz-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
        background:-webkit-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
        background:-o-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
        background:-ms-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
        background:linear-gradient(to bottom, #74ad5a 5%, #68a54b 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#74ad5a', endColorstr='#68a54b',GradientType=0);
        background-color:#74ad5a;
        border:1px solid #3b6e22;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:arial;
        font-size:13px;
        font-weight:bold;
        padding:6px 12px;
        width: 174px;
        height: 25px;
        text-align: center;
        line-height: 25px;
        text-decoration:none;
    }
    .menubtn:hover , .submenubtn:hover{
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #68a54b), color-stop(1, #74ad5a));
        background:-moz-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
        background:-webkit-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
        background:-o-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
        background:-ms-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
        background:linear-gradient(to bottom, #68a54b 5%, #74ad5a 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#68a54b', endColorstr='#74ad5a',GradientType=0);
        background-color:#68a54b;
    }
    .menubtn:active, .submenubtn:active {
        position:relative;
        top:1px;
    }
    ul{
        list-style: none;
    }


    .sub {
        display: none;
    }

</style>

<script>
    $(document).ready(function() {
        $("li").click(function() {
            $('li > ul').not($(this).children("ul").toggle()).hide();

        });
    });
</script>