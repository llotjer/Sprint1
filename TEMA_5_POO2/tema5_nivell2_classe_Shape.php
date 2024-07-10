<?php

//Exercici 2

abstract class Shape{

    //PROPERTIES
    protected $width;
    protected $height;

    //CONSTRUCTOR

    public function __construct(float $width, float $height){
        
        $this->width = $width;
        $this->height = $height;
    }

    

    //GETTERS

    public function get_width() : float{
        return $this->width;
    }
    public function get_height() : float{
        return $this->height;
    }
    
    //SETTERS

    public function set_width(float $width): void{
        $this->width = $width;
    }
    public function set_height(float $height): void{
        $this->height = $height;
    }
}