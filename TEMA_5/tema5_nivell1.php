<?php

abstract class Animal{
    //PROPERTIES
    public $cry; //This is the default word for the sound of any animal.

    //CONSTRUCTOR
    public function __construct(string $cry){
        $this->cry = $cry;
    }

    //GETTERS

    public function getCry(): string{
        return $this->cry;
    }

    //SETTERS

    public function setCry(string $cry){
        $this->cry = $cry;
    }

    //METHOD
    public abstract function toCry();

}

class Dog extends Animal{
    //CONSTRUCTOR
    public function __construct($cry){
        parent::__construct($cry);
    }

    //METHOD
    public function toCry(): string{
        return 'BUP, BUP!';
    }
}

class Cat extends Animal{

    public function __construct($cry){
        parent::__construct($cry);
    }

    //METHOD
    public function toCry(): string{
        return 'MEU!';
    }
}

?>