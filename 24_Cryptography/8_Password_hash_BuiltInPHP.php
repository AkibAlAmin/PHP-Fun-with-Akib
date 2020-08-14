<?php
$password = "Secret Password";
$hash = password_hash($password,PASSWORD_BCRYPT,['cost'=>14]);
echo $hash."\n";
// $2y$14$nIjqSqLNDoa1yOXy38p03e2TL2XwBpxU9qJQg5y8oyvOFxpozyrWi

$userInput = "Secret Password";
if(password_verify($userInput,$hash)){
    echo "Authenticated";
}else{
    echo "Access Denied";
}