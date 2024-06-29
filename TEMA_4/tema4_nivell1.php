<?php

echo "<h3>Exercici 1</h3><br>";

class Employee{

    //PROPERTIES
    private $name;
    private $salary;

    //CONSTRUCTOR

    public function __construct(string $name, int $salary){

        $this->name = $name;
        $this->salary = $salary;
    }

    //GETTERS

    public function get_name(){
        return $this->name;
    }

    public function get_salary(){
        return $this->salary;
    }

    //SETTERS

    public function set_name($name){
        $this->name = $name;
    }

    public function set_salary($salary){
        $this->salary = $salary;
    }

    //METHODS

    public function initialize(string $name, int $salary){

        //I understand by enunciate, that this method is emtpy, although it should have some code in it. 
        //I would use it instead of the setters maybe, but i don't know the initial pourpose of it.
    }

    public function print() : string{

        $response = "";
        
        if($this->salary > 6000){
            $response = "Ha de pagar impostos.";
        } else {
            $response = "No ha de pagar impostos.";
        }

        return $this->name . ": " . $response;
    }



}

echo "<h3>Exercici 2</h3><br>";

class Shape{

    //PROPERTIES
    private $width;
    private $height;

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

    public function set_width(float $width){
        $this->width = $width;
    }
    public function set_height(float $height){
        $this->height = $height;
    }

    //METHODS

    public function area(float $height, float $width) : float{
        $area = $width * $height;
        return $area;

    }




}

class Triangle extends Shape{

    //CONSTRUCTOR

    public function __construct($height, $width){
       
        $this->$this->width = $width;
        $this->$this->height = $height;
    }

    //METHODS

    public function area(float $height, float $width) : float{
        $area = ($width * $height) / 2;
        return $area;

    }


}

class Rectangle extends Shape{

    //CONSTRUCTOR

    public function __construct($height, $width){
       
        $this->$this->width = $width;
        $this->$this->height = $height;
    }

    //METHODS

    public function area(float $height, float $width) : float{
        $area = $width * $height;
        return $area;

    }


}