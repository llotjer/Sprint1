<?php

//Exercici 1

class Employee{

    //PROPERTIES
    private $name;
    private $salary;

    //CONSTRUCTOR

    public function __construct(string $name, int $salary){ //This would be the initializa method that we have to create by statement.

        $this->name = $name;
        $this->salary = $salary;
    }

    //GETTERS

    public function get_name(): string{
        return $this->name;
    }

    public function get_salary(): int{
        return $this->salary;
    }

    //SETTERS

    public function set_name($name): void{
        $this->name = $name;
    }

    public function set_salary($salary): void{
        $this->salary = $salary;
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

//Exercici 2

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

    public function set_width(float $width): void{
        $this->width = $width;
    }
    public function set_height(float $height): void{
        $this->height = $height;
    }

    //METHODS

    public function area() : float{
        $area = this->$width * this->$height;
        return $area;

    }




}

class Triangle extends Shape{

    //CONSTRUCTOR

    public function __construct($height, $width){
       parent :: __construct($height, $width);
       
    }

    //METHODS

    public function area() : float{
        
        return parent::area() / 2;

    }


}

class Rectangle extends Shape{

    //CONSTRUCTOR

    public function __construct($height, $width){
        parent :: __construct($height, $width);
    }

    //METHODS

    public function area() : float{
       
        return parent::area();
    } 


}
