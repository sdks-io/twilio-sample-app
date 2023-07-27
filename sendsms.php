<?php

require_once "vendor/autoload.php";

use TwilioMessagingSMSLib\TwilioMessagingSMSClientBuilder;
use TwilioMessagingSMSLib\Exceptions\ApiException;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$body = $_POST['body'];
$to = $_POST['to'];
$from = $_POST['from'];

$client = TwilioMessagingSMSClientBuilder::init()
    ->username($_ENV["TWILIO_ACCOUNT_SID"])
    ->password($_ENV["TWILIO_AUTH_TOKEN"])
    ->accountSid($_ENV["TWILIO_ACCOUNT_SID"])
    ->build();

try {
    $result = $client->getGettingStartedController()->sendAnSMS(
        $body,
        $to,
        $from
    );
    // var_dump($result);
    $data['status'] = true;
    $data['result'] = $result;
    echo json_encode($data);
} catch (ApiException $e) {
    $data['status'] = false;
    $data['error'] = $e;
    echo json_encode($data);
}

?>