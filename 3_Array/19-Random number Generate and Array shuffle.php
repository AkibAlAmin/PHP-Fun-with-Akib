<?php

$numbers = range(20,72);

$random = mt_rand(0,100);
echo $random;
echo PHP_EOL;



$luck = $numbers[$random];
if($luck %2 == 0){
    echo "head\n";
}else{
    echo "Tail\n";
}

shuffle($numbers);
print_r($numbers);