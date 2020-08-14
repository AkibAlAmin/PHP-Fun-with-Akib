<?php

$string = "quick brown fox jumps over the lazy dog";

$offset = strrpos($string, "fox");
echo $offset;


//String Replace
$replace = str_replace('brown', 'red',$string);
echo $replace;