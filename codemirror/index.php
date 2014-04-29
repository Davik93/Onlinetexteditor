<?php

if (isset($_POST['laddaFil'])) {

	$select = $_POST['select'];
	$file = './example/' . $select;

} else if (isset($_POST['spara'])) {
	$code = $_POST['codeEdit'];
	$fileName = $_POST['fileName'];

	if(empty($fileName)) {
		echo "<br /> you need to enter a filename";
	} else {
		$handle = fopen('./example/' . $fileName, "w+");
		fwrite($handle, $code);
		fclose($handle);
		echo "Saved!";
	}
} elseif (isset($_POST['taBortFil'])) {

	if (!empty($_POST['fileName'])) {
		$getfileName = $_POST['fileName'];
		$fileName = './example/' . $getfileName;
		unlink($fileName);
	} else {
		echo "Du måste ladda den fil du vill ta bort";
	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Codemirror</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="" method="post">

<select name="select">

<?php 
if ($handle = opendir('./example/')) {
	while (false !== ($entry = readdir($handle))) {
		if ($entry != "." && $entry != "..") {
			echo '<option>' . $entry .'</option>';
		}
	}
	closedir($handle);
}
?>

</select>

<input type="submit" value="Ladda" name="laddaFil">

<input type="text" name="fileName" value="<?php  if(!empty($select)) echo $select;?>">

<input type="submit" value="Spara" name="spara">

<input type="submit" onclick="return(confirm('Är du säker på att du vill ta bort?'));" value="Ta bort" name="taBortFil">

<textarea rows="4" cols="50" id="codeEdit" name="codeEdit">
<?php

if (!empty($file)) {
	 echo htmlentities(file_get_contents($file));
} 

?>

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