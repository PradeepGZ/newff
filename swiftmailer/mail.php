<?php

function sendMail($email,$name,$message,$subject)
{
    include('vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl')) // Gmail smtp
                          ->setUsername('contact.fairfutureonline@gmail.com')
                          ->setPassword('Admin@123');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($subject))
  ->setFrom(['contact.fairfutureonline@gmail.com' => 'Fair Future Online'])
  ->setTo([$email => $name])
  ->setBody($message)
  ->setContentType('text/html');

// Send the message
$result = $mailer->send($message);
}



//  ================ =================== Contact Us ================================== 

function sendContactMail($cemail_id,$cname,$message,$subject)
{
    include('vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl')) // Gmail smtp
                          ->setUsername('contact.fairfutureonline@gmail.com')
                          ->setPassword('Admin@123');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($subject))
  ->setFrom(['contact.fairfutureonline@gmail.com' => 'Fair Future Online'])
  ->setTo([$cemail_id => $cname])
  ->setBody($message)
  ->setContentType('text/html');

// Send the message
$result = $mailer->send($message);
}


// ====================== Get In Touch ======================

function sendGetInTouchMail($temail,$tname,$message,$subject)
{
    include('vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl')) // Gmail smtp
                          ->setUsername('contact.fairfutureonline@gmail.com')
                          ->setPassword('Admin@123');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($subject))
  ->setFrom(['contact.fairfutureonline@gmail.com' => 'Fair Future Online'])
  ->setTo([$temail => $tname])
  ->setBody($message)
  ->setContentType('text/html');

// Send the message
$result = $mailer->send($message);
}




?>