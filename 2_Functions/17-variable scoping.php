<?php

$name = "Akib";

function scop(){
    //global $name;
    //echo $name;
    echo $GLOBALS['name']; //declare globals
}

scop();
echo PHP_EOL;

function doSomething(){
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;
}

function doExtra(){
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();
doExtra();