<?php
$publicKey = openssl_get_publickey(file_get_contents("http://localhost/PHPLearn/24_Cryptography/keys/public.pem"));
$message = "Secret Message";
openssl_public_encrypt($message,$encryptedMessage,$publicKey);
echo bin2hex($encryptedMessage);

$privateKey = openssl_get_privatekey(file_get_contents("http://localhost/PHPLearn/24_Cryptography/keys/private.pem"),"hello");
openssl_private_decrypt($encryptedMessage,$decryptedMessage,$privateKey);
echo "\n";
echo $decryptedMessage;
echo "\n";