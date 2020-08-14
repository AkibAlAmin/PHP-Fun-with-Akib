<?php
$filename = "C://xampp//htdocs//PHPLearn//7-File//data//file5.txt";
$students = array(
    array(
        'fname'=>'Ismail',
        'lname'=>'Ali',
        'age'=>13,
        'class'=>7,
        'roll'=>11
    ),
    array(
        'fname'=>'Muslim',
        'lname'=>'Uddin',
        'age'=>15,
        'class'=>9,
        'roll'=>5      
    ),
    array(
        'fname'=>'Maliha',
        'lname'=>'Raha',
        'age'=>10,
        'class'=>6,
        'roll'=>17
    ),
);

//write
$encodedData = json_encode($students);
file_put_contents($filename,$encodedData);

//Read
$data = file_get_contents($filename);
$allStudents = json_decode($data,true);
print_r($allStudents);

//Access
echo $allStudents[2]['fname'];
// true na dile, echo $allStudents[0]->fname;