<?php
include './connect-database.php';
?>
<?php
    $query = "SELECT * FROM `bilar`";
    $result = mysql_query($query) or die("Fel");
    while ($row = mysql_fetch_assoc($result)){
       echo '<div class="rutor">';
       echo 'Regnr:' . $row['Regnr'].'<br>';
       echo 'Bilmärke:' . $row['Bilmarke'].'<br>';
       echo 'Färg:' . $row['Farg'];
       echo '</div>';
    }
?>