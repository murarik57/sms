<?php
require_once "../vendor/autoload.php";
use Twilio\TwiML\MessagingResponse;

// Set the content-type to XML to send back TwiML from the PHP Helper Library
header("content-type: text/xml");

$response = new MessagingResponse();
if(isset($_POST['Body'])){
    $response->message(
    "Your msg is ".$_POST['Body']
);

}
else{
    $response->message(
    "Incorrect KEY"
);

}