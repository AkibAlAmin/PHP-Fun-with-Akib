<?php

$numbers = range(12,20,2);  //(Start,Stop,Steping)
print_r($numbers);

foreach(range(0,60,5) as $number){
    if($number>0){
        echo $number."\n";
    }
}