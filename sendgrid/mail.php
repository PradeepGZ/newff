<?php

function sendmail($email,$name,$msg,$subject) {
    require_once("./sendgrid/sendgrid-php.php");
//require 'vendor/autoload.php'; // If you're using Composer (recommended)
// comment out the above line if not using Composer
 
// If not using Composer, uncomment the above line



$apiKey = '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';
$sg = new \SendGrid($apiKey);
$sg_email = new \SendGrid\Mail\Mail(); 
$sg_email->setFrom("contactus@dellaarambh.com", "Fair Future");
$sg_email->setSubject($subject);
$sg_email->addTo($email, $name);

$sg_email->addContent(
    "text/html", $msg
);
$sendgrid = new \SendGrid($apiKey);
try {
    $response = $sendgrid->send($sg_email);
    return true;
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
}