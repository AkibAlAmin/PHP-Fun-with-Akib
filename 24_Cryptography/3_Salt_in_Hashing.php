<?php

$salt = "Th1s!s@S@lt";
$password = "Secret Password";
$hash = md5($password.$salt);
// echo $hash;

// 6645392d54c6d4b309161ff292a01fa0

$userInput = "Secret Password";
if(md5($userInput.$salt)=="6645392d54c6d4b309161ff292a01fa0"){
    echo "Password Correct";
}else{
    echo "Password Incorrect";
}
