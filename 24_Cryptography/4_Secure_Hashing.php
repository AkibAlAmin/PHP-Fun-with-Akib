<?php
$secretPassword = "WOW";
$message = "This is changed secret message";
$hash = mhash(MHASH_SHA512, $message,$secretPassword);
echo bin2hex($hash);