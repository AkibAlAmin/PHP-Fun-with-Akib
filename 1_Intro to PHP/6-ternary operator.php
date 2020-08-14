<?php

$n = 57;

//Smart way
$result = ($n%2 == 0)? "Even\n": "Odd\n";
echo $result;



//General way
if($n%2 == 0){
    echo "Even";
    echo PHP_EOL;
}
else echo "Odd";