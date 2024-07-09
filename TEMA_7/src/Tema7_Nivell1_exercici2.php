<?php

namespace MyNotes;
//I created a class so i can call an object of this class to test with PHPUnit in test file. Adapted all to properties and methods.
class Notes{

    //PROPERTIES
    protected $nota;
    const PRIME_D = 6; //consts in a class are static properties, and can be accessed without creating an object.
    const SECOND_D = 4.5;
    const REPROVE = 3.3;

    //CONSTRUCTOR
    public function __construct(){
        $this->nota = rand(1,10);
        
    }

    //METHODS
    public function DiscerningByNotes():string{

        $response = "";
       
        if($this->nota >= self::PRIME_D){
            $response = "Nota: " . $this->nota . " - Grau : Primera Divisió.";
        }elseif($this->nota >= self::SECOND_D){ //Used self:: instead of this-> because in classes, constants are static properties.
            $response = "Nota: " . $this->nota . " - Grau : Segona Divisió.";
        }elseif($this->nota >= self::REPROVE){//Changed condition, making it less mathematical redundant.
            $response = "Nota: " . $this->nota . " - Grau : Tercera Divisió.";
        }elseif($this->nota < self::REPROVE){
            $response = "Nota: " . $this->nota . " - L'alumne reprovarà.";
        }
        
        return $response;
        
    }
}


