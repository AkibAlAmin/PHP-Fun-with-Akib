<?php

$numbers = array(1,11,2,56,3,4,22,77);

if(in_array(56, $numbers)){  //(56, $numbers, true) // type also check
    printf("56 is found\n");
}

$offset = array_search(56,$numbers, true);
echo $offset;

//search by key
//key_exists('key',$variable);