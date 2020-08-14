<?php

$fruits = array(
    'Apple',
    'Banana',
    'Orange',
    'Mango',
    'dates',
    'plum'
);

$someFruites = array_splice($fruits, 1,3);

print_r($fruits);
print_r($someFruites);