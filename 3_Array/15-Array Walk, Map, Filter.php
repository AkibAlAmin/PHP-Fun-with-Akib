<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10,11);

function square($n){
    printf("Square of %d is %d \n" ,$n, $n*$n);
}

array_walk($numbers,'square');

function cube($n){
    return $n*$n*$n;
}

$newArray = array_map('cube', $numbers);

print_r($numbers);
print_r($newArray);

//callback function

function even($n){
    return $n%2 == 0;
}

$newArray2 = array_filter($numbers, 'even');
print_r($newArray2);

$persons = array('sinha', 'shojol', 'Shakil', 'raj','jamal','smrity');

function filterByS($name){
    return $name[0] == 's';
}

$newPerson = array_filter($persons,'filterByS');
print_r($newPerson);