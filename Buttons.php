
<script src="//code.jquery.com/jquery-1.10.2.js"></script>


<?php
$user_id = $_SESSION['user_id'];
$username = getusername($user_id);
?>
<ul>
    <li><a href="#">list project</a>

        <ul>
            <?php
            if ($handle = opendir('./Users/' . $username . '/')) {
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {

                        echo '<li><a href="#">' . $entry . '</a></li>';
                    }
                }
                closedir($handle);
            }
            ?>
        </ul>

    </li>
    <li><a href="#">Create project</a>


    </li>
    <li><a href="#"></a></li>
    <li><a href="#">Settings</a></li>

</ul>



<script>
    $(document).ready(function() {
        $("li").click(function() {
            //Toggle the child but don't include them in the hide selector using .not()
            $('li > ul').not($(this).children("ul").toggle()).hide();

        });
    });


</script>