<?php
// print_r(openssl_get_cipher_methods());
// aes-128-ccm

$methodName = "aes-128-cbc";
$iv_length = openssl_cipher_iv_length($methodName);
$iv = openssl_random_pseudo_bytes($iv_length);

$message = "This is  secret message";
$password = "SecretPassword";
$encryptedMessage = openssl_encrypt($message,$methodName,$password,0,$iv);
echo $encryptedMessage;
echo "\n";

echo openssl_decrypt($encryptedMessage,$methodName,$password,0, $iv);