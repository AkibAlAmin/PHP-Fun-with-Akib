<?php

$numbers1 = array(1,23,57,66,7,32,4,8,9);
$numbers2 = array(88,3,54,6,43,7,32,25,1);

$fruits1 = array("a"=>"apple","b"=>"banana","c"=>"lemon");
$fruits2 = array("d"=>"pineapple","b"=>"banana","g"=>"apple","c"=>"lemon");


// check without key
$commonNum = array_intersect($numbers1, $numbers2); 
print_r($commonNum); 

$commonFruits = array_intersect($fruits1, $fruits2);
print_r($commonFruits);

//check with key
$commonFruits = array_intersect_assoc($fruits1, $fruits2);
print_r($commonFruits);

//First array elememt havn't in second array
$diff = array_diff($numbers1,$numbers2);
print_r($diff);

$diffF = array_diff($fruits1,$fruits2);
print_r($diffF); 

//First array elememt havn't in second array with key
$diffF = array_diff_assoc($fruits1,$fruits2);
print_r($diffF);

