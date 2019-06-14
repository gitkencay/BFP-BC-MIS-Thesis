<!DOCTYPE html>
<html>

<head>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <meta charset=utf-8 />
    <title>Hey Test</title>
    <style>
    #dialog {   
        display: none;
        }
    </style>
</head>

<body>
    <script>
    function findUrls() {
      show_box(); // this will show jquery dialog..
      return false;
    }

     function show_box() {
       //$(document).ready(function(){ // no needs for that
        var myForm = document.forms.myForm;
       $("#dialog").dialog({
         autoOpen: false,
         width: 400,
         buttons: [{
           text: "Yes",
           click: function () {
            document.myForm.submit();
           }
         }, {
           text: "No",
           click: function () {
             $(this).dialog("close");
           }
         }, {
           text: "Cancel",
           click: function () {
             $(this).dialog("close");
           }
         }]
       });
       $("#dialog").dialog("open");
       //});
     }
    $(document).ready(function(){
      //function submi_form() { remove this as no accual call for submit_form nowhere
        var myForm = document.forms.myForm;
        var formSubmit = document.getElementById('formSubmit');
        formSubmit.onclick = function () {
            $(this).submit();
        };
      //}
    });
    
    </script>
    <div id="dialog" title="Dialog Title">
        <p>Dialog box text.....Dialog box text....Dialog box text</p>
        <button id="formSubmit">Click me</button>
    </div>
    <form name="myForm" id="myForm" action="actions.php" method="post" onsubmit="return findUrls();">
        <textarea id="text"></textarea>
        <input type="submit" name="submit" value="send" />
    </form>
</body>

</html>
