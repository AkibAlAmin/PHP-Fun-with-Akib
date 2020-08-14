<?php
$to = "email_address";
$from = "John Doe <test@example.com>";
$subject = "This is Subject";
$body = "Hello! \n How are you?";
$headers = "From: {$from}\r\n";
echo mail($to, $subject, $body, $headers);