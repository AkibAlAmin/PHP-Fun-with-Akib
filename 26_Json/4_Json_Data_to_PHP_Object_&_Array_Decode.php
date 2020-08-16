<?php
class Person {
    public $firstName;
    public $lastName;
}

$p = new Person();
$p->firstName = "John";
$p->lastName = "Doe";

$jsonData = json_encode( $p );
//echo $jsonData;

$decodedJSONData = json_decode( $jsonData, true );
print_r( $decodedJSONData );
echo $decodedJSONData['firstName']."\n";

print_r( json_decode( json_encode( array('key' => 'value') ) ) );