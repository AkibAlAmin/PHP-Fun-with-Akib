<?php

for($i=1; $i<10; $i++){
    echo $i;
    echo PHP_EOL;
};

//multiple loop
for($i=1; $i<10; $i++){
    echo $i;
    echo PHP_EOL;
    for($j=0; $j<=$i; $j++){
        echo "*";
    };
};

//another way
echo PHP_EOL;
$i = 0;
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;