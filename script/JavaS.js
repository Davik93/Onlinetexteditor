$(function() {
   
    $("#dialogbox").dialog({
        autoOpen: false,
        height: 300,
        width: 350,
        modal: true




    });
    $("#opener")
            .button()
            .click(function() {
                $("#dialogbox").dialog("open");
            });
});
