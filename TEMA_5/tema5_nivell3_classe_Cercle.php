<?php


class Cercle extends Shape{

    //PROPERTIES

    const PI = 3.14;
    private $radi;

    //CONSTRUCTOR

    public function __construct($radi) {
        $this->radi = $radi;
    }

    //METHODS

    public function area() : float{
        
        return pow($this->radi,2) * self::PI;

    }
}