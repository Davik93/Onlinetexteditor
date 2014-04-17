
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<div id="buttonholder">

    <div class = "btn-group">
        <?php
        $user_id = $_SESSION['user_id'];
        $username = getusername($user_id);
        ?>

        <ul>
            <li><a href="#">list project</a>
                <ul>
                    <?php
                    if ($handle = opendir('./Users/')) {
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {

                                echo '<li><a href="#">' . $entry . '</a></li>';



//         Skript för att hämta     if ($handle2 = opendir('./Test/' . $entry . '/')) {
//          filer i projekt mapparna  while (false !== ($entry2 = readdir($handle2))) {
//                                        if ($entry2 != "." && $entry2 != "..") {
//                                            echo $entry2;
//                                        }
//                                    }
//                                }
                            }
                        }
                    }
                    ?>
                </ul>
            </li>
            <li><a href="#">Parent 2</a>
                
            </li>
            <li><a href="#">Parent 3</a>
                
            </li>
        </ul>
    </div>

    <script>
        $(document).ready(function() {
            $("li").click(function() {
                $('li > ul').not($(this).children("ul").toggle()).hide();

            });
        });


    </script>