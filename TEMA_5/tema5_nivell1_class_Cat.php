<?php

class Cat extends Animal{

    //CONSTRUCTOR
    public function __construct($name){
       $this->sound = 'MEU!';
       $this->name = $name;
    }

    //GETTER
    public function getName(): string{
        return $this->name;
    }

    //METHOD
    public function makeSound(): string{
        return $this->sound;
    }
}