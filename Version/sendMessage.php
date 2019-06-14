<?php
if(isset($_POST['send'])){


    include('smsgateway.php');
    $smsGateway = new SmsGateway("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0NzY2MDMxOCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY2NTk3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.Y25qEJcroUcA-o0ylz1QqK_T6RMjRsaejTfkTXAcfJk","ken05cay@gmail.com","Kenneth**1995");
    $deviceID = 108296;

    $number = $_POST['number'];
    $message = $_POST['message'];

    $options = [
        'send_at' => strtotime('+30 seconds'), // Send the message in 10 minutes
        'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
    ];

    $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
    if ($result) {
        echo json_encode(" ");
    }
    else {
        echo "Something went wrong";
    }

}
?>


<html>
    <head></head>
    <body>
        <form method="post" action="sendmessage.php">
            Number : <input type="text" name="number"/> <hr>
            Message : <input type="text" name="message"/>  <hr>
            <input type="submit" name="send" value="Send"/>
        </form>
    </body>
</html>