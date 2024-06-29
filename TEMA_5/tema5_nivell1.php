<?php

abstract class Animal{
    //PROPERTIES
    public $sound;

    //CONSTRUCTOR
    public function __construct(string $sound){
        $this->sound = $sound;
    }

    //GETTERS

    public function getCry(): string{
        return $this->sound;
    }

    //SETTERS

    public function setCry(string $sound){
        $this->sound = $sound;
    }

    //METHOD
    public abstract function makeSound();

}

class Dog extends Animal{
    //CONSTRUCTOR
    public function __construct($sound){
        parent::__construct($sound);
    }

    //METHOD
    public function makeSound(): string{
        return 'BUP, BUP!';
    }
}

class Cat extends Animal{

    public function __construct($sound){
        parent::__construct($sound);
    }

    //METHOD
    public function makeSound(): string{
        return 'MEU!';
    }
}

?>