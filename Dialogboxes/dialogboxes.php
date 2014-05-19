<link href="css/smoothness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.custom.js"></script>
<div id="dialog" title="Create project">
    
    <?php include './Forms/create-project-form.php';?>
    
</div>
<div id="dialog-database" title="Create database">
    <?php include './Forms/create-database-form.php'; ?>
</div>
<div id="dialog-email" title="Change email">
    <?php include './Forms/change-email-form.php'; ?>
</div>
<div id="dialog-password" title="Change password">
    <?php include './Forms/change-password-form.php'?>
</div>

<script>
$(window).load(function() {
        
        $('#create-project').on("click", function() {
            $("#dialog").dialog("open");
        });
        $('#create-database').on("click", function() {
            $("#dialog-database").dialog("open");
        });

        $('#dialog').dialog({
            autoOpen: false,
            position: 'center',
            width: 300,
            height: 200,
            modal: true
        });
        $('#dialog-database').dialog({
            autoOpen: false,
            position: 'center',
            width: 300,
            height: 200,
            modal: true
        });
        $('#project').on("click",function (){
            $(this).dialog("close");
        });
        $('#database').on("click",function (){
            $(this).dialog("close");
        });
        
        
        $('#change-password').on("click", function() {
            $("#dialog-password").dialog("open");
        });
        $('#dialog-password').dialog({
            autoOpen: false,
            position: 'center',
            width: 300,
            height: 200,
            modal: true
        });
        $('#password').on("click",function (){
            $(this).dialog("close");
        });
        $('#change-email').on("click", function() {
            $("#dialog-email").dialog("open");
        });
        $('#dialog-email').dialog({
            autoOpen: false,
            position: 'center',
            width: 300,
            height: 200,
            modal: true
        });
        $('#email').on("click",function (){
            $(this).dialog("close");
        });
        
    });
</script>