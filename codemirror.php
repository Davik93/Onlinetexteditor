<?php
$user_id = $_SESSION['user_id'];
$username = getusername($user_id);

$projectName = $_GET['project'];

if (isset($_POST['laddaFil'])) {

	$select = $_POST['select'];
	$file = './Users/'.$username.'/'.$projectName.'/' . $select;

} else if (isset($_POST['spara'])) {
	$code = $_POST['codeEdit'];
	$fileName = $_POST['fileName'];

	if(empty($fileName)) {
		echo "<br /> you need to enter a filename";
	} else {
		$handle = fopen('./Users/'.$username.'/'.$projectName.'/' . $fileName, "w+");
		fwrite($handle, $code);
		fclose($handle);
		echo "Saved!";
	}
} elseif (isset($_POST['taBortFil'])) {

	if (!empty($_POST['fileName'])) {
		$getfileName = $_POST['fileName'];
		$fileName = './Users/'.$username.'/'.$projectName.'/' . $getfileName;
		unlink($fileName);
	} else {
		echo "Du måste ladda den fil du vill ta bort";
	}

} else if (isset($_POST['taBortProjekt'])) {
	$pathToProject = './Users/'.$username.'/'.$projectName .'/';
	$project = $pathToProject;
	remove_project($project);
	
	header("Location: index.php");
	exit;
} else if (isset($_POST['visaProjekt'])) {
	// path to the project
	$projectPath = './Users/'.$username.'/'.$projectName .'/';
	header('Location: '.$projectPath.'');
	exit;
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
if ($handle = opendir('./Users/'.$username.'/'.$projectName.'/')) {
	while (false !== ($entry = readdir($handle))) {
		if ($entry != "." && $entry != "..") {
			echo '<option>' . $entry .'</option>';
		}
	}
	closedir($handle);
}
?>

</select>

<input type="submit" value="Ladda" name="laddaFil" />

<input type="text" name="fileName" value="<?php if(!empty($select)) echo $select;?>" />

<input type="submit" value="Spara" name="spara" />

<input type="submit" onclick="return(confirm('Är du säker på att du vill ta bort?'));" value="Ta bort" name="taBortFil" />

<input type="submit" onclick="return(confirm('Är du säker på att du vill ta bort projektet: <?php echo $projectName ?>
\n Du kan inte ångra dig sen.'));" 
value="Ta bort Projekt" name="taBortProjekt" />

<input type="submit" value="Visa Projekt" name="visaProjekt" />

<div class="codemirrorholder">
<textarea rows="4" cols="50" id="codeEdit" name="codeEdit">

<?php

if (!empty($file)) {
	 echo htmlentities(file_get_contents($file));
} 

?>

</textarea>
</div>
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
	        indentWithTabs: true,
                

	    });

	    editableCodeMirror.setSize(800, 755);
    }
</script>

</body>
</html>