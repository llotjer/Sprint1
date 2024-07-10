<?php

class Triangle extends Shape implements Area{
    
    //METHODS

    public function area() : float{
        
        return ($this->width * $this->height) / 2;

    }
}