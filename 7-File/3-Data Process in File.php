<?php
$filename = "C://xampp//htdocs//PHPLearn//7-File//data//file3.txt";
$students = array(
    array(
        'fname'=>'Shakil',
        'lname'=>'Mahmud',
        'age'=>13,
        'class'=>7,
        'roll'=>11
    ),
    array(
        'fname'=>'Rahim',
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

//Write in file
// $fp = fopen($filename,"w");
// foreach($students as $student){
//     $data = sprintf("%s %s %s %s %s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
//     fwrite($fp, $data);
// }
// fclose($fp);


/*
//Append mood
$fp = fopen($filename,"a");
$student = array(
    'fname'=>'Rahul',
    'lname'=>'Bosh',
    'age'=>11,
    'class'=>7,
    'roll'=>19
);
fputcsv($fp,$student);
fclose($fp);
*/

// Read in file
$fp = fopen($filename, "r");
while($data = fgets($fp)){
    $student = explode(" ",$data);
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
}
fclose($fp);


