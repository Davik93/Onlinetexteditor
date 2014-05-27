<?php
$user_id = $_SESSION['user_id'];
$username = getusername($user_id);

$projectName = $_GET['project'];

if (isset($_POST['laddaFil'])) {

    $select = $_POST['select'];
    $file = './Users/' . $username . '/' . $projectName . '/' . $select;
} else if (isset($_POST['spara'])) {
    $code = $_POST['codeEdit'];
    $fileName = $_POST['fileName'];

    if (empty($fileName)) {
        echo "<br /> you need to enter a filename";
    } else {
        $handle = fopen('./Users/' . $username . '/' . $projectName . '/' . $fileName, "w+");
        fwrite($handle, $code);
        fclose($handle);
        echo "Saved!";
    }
} elseif (isset($_POST['taBortFil'])) {

    if (!empty($_POST['fileName'])) {
        $getfileName = $_POST['fileName'];
        $fileName = './Users/' . $username . '/' . $projectName . '/' . $getfileName;
        unlink($fileName);
    } else {
        echo "Du måste ladda den fil du vill ta bort";
    }
} else if (isset($_POST['taBortProjekt'])) {
    $pathToProject = './Users/' . $username . '/' . $projectName . '/';
    $project = $pathToProject;
    remove_project($project);

    header("Location: index.php");
    exit;
} else if (isset($_POST['visaProjekt'])) {
    // path to the project
    $projectPath = './Users/' . $username . '/' . $projectName . '/';
    header('Location: ' . $projectPath . '');
    exit;
}
?>


<form action="" method="post">

    <div id="edit-holder-code">
        <div class="header-holder-edit">
            <div class="load-holder">
                <select name="select">

                    <?php
                    if ($handle = opendir('./Users/' . $username . '/' . $projectName . '/')) {
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {
                                if(isset($select) AND $select == $entry){
                                    echo '<option SELECTED>' . $entry . '</option>';
                                } else {
                                    echo '<option>' . $entry . '</option>';
                                }
                            }
                        }
                        closedir($handle);
                    }
                    ?>

                </select>

                <input class="edit-btn" type="submit" value="Load" name="laddaFil" />
                <div class="showdelete-holder">
                    <input class="edit-btn" type="submit" value="Show project" name="visaProjekt" />
                    <input class="edit-btn" type="submit" onclick="return(confirm('Är du säker på att du vill ta bort projektet: <?php echo $projectName ?>
                                    \n Du kan inte ångra dig sen.'));" 
                           value="Delete project" name="taBortProjekt" />
                </div>
            </div>
        </div>


        <textarea rows="4" cols="50" id="codeEdit" name="codeEdit">

            <?php
            if (!empty($file)) {
                echo htmlentities(file_get_contents($file));
            }
            ?>

        </textarea>
        <div class="footer-holder">
            <div class="name-holder-code">
                File/<input  type="text" name="fileName" value="<?php if (!empty($select)) echo $select; ?>" />
                <input class="edit-btn" type="submit" onclick="return(confirm('Är du säker på att du vill ta bort?'));" value="Delete file" name="taBortFil" />
                <input class="edit-btn" type="submit" value="Save" name="spara" />

            </div>
        </div>
    </div>
</form>




<script type="text/javascript">
    window.onload = function() {
        var editableCodeMirror = CodeMirror.fromTextArea(document.getElementById('codeEdit'), {
            lineNumbers: true,
            matchBrackets: true,
            autoCloseBrackets: true,
            mode: "application/x-httpd-php",
            theme: "default",
            indentUnit: 4,
            viewportMargin: Infinity,
            indentWithTabs: true,
        });


    }
</script>
