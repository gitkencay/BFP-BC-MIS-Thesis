<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DEMO | jensbits.com | Form Confirm Modal Box</title>
    <link rel="stylesheet" type="text/css" href="css/blitzer/jquery-ui-1.8.2.custom.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/thickbox.css"> -->

    <!-- <style type="text/css">
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
    </style> -->

    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.2.custom.min.js"></script>

    <script type="text/javascript">
        $(function () {

            // jQuery UI Dialog    

            $('#dialog').dialog({
                autoOpen: false,
                width: 400,
                modal: true,
                resizable: false,
                buttons: {
                    "Yes": function () {
                        document.testconfirmJQs.submit();
                    },
                    "No": function () {
                        $(this).dialog("close");
                    }
                }
            });

            $('form#testconfirmJQs').submit(function () {
                $('#dialog').dialog('open');
                return false;
            });
        });
    </script>

</head>

<body>


    <div class="container">
        <h2>Form Submit Confirmation jQuery UI</h2>
        <?php 
        if (isset($_POST['submitJQ'])){
            $firstname = $_POST['firstname'];
            $middlename = $_POST['middlename'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];

            $conn = new mysqli("localhost", "root", "", "inspection") or die(mysqli_error());

            $conn->query("INSERT INTO `barangay` VALUES('', '$firstname', '$middlename', '$lastname', '$address')") or die(mysqli_error());
            $conn->close();
        }?>

        <form id="testconfirmJQs" actions="actions.php" name="testconfirmJQs" method="post">
            <fieldset>
                <legend>jQuery UI Modal Submit</legend>
                <p><label for="email">First Name: </label><br />
                    <input id="firstname" type="text" name="firstname" /></p>
                <p><label for="email">Middle Name:</label><br />
                    <input id="middlename" type="text" name="middlename" /></p>
                <p><label for="email">Last Name:</label><br />
                    <input id="lastname" type="text" name="lastname" /></p>
                <p><label for="email">Address: </label><br />
                    <input id="address" type="text" name="address" /></p>
                <p><input id="submitJQ" name="submitJQ" type="submit" value="Submit" /></p>
            </fieldset>
        </form>
    </div>

    <div id="dialog">
        <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 0 0;"></span>Are you sure you want to
            Save this record?</p>
    </div>


</body>

</html>