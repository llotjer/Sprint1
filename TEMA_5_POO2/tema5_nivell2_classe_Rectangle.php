<?php

class Rectangle extends Shape implements Area{

    //METHODS

    public function area() : float{
       
        return $this->width * $this->height;
    } 
}
