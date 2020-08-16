<?php
//phpinfo();
$ch = curl_init("https://simplenote.com");
//curl_setopt();
//curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$result = curl_exec($ch);
$error = curl_error($ch);
if($error){
	echo $error;
}


/*

Need to fixed SSL Issue. 
1. Goto curl.haxx.se
2. Download cacert.pem file
3. File path must be mention in phpini file. 
curl.cainfo = "//path/cacert.pem"

*/