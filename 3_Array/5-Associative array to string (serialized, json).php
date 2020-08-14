<?php

$student = array(
    'fname' => 'Wasif',
    'lname' => 'Zaman',
    'age' => '14',
    'class' => '9',
    'section' => 'B',
);

print_r($student);

echo $student['fname']." ".$student['lname']."\n";
printf("%s %s\n", $student['fname'], $student['lname']);

//echo join(",",$student); //total join

//echo serialize($student);

//php save style
$serialized = serialize($student);
$newStudent = unserialize($serialized);
print_r($newStudent);

//JavaScriptObjectNotation JSON style
$jsonData = json_encode($student);
echo $jsonData;
echo "\n";

$student2 = json_decode($jsonData); //This is like an Object
print_r($student2);

$student2 = json_decode($jsonData, true); //This is like an Array
print_r($student2);


