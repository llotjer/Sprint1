<?php

//Exercici 2

abstract class Shape{

    //PROPERTIES
    protected $width;
    protected $height;
    const PI = 3.14;
    protected $radi;

    //CONSTRUCTOR

    public function __constructCercle(float $radi){
        $this->radi = $radi;
        
    }

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
    public function get_radi() : float{
        return $this->radi;
    }

    //SETTERS

    public function set_width(float $width): void{
        $this->width = $width;
    }
    public function set_height(float $height): void{
        $this->height = $height;
    }
    public function set_radi(float $radi): void{
        $this->radi = $radi;
    }

    //METHODS

    public abstract function area();
}