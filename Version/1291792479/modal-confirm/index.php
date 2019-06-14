<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DEMO | jensbits.com | Form Confirm Modal Box</title>
    <link rel="stylesheet" type="text/css" href="css/blitzer/jquery-ui-1.8.2.custom.css">
    <link rel="stylesheet" type="text/css" href="css/thickbox.css">

    <style type="text/css">
        body {
            background-color: #efefef;
            font-family: "Trebuchet MS", sans-serif;
            font-size: 16px;
        }

        fieldset {
            background-color: #ededed;
            border: 1px solid;
        }

        legend {
            background-color: #ffffff;
            color: #cccccc;
            padding: 5px;
        }

        h1,
        h2,
        p,
        form {
            padding: 5px;
        }

        h1,
        h2 {
            font-size: 18px;
            color: #666666;
        }

        legend,
        label,
        #dialog-email,
        #TB-email {
            font-weight: bold;
            margin-left: 10px;
        }

        .container {
            width: 50%;
            margin-left: 25%;
            margin-top: 2%;
            background: #ffffff;
            border: 4px solid #cccccc;
        }

        .ui-dialog {
            font-size: 90%;
        }

        form#testconfirmJQ fieldset {
            border-color: #ce0c0c;
        }

        form#testconfirmJS legend {
            border: 1px solid #000000;
            color: #999999;
        }

        form#testconfirmJQ legend {
            background-color: #ce0c0c;
        }

        form#testconfirmTB legend {
            background-color: #000000;
        }

        .message {
            color: maroon;
        }
    </style>

    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.2.custom.min.js"></script>
    <script type="text/javascript" src="js/thickbox-compressed.js"></script>

    <script type="text/javascript">
        $(function () {

            // jQuery UI Dialog    

            $('#dialog').dialog({
                autoOpen: false,
                width: 400,
                modal: true,
                resizable: false,
                buttons: {
                    "Submit Form": function () {
                        document.testconfirmJQ.submit();
                    },
                    "Cancel": function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('form#testconfirmJQ').submit(function () {
                $('#dialog').dialog('open');
                return false;
            });

            //Thickbox


        });
    </script>

</head>

<body>


    <div class="container">
        <h2>Form Submit Confirmation jQuery UI</h2>
        <?php if (isset($_POST['emailJQ'])){
 echo "<p class='message'>jQuery UI worked!!! Your e-mail address is " .$_POST['emailJQ'];
 echo "</p>";
 }?>

        <form id="testconfirmJQ" name="testconfirmJQ" method="post">
            <fieldset>
                <legend>jQuery UI Modal Submit</legend>
                <p><label for="email">E-mail:</label><br />
                    <input id="emailJQ" type="text" name="emailJQ" value="" /></p>
                <p><input id="submitJQ" name="submitJQ" type="submit" value="Submit" /></p>
            </fieldset>
        </form>
    </div>

    <div id="dialog" title="Verify Form jQuery UI Style">
        <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 0 0;"></span> You entered your e-mail
            address as:</p>
        <p id="dialog-email"></p>
        <p>
            If this is correct, click Submit Form.</p>
        <p>To edit, click Cancel.<p>
    </div>


</body>

</html>