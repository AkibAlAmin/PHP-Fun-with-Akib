<?php
$data = [
    [
        'fname'=>'Sinha',
        'lname'=>'Naznin',
        'email'=>'sin@ha.com',
        'phone'=>time(),
        'district'=>'Meherpur'
    ],
    [
        'fname'=>'Shakil',
        'lname'=>'Mahmud',
        'email'=>'sha@kil.com',
        'phone'=>time(),
        'district'=>'Comilla'
    ],
    [
        'fname'=>'Raj',
        'lname'=>'Simran',
        'email'=>'raj@sim.com',
        'phone'=>time(),
        'district'=>'Rajshahi'
    ]
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