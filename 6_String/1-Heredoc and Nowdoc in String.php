<?php

$name = "Rakib";

$string01 = "My name is {$name} \n \t \n";
echo $string01;

$string02 = 'My name is {$name} \n \t'; // Not purch value 
echo $string02;
echo PHP_EOL;

//Heredoc
$heredoc = <<<EOD
data 1
new line {$name} \n
more txt...
EOD;
echo $heredoc;



//Nowdoc
$heredoc = <<<'EOD'
data 1
new line {$name} \n
more txt...
EOD;
echo $heredoc;
