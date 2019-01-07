<?php require_once 'vendor/autoload.php'; 
$client = new NexmoClient(new NexmoClientCredentialsBasic(API_KEY, API_SECRET)); 
$text = new NexmoMessageText(NEXMO_TO_NUMBER, NEXMO_FROM_NUMBER, 'How to send an SMS with PHP'); 
$response = $client->message()->send($text);
print_r($response->getResponseData());
?>
