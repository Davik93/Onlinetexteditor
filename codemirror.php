<?php

if (!empty($_POST)) {
	$code = $_POST['codeEdit'];
	$fileName = $_POST['fileName'];
	
	if (empty($fileName)) {
		echo "<br /> You need to enter a filename!";
	} else {

		$handle = fopen('./example/' . $fileName, "w+");
		fwrite($handle, $code);
		fclose($handle);
		echo "Saved! <a href='./example/'" . $fileName . ">". $fileName . "</a>";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Codemirror</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form method="post" action="">
	<br />
	Name of file: <input type="text" name="fileName" /> <br /> <br />
	<textarea rows="4" cols="50" id="codeEdit" name="codeEdit">

	<?php echo htmlentities(file_get_contents('test.php')) ?>


	</textarea>
	<br />
	<input type="submit" value="Spara">
</form>



<script  src="lib/codemirror.js"></script>
<link rel="stylesheet" href="lib/codemirror.css">
<script src="addon/edit/matchbrackets.js"></script>
<script src="addon/edit/closebrackets.js"></script>
<script src="mode/htmlmixed/htmlmixed.js"></script>
<link rel="stylesheet" type="text/css" href="theme/default.css">
<script src="mode/xml/xml.js"></script>
<script src="mode/javascript/javascript.js"></script>
<script src="mode/css/css.js"></script>
<script src="mode/clike/clike.js"></script>
<script src="mode/php/php.js"></script>


<script type="text/javascript">
	window.onload = function () {
		var editableCodeMirror = CodeMirror.fromTextArea(document.getElementById('codeEdit'), {
	        lineNumbers: true,
	        matchBrackets: true,
	        autoCloseBrackets: true,
	        mode: "application/x-httpd-php",
	        theme: "default",
	        indentUnit: 4,
	        indentWithTabs: true

	    });

	    editableCodeMirror.setSize(700, 300);
    }
</script>

</body>
</html>