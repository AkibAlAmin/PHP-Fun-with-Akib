<?php
define('OK',123);


class MyClass{
    const CITY = "Nishipur.";

    function sayHi(){
        echo "Hi From ".$this::CITY;
    }
}

$m = new MyClass();
$m->sayHi();
//echo MyClass::CITY;