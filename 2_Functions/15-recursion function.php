<?php

//Recursion function control
function printNumber($counter, $end, $stepping = 1){
    if($counter > $end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}

echo printNumber(21,37,2);