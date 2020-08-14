<?php

function fibonaccia($old, $new, $end){
    static $start;
    $start = $start ?? 1;
    if($start > $end){
        return;
    }
    $start++;
    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;
    fibonaccia($old, $new, $end);
}

fibonaccia(0,1,10);