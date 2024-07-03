<?php
class Triangle extends Shape{
    //METHODS

    public function area() : float{
        
        return ($this->width * $this->height) / 2;

    }
}