Settings

<?php

if(isset($_GET['changepass'])){
    include './Forms/change-password-form.php';
}
if(isset($_GET['changeemail'])){
    include './Forms/change-email-form.php';
}

?>