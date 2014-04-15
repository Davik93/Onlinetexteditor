<?php

if ($_POST['codeEdit']) {
	$code = $_POST['codeEdit'];

	$handle = fopen("hej.html", "w+");
	fwrite($handle, $code);
	fclose($handle);
}


?>