<?php
//require 'vendor/autoload.php'; // If you're using Composer (recommended)
// comment out the above line if not using Composer
require("./sendgrid-php.php"); 
// If not using Composer, uncomment the above line


$apiKey = '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';
$sg = new \SendGrid($apiKey);
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("contactus@dellaarambh.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("vijay@techstalwarts.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid($apiKey);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}