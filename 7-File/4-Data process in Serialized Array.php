<?php
$filename = "C://xampp//htdocs//PHPLearn//7-File//data//file4.txt";
$students = array(
    array(
        'fname'=>'Rahim',
        'lname'=>'Mahmud',
        'age'=>13,
        'class'=>7,
        'roll'=>11
    ),
    array(
        'fname'=>'Karim',
        'lname'=>'Ahmed',
        'age'=>15,
        'class'=>9,
        'roll'=>5      
    ),
    array(
        'fname'=>'Pial',
        'lname'=>'Raha',
        'age'=>10,
        'class'=>6,
        'roll'=>17
    ),
);

//Write
$data = serialize($students);
file_put_contents($filename,$data);

//Read
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

//Delete Passific
unset($allStudents[1]);
$data = serialize($allStudents);
file_put_contents($filename,$data);

//Add
$student = array(
    'fname'=>'Maiha',
    'lname'=>'Raha',
    'age'=>100,
    'class'=>60,
    'roll'=>170
);
array_push($allStudents,$student);
$data = serialize($allStudents);
file_put_contents($filename,$data);