<?php
class Triangle extends Shape{

    //CONSTRUCTOR

    public function __construct($height, $width){
       
    }

    //METHODS

    public function area() : float{
        
        return ($this->width*$this->height) / 2;

    }
}