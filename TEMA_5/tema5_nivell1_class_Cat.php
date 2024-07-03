<?php

class Cat implements sound{

    //PROPERTIES
    private $name;
    private $sound;

    //CONSTRUCTOR
    public function __construct($name){
        $this->sound = 'MEU!';
        $this->name = $name;
    }

    //GETTERS
    public function getName(): string{
        return $this->name;
    }

    public function getSound(): string{
        return $this->sound;
    }

    //SETTERS
    public function setName(string $name): void{
        $this->name = $name;
    }

    public function setSound(string $sound): void{
        $this->sound = $sound;
    }

    //METHOD
    public function makeSound(): string{
        return $this->sound;
    }
}