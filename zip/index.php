<?php
	
	if (isset($_POST['zipTheFiles'])) {
		zipFiles();
	}

	function zipFiles() {
		$nameOfZip = $_POST['nameOfZip'];

		$zip = new ZipArchive();
		$filename = "./" . $nameOfZip . ".zip";

		if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
			exit("Can't open $filename");
		} 


		$directory = './lol/';
		if (! is_dir($directory)) {
			exit('Invalid path to the directory');
		}

		$files = array();

		foreach (scandir($directory) as $file) {
			if ('.' === $file) continue;
			if ('..' === $file) continue;

			$files[] = $file;

			$zip->addFile($file);
		}

		echo "Number of files: " . $zip->numFiles . "<br />";
		$zip->close();

		header("Content-type: application/zip");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-length: " . filesize($filename));
		header("Pragma: no cache");
		header("Expires: 0");
		readfile("$filename");
	}

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zip</title>
</head>
<body>
	<h1>Zip Files</h1>
	Create a zip file of the files... <br />
	<form method="post" action="">
		Name of the zip file: (You don't need to enter the .zip after the name) <br />
		<input type="text" name="nameOfZip">
		<input type="Submit" value="Create" name="zipTheFiles">
	</form>
</body>
</html>







