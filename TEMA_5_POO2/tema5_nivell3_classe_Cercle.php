<?php


class Cercle extends Shape{


    public function area() : float{
        
        return pow($this->radi,2) * parent::PI;

    }
}