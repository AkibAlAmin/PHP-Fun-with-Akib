<?php

function sum(int $x=0, int $y=0, int $z=0):int {
    return $x+$y+$z;
}

echo sum(2,3,5);
echo PHP_EOL;


//unlimited argument accept

function sum2(int ...$numbers):int {
    $result = 0;
    for($i=0; $i<count($numbers); $i++){
        $result +=$numbers[$i];
    }
    return $result;
}

echo sum2(4,3,5,5,1);