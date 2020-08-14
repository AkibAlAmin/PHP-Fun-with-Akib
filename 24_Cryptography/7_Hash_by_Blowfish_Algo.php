<?php
$message = "This is a secret message";
// $blowfish_salt = "$2y$10$".bin2hex(random_bytes(11));
$blowfish_salt = "$2y$10$".bin2hex(openssl_random_pseudo_bytes(11));
echo $blowfish_salt;
echo "\n";
// $2y$10$efde9068bc26bc3b92acd6

echo crypt($message,$blowfish_salt);

/*
$blowfish_salt = "$2y$10$".bin2hex(openssl_random_pseudo_bytes(11));
echo $blowfish_salt."\n";
$hash = crypt("HelloWorlds",$blowfish_salt);

echo $hash;
echo hash_equals("HelloWorlds",$hash);
*/