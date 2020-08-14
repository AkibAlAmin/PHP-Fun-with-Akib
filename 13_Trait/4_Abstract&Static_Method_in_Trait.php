<?php
trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;

    function sayHi(){
        echo "Hi";
    }
}
class MyClassB{
    use MyTrait;

    function sayHi(){
        echo "Hi++";
    }
}


MyClassA::$number  = 2;
MyClassB::$number  = 8;
echo MyClassA::$number;
echo PHP_EOL;

$ma = new MyClassA();
$mb = new MyClassB();
echo $ma::$number;
echo PHP_EOL;


echo MyClassB::$number;
echo PHP_EOL;
echo $mb::$number;
echo PHP_EOL;