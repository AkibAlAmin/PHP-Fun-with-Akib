<?php
//curl Request
//show all info from this site

$ch = curl_init('http://SITE_LINK');
// $ch = curl_init('http://themebucket.net/wp-content/uploads/2017/04/01_massive.jpg');
// curl_setopt($ch, CURLOPT_VERBOSE,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_exec($ch);
$info = curl_getinfo($ch);
print_r($info);

//Only headers info
$headers = get_headers('http://themebucket.net/wp-content/uploads/2017/04/01_massive.jpg');
print_r($headers);