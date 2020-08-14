<?php

$year = 2021;

if($year%4 == 0 && ($year%100 != 0 || $year%400 == 0)){
    echo "{$year} is leap year";
}
else echo "{$year} is not leap year";
