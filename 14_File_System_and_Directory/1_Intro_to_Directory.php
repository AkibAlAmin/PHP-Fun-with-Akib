<?php

//Current Directory
echo getcwd();

//Directory All Element
$entries = scandir(getcwd());
print_r($entries);
