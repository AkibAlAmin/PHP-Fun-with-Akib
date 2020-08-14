<?php

$fruits = array(
    'Apple',
    'Banana',
    'Orange',
    'Mango',
    'dates',
    'plum'
);

$someFruits = array_slice($fruits,2,3,true);
print_r($someFruits);

$someFruits = array_slice($fruits,2,3,null);
print_r($someFruits);

//Original array fixed