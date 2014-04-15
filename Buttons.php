
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<div class="button"><a href="#">Button1</a></div>
<div class="undermenu">
    <?php
    $user_id = $_SESSION['user_id'];
    $username = getusername($user_id);
    


    if ($handle = opendir('./Users/' . $username . '/')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                
                echo '<a class="button2" href="#">' . $entry . '</a>';
                echo '<br>';
                echo '<div class="undermenubutton">';
                    if($handle2 = opendir('./Users/' . $username . '/'.$entry.'/')){
                        while (false !== ($entry2 = readdir($handle2))){
                           if($entry2 != "." && $entry2 != ".."){
                               echo $entry2;
                           }
                           
                        }
                    }
                echo '</div>';
            }
        }
        closedir($handle);
    } else {
        echo 'somethings wrong';
    }
    ?>
</div>



<div class="button"><a href="#">Button3</a></div>
<div class="button"><a href="#">Button4</a></div>

<script>
    $( ".button" ).click(function() {
        if( $( ".undermenu" ).is(":hidden")){
            $( ".undermenu" ).slideDown( "slow" );
        }else{
            $( ".undermenu" ).slideUp( "slow" );
        }

});
$( ".button2" ).click(function() {
        if( $( ".undermenubutton" ).is(":hidden")){
            $( ".undermenubutton" ).slideDown( "slow" );
        }else{
            $( ".undermenubutton" ).slideUp( "slow" );
        }
        
        
        

});
</script>