<?php

 $filename = "C://xampp//htdocs//PHPLearn//7-File//data//file1.txt";

 if(is_readable($filename)){
 $fp = fopen($filename, 'r');
 $line = fgets($fp);
//$line = fgets($fp,3);

 echo $line;
 fclose($fp);
 }

 //Multiple Line Read
 $fp = fopen($filename, 'r');
while($line = fgets($fp)){
    echo $line;
}
fclose($fp);


//Read like a Array
$fp = fopen($filename, 'r');
$data = file($filename);
print_r($data);

// Another Option
$data = file_get_contents($filename);
echo $data;


// Also try two function 
// rewind();
// fseek();
