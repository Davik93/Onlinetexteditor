<?php

if (empty($_POST['select'])) {
	$file = "newfile.php";
} else {
	$select = $_POST['select'];
	$file = select;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Codemirror</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="" method="post">

<select name="select">
	<option>test1.php</option>
	<option>test2.php</option>
	<option>test3.php</option>
</select>

<input type="submit" value="Ladda">

<textarea rows="4" cols="50" id="codeEdit" name="codeEdit">
<?php echo htmlentities(file_get_contents($file)); ?>
</textarea>

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