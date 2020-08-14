<?php

$person = array(
    'fname' => 'Hello',
    'lname' => 'World'
);

//Deep copy (copy by value)
$newPerson = $person;
$newPerson['lname']='Pluto';

print_r($person);
print_r($newPerson);


//Shallow copy (copy by reference)
$newPerson = &$person; //extra &
$newPerson['lname']='Pluto';

print_r($person);
print_r($newPerson);