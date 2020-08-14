<?php

$foods = [
    'vegetables' => 'bringal','brocolli','carrot',
    'fruits' => 'orange', 'banana', 'apple',
    'drinks' => 'water', 'milk', 'bear'
];

foreach($foods as $key => $value){
    echo $key."=".$value."\n";
}

//Add
$foods['drinks'] = $foods['drinks']. ",orange juice";

//string to array
$vegatables = explode(', ','bringal, brocolli');
echo $vegatables[1];

//array to string
$vegatablesString = join(', ',$vegatables);
echo $vegatablesString;