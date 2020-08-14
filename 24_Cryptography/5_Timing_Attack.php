<?php
// Timing Attack
$password = "Secret Password";
$hash = hash("sha1",$password);
echo $hash;
echo "\n";

$userInputHash = hash("sha1",$password);

if($hash == $userInputHash){
    echo "Password Matched";
    echo "\n";
}

if(hash_equals($hash,$userInputHash)){
    echo "Password Matched";
}
echo "\n";