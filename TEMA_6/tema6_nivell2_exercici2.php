<?php

class Car{

    use Turbo; //CALLING TRAIT TURBO.

    //PROPERTIES

    private $brand;
    private $plate;
    private $fuel;
    private $maxSpeed;
}

$car = new Car();
echo $car->boost();