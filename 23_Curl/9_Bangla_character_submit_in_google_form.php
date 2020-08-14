<?php
$data = [
    [
        'fname'=>urlencode('সিনহা'),
        'lname'=>urlencode('নাজনিন'),
        'email'=>'sin@ha.com',
        'phone'=>time(),
        'district'=>'Meherpur'
    ],
];

foreach($data as $entry){
    $ch = curl_init('https://FORMLINK/formResponse');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS,"entry.15625={$entry['fname']}&entry., ");  //write each field value
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $result = curl_exec($ch);
    if(curl_error($ch)){
        echo curl_error($ch);
    }else{
        echo $result;
    }
}