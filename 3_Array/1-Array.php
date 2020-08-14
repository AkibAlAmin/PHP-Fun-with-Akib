<?php

$students = array(
    "akib",
    "Raj",
    "Shakil",
    1234,
);

$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]."\n";
}

echo count($students); // how many arrey is their.
echo PHP_EOL;
echo $students[1];