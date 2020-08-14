<?php
require_once("phpmailer/PHPmailer.php");
require_once("phpmailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try{

    $pm->setFrom("test@hasin.me");
    $pm->addAddress("receiver@domain.com");
    $pm->Subject = "Here is the invoice";
    $pm->Body = "Hi, Here is the <strong>invoice</strong> from your last purchase";
    $pm->AltBody = "Here is the invoice from your last purchase";
    $pm->isHTML(true);
    $pm->addAttachment("C:\xampp\htdocs\PHPLearn\16_Mailing/sick-poem.pdf");
    $pm->send();

    echo "Mail Sent";
}catch (Exception $e){
    echo "Failed ".$pm->ErrorInfo;
}