<?php
$ch = curl_init('');
curl_setopt($ch, CURLOPT_URL,'http://localhost/PHPLearn/23_Curl/1_hello_curl.php' );
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch,CURLOPT_POSTFIELDS,'secret=noodles');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$var = curl_exec($ch);
echo strtoupper($var);