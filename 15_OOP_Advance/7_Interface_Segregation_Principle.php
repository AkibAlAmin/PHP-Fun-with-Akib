<?php
//interface segregation
interface Vehicle{
    function getMileage();
    function getName();
    function getPrice();
}

interface TwoWheelers{
    
}

interface FourWheeleres{
    
}
interface SixWheeleres{

}



class MotorCycle implements Vehicle, TwoWheelers{
    function getMileage(){}
    function getName(){}
    function getPrice(){}

}

class Truck implements Vehicle, SixWheeleres{
    function getMileage(){}
    function getName(){}
    function getPrice(){}

}