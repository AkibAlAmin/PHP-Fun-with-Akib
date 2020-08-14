<?php

$students = array(
    "akib",
    "Raj",
    "Shakil",
    1234,
);

$students[3] = "Hanif"; //Array Replace in their position

array_push($students, "Jamal");


 $n = count($students);
 for($i=0; $i<$n; $i++){
     echo $students[$i]."\n";
}

echo count($students); // how many arrey is their.
echo PHP_EOL;
echo $students[1];

array_push($students, "Jamal");


/*

array_shift(); - Exit from first array
arrat_unshift(); - Entry in First array
array_pop(); - Exit from last array
array_push(); - Entry in last array

*/