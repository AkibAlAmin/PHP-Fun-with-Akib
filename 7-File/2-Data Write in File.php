<?php

$filename = "C://xampp//htdocs//PHPLearn//7-File//data//file2.txt";

$fp = fopen($filename,'w');
fwrite($fp, "This is Akib Al-AMin\n");
fclose($fp);


 /*  //Write mood a ager data rakha

$existingData = file_get_contents($filename);
$fp = fopen($filename,"w");
fwrite($fp, $existingData);
fwrite($fp, "Want to learn more and more");
fclose($fp);
*/


 /*   //Append mood
$fp = fopen($filename,'a');
file_put_contents($filename, "\nEarth\n");
fclose($fp);
*/
