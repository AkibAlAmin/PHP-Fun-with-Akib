<?php

$n =12;

function isEven($n){
    if($n%2 == 0){
        return true;
    }
    return false;
};

if(isEven($n)){
    echo "{$n} is an Even.\n";
}
else echo "{$n} is odd";


