<?php

class OurClass{
    final function doSomething(){
        echo "Doing Something";
    }
}

class MyClass extends OurClass{
   /* final function doSomething(){
        echo "Doing Something";
    } */
}

$mc = new MyClass();
$mc->doSomething();