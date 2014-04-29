<?php
 if (!isset($_SESSION)) {
        session_start();
    }

require 'db/dbconn.php';
require './functions/functions.php';

$errors = array();
?>