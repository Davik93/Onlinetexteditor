<?php

$directory = './lol/';

if(! is_dir($directory)) {
	exit('Invalid directory path');
}

$files = array();

foreach (scandir($directory) as $file) {
	if ('.' === $file) continue;
	if ('..' === $file) continue; 

	$files[] = $file;
}



?>