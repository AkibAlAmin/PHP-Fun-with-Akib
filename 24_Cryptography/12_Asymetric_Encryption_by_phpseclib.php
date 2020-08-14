<?php
require __DIR__."/vendor/autoload.php";
use phpseclib\Crypt\RSA;
$message = "This is asecret message";

$rsa = new RSA();
$rsa->loadkey(file_get_contents("./keys/id_rsa.pub"));
$encText = $rsa->encrypt($message);
echo bin2hex($encText);

$rsa->loadkey(file_get_contents("./keys/id_rsa"));
$decText = $rsa->encrypt($encText);
echo $decText;


