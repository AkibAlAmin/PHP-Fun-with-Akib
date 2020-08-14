<?php

$fruits = array(
    'Apple',
    'Banana',
    'Orange',
    'Mango',
    'dates',
    'plum'
);

$newFruites1 = array_slice($fruits,0,3);
$newFruites2 = array_slice($fruits,3);

$newFruites = array_merge($newFruites1, $newFruites2);

print_r($newFruites1);
print_r($newFruites2);
print_r($newFruites);