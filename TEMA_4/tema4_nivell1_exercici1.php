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