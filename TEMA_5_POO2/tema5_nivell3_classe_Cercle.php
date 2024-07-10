<?php


class Cercle implements Area{

    private $radi;
    const PI = 3.14;

    public function area() : float{
        
        return pow($this->radi,2) * self::PI;

    }
}