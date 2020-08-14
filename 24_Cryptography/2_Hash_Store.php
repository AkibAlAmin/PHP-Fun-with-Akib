<?php

$password = "My Secret Password";
$hash = md5($password);
// echo $hash;

// 984b9c36af2662b768a9cebdcec591e5

$userInput = "My Secret Password";
if(md5($userInput)=="984b9c36af2662b768a9cebdcec591e5"){
    echo "Password Correct";
}else{
    echo "Password Incorrect";
}